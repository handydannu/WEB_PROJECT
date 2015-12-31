$(function(){

    $(document).keydown(function(e){
        WSync.activity = 0;
        if(e.ctrlKey){
            if(e.shiftKey){
                if(e.keyCode == 90 || e.keyCode == 122){
                    WXPaint.redoChange();
                    WSync.addReference(WXPaint);
                    WSync.save();
                    WSync.data = WXPaint.getDataJSON();
                }
            }
            else if(e.keyCode == 90 || e.keyCode == 122){
                WXPaint.undoChange();
                WSync.addReference(WXPaint);
                WSync.save();
                WSync.data = WXPaint.getDataJSON();
            }

        }
    });

    WXPaint.init();

    $('#clear').click(function(){
        WXPaint.clearCanvas();
        WSync.activity = 0;
    });

    $('#redraw').click(function(){
        WXPaint.redraw();
        WSync.activity = 0;
    });

    WXPaint.isSRun = false;
    $('#s_redraw').click(function(){
        WXPaint.btnSR = '#s_redraw';
        WXPaint.runSRedraw();
    });

    $('#clear_mem').click(function(){
        WXPaint.destroy();
        WSync.save();
        WSync.data = WXPaint.getDataJSON();
    });

    $('#capture').click(function(){
        WXPaint.capture('#capture-area');
    });
    $('html').click(function(){
        WXPaint.hideCapture();
    });
    $('#capture-area').click(function(e){
        e.stopPropagation();
    });

    $('#undo').click(function(){
        WXPaint.undoChange();
        WSync.save();
        WSync.data = WXPaint.getDataJSON();
    });

    $('#redo').click(function(){
        WXPaint.redoChange();
        WSync.save();
        WSync.data = WXPaint.getDataJSON();
    });

    $("#linesize").slider({
        orientation: "horizontal",
        range: "min",
        min: 1,
        max: 30,
        value : 5,
        slide: changeSize,
        change: changeSize
    });

    $("#speed").slider({
        orientation: "horizontal",
        range: "min",
        max: 100,
        value : 90,
        slide: changeSpeed,
        change: changeSpeed
    });

    function changeSize(){
        size = $("#linesize").slider("value");
        $("#val_linesize").html(size);
        WXPaint.lineWidth(size);
    }

    function changeSpeed(){
        speed = $("#speed").slider("value");
        $("#val_speed").html(speed);
        WXPaint.setSpeedSR(100-speed);
    }

    WSync.init(WXPaint);

    $('#paint').mouseup(function(){
        WSync.addReference(WXPaint);
        WSync.save();
    }).mousedown(function(e){
            WSync.addReference(WXPaint);
            WSync.activity = 0;
        });

    WXPaint.hoverTitle('#test');
});

