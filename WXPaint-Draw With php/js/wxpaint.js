/**
 *
 * WXPaint
 * Author : Asih Joko Purnomo
 *
 * Required jQuery to run
 *
 */

WXPaint = {

    canvas : null,
    context : null,

    canvasElem : '#paint',
    sketchElem : '#sketch',

    sketch : null,
    sketch_style : null,

    mouse : {x: 0, y: 0},
    last_mouse : {x: 0, y: 0},
    mouseButton : '',

    graph : [],
    idGraph : 0,

    list : [],
    idList : 0,

    idSR : 0,
    idSRL : 0,
    speedSR : 10,
    idSRun : false,
    btnSR : '',
    lastIdGraph : 0,

    setting : {
        strokeStyle : '#333',
        lineWidth : 1
    },

    isProcessing : false,

    captureElem : '',
    isCapture : false,

    init : function(canvasE, sketchE){
        if(canvasE != undefined)
            this.canvasElem = canvasE;

        if(sketchE != undefined)
            this.sketchElem = sketchE;

        this.canvas = document.querySelector(this.canvasElem);
        this.context = this.canvas.getContext('2d');

        this.sketch = document.querySelector(this.sketchElem);
        this.sketch_style = getComputedStyle(this.sketch);

        this.initCanvas();
        this.initDrawing();
        this.initMouse();
    },

    initCanvas : function(){
        this.canvas.width = parseInt(this.sketch_style.getPropertyValue('width'));
        this.canvas.height = parseInt(this.sketch_style.getPropertyValue('height'));
    },

    initMouse : function(){
        this.canvas.addEventListener('mousemove', function(e) {
            WXPaint.last_mouse.x = WXPaint.mouse.x;
            WXPaint.last_mouse.y = WXPaint.mouse.y;

            WXPaint.mouse.x = e.pageX - this.offsetLeft;
            WXPaint.mouse.y = e.pageY - this.offsetTop;
            $('#mouse_pos').html('x='+WXPaint.mouse.x + ", y=" + WXPaint.mouse.y);
        }, false);

        this.canvas.addEventListener('mousedown', function(e) {

            if(e.button == 0 && WXPaint.mouseButton == 'R'){
                WXPaint.restoreSetting();
                WXPaint.mouseButton = 'L';
            }
            else if(e.button == 2){
                WXPaint.saveSetting();
                WXPaint.context.strokeStyle = '#fff';
                WXPaint.mouseButton = 'R';
            }
            WXPaint.list = [];
            WXPaint.idList = 0;
            WXPaint.canvas.addEventListener('mousemove', WXPaint.onPaint, false);
        }, false);

        this.canvas.addEventListener('mouseup', function() {
            WXPaint.canvas.removeEventListener('mousemove', WXPaint.onPaint, false);
            WXPaint.graph[WXPaint.idGraph] = WXPaint.list;
            WXPaint.idGraph++;
            WXPaint.lastIdGraph = WXPaint.idGraph;
        }, false);

        $('#paint').bind("contextmenu",function(){
            return false;
        });
    },

    initDrawing : function(){
        this.context.lineWidth = 5;
        this.context.lineJoin = 'round';
        this.context.lineCap = 'square';
        this.context.strokeStyle = '#333';

    },

    onPaint : function(){
        WXPaint.context.beginPath();
        WXPaint.context.moveTo(WXPaint.last_mouse.x, WXPaint.last_mouse.y);
        WXPaint.context.lineTo(WXPaint.mouse.x, WXPaint.mouse.y);
        WXPaint.context.closePath();
        WXPaint.context.stroke();

        if(WXPaint.last_mouse.x != WXPaint.mouse.x || WXPaint.last_mouse.y != WXPaint.mouse.y){
            strokeStyle = WXPaint.strokeMinify(WXPaint.context.strokeStyle);
            WXPaint.list[WXPaint.idList] = [[WXPaint.last_mouse.x, WXPaint.last_mouse.y], [WXPaint.mouse.x, WXPaint.mouse.y], strokeStyle, WXPaint.context.lineWidth];
            WXPaint.idList++;
        }
    },

    strokeMinify : function(str){
        strokeStyle = str.replace("#","");
        isSame = true;
        ch = strokeStyle[0];
        for(i=1;i<6;i++){
            if(strokeStyle[i] != ch){
                isSame = false;
            }
        }
        if(isSame){
            strokeStyle = ch;
        } else {
            ch2 = strokeStyle[3];
            if(strokeStyle[1]==ch && strokeStyle[2]==ch){
                if(strokeStyle[4]==ch2 && strokeStyle[5]==ch2){
                    strokeStyle = ch+""+ch2;
                }
            }
        }
        return strokeStyle;
    },

    strokeRestore : function(str){
        strokeStyle = str;
        if(str.length == 1){
            strokeStyle = str+""+str+""+str+""+str+""+str+""+str;
        } else if(str.length == 2){
            strokeStyle = str[0]+""+str[0]+""+str[0]+""+str[1]+""+str[1]+""+str[1];
        }
        return strokeStyle;
    },

    clearCanvas : function(){
        this.saveSetting();
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.context.beginPath();
        this.context.lineWidth="1";
        this.context.strokeStyle="#ffffff";
        this.context.rect(0, 0, this.canvas.width, this.canvas.height);
        this.context.fillStyle = '#ffffff';
        this.context.fill();
        this.context.stroke();
        this.restoreSetting();
    },

    destroy : function(){
        this.lastIdGraph = this.idGraph+1;
        this.idGraph = 0;
        this.idSR = 0;
        this.idSRL = 0;
        this.clearCanvas();
    },

    redraw : function(){
        this.isProcessing = true;
        this.saveSetting();
        this.clearCanvas();
        for(i=0;i<this.idGraph;i++){
            list = this.graph[i];
            for(j=0;j<list.length;j++){


                this.context.lineWidth = list[j][3];
                this.context.strokeStyle = "#"+this.strokeRestore(list[j][2]);
                this.context.beginPath();
                this.context.moveTo(list[j][0][0], list[j][0][1]);
                this.context.lineTo(list[j][1][0], list[j][1][1]);
                this.context.closePath();
                this.context.stroke();
            }
        }
        this.restoreSetting();
        this.isProcessing = false;
    },

    sRedraw : function(){
        list = this.graph[this.idSR];

        if(this.idSR < this.idGraph){
            this.isProcessing = true;
            if(list[this.idSRL] != undefined){
                this.context.lineWidth = list[this.idSRL][3];
                this.context.strokeStyle = "#"+WXPaint.strokeRestore(list[this.idSRL][2]);
                this.context.beginPath();
                this.context.moveTo(list[this.idSRL][0][0], list[this.idSRL][0][1]);
                this.context.lineTo(list[this.idSRL][1][0], list[this.idSRL][1][1]);
                this.context.closePath();
                this.context.stroke();
                this.idSRL++;
            } else {
                WXPaint.idSRL = 0;
            }

            setTimeout(function(){
                if(WXPaint.idSRL == list.length){
                    WXPaint.idSR++;
                    WXPaint.idSRL = 0;
                }
                WXPaint.sRedraw();
            },this.speedSR);
        } else {
            this.idSR = 0;
            this.idSRL = 0;
            this.isProcessing = false;
            this.restoreSetting();
            WXPaint.isSRun = false;
            $(this.btnSR).attr('src', 'img/play.png');
        }
    },

    runSRedraw : function(){
        if(!WXPaint.isSRun && WXPaint.idGraph > -1){
            this.saveSetting();
            this.clearCanvas();
            this.sRedraw();
            WSync.activity = 0;

            this.isSRun = true;
            $(this.btnSR).attr('src', 'img/stop.png');
        } else {
            this.stopSRedraw();
            $(this.btnSR).attr('src', 'img/play.png');
        }
    },

    stopSRedraw : function(){
        this.idSR = this.idGraph;
        WXPaint.isSRun = false;
        this.redraw();
    },

    lineWidth : function(width){
        this.context.lineWidth = width;
    },

    saveSetting : function(){
        this.setting.strokeStyle = this.context.strokeStyle;
        this.setting.lineWidth = this.context.lineWidth;
    },

    restoreSetting : function(){
        this.context.strokeStyle = this.setting.strokeStyle;
        this.context.lineWidth = this.setting.lineWidth;
    },

    getDataJSON : function(){
        data = [];
        for(i=0;i<this.idGraph;i++){
            data[i] = this.graph[i];
        }
        json = JSON.stringify(data);
        return json;
    },

    setDataJSON : function(data){
        json = $.parseJSON(data);
        if(json != null){
            this.graph = json;
            this.idGraph = this.graph.length;
            this.lastIdGraph = this.idGraph;
        }
    },

    setSpeedSR : function(speed){
        this.speedSR = speed;
    },

    undoChange : function(){
        this.idGraph = this.lastIdGraph;
        if(this.idGraph > 0){
            this.idGraph--;
            this.lastIdGraph = this.idGraph;
        }
        this.redraw();
    },

    redoChange : function(){
        if(this.idGraph < this.graph.length){
            this.idGraph++;
            this.lastIdGraph = this.idGraph;
        }
        this.redraw();
    },

    getImageData : function(){
        return this.context.getImageData(0, 0, this.canvas.width, this.canvas.height);
    },

    capture : function(elem){
        img = this.canvas.toDataURL('image/png');

        this.captureElem = elem;
        $(elem).css({
            visibility : 'visible',
            height : WXPaint.canvas.height+10,
            width : WXPaint.canvas.width+10,
            top:10,
            left:10
        }).html('<img src="'+ img +'">');
        $(this.captureElem+"-close").css({
            top:2,
            left:2
        });
        $(this.captureElem+"-base").css({
            height:'100%',
            width:'100%'
        });
        setTimeout(function(){
            WXPaint.isCapture = true;
        },500);
    },

    hideCapture : function(){
        if(this.isCapture){
            this.isCapture = false;
            $(this.captureElem).css({
                visibility : 'hidden',
                height : 0,
                width : 0,
                top:-100,
                left:-100
            }).html('');
            $(this.captureElem+"-close").css({
                top:-100,
                left:-100
            });
            $(this.captureElem+"-base").css({
                height:0,
                width:0
            });
        }
    },

    hoverTitle : function(id){

        //$(document).append('<div class="h-title" id=""></div>');
    }


};
