<!DOCTYPE html>
<html>
<head>
    <title>Canvas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/wxpaint.css">
    <link rel="stylesheet" href="css/colorpicker/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker/layout.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <script src="js/colorpicker/jquery.js"></script>
    <script src="js/colorpicker/colorpicker.js"></script>
    <script src="js/colorpicker/eye.js"></script>
    <script src="js/colorpicker/utils.js"></script>
    <script src="js/colorpicker/layout.js?ver=1.0.2"></script>

    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/wxpaint.js"></script>
    <script src="js/wsync.js"></script>
    <script src="js/bmark.js"></script>


    <script language="JavaScript">
        <?php
            $filename = 'data';

            if(isset($_GET['f'])){
                $filename = $_GET['f'];
            }
            else if(isset($_GET['file'])){
                $filename = $_GET['file'];
            }
            ?>
        $(function(){
            <?php echo 'filename = "'.$filename.'";';?>
            WSync.filename = filename;
        });

    </script>
    <script src="js/script.js"></script>
</head>
<body>
<div id="sketch">
    <canvas id="paint"></canvas>
</div>
<div class="button-group">
    <img src="img/play.png" class="btn-icon" id="s_redraw" title="Animate Redraw">
    <img src="img/redraw.png" class="btn-icon" id="redraw" title="Redraw">
    <img src="img/clean.png" class="btn-icon" id="clear" title="Clear Canvas">
    <img src="img/delete.png" class="btn-icon" id="clear_mem" title="Destroy">
    <img src="img/capture.png" class="btn-icon" id="capture" title="Capture">
    <img src="img/undo.png" class="btn-icon" id="undo" title="Undo">
    <img src="img/redo.png" class="btn-icon" id="redo" title="Redo">
</div>
<div class="color">
    <div id="colorSelector"><div style="background-color: #333"></div></div>
</div>
<div class="float-left size">SIZE</div>
<div class="slider">
    <div id="linesize"></div>
    <div id="val_linesize">5</div>
</div>
<div class="float-left size">SPEED</div>
<div class="slider">
    <div id="speed"></div>
    <div id="val_speed">90</div>
</div>
<div id="mouse_pos">x=0, y=0</div>
<div id="info"></div>
<div id="action"></div>
<div id="ind1" class="indicator"></div>
<div id="ind2" class="indicator"></div>
<img src="img/close.png" id="capture-area-close">
<div id="capture-area"></div>
<div id="capture-area-base"></div>
</body>
</html>