<!DOCTYPE html>
<html>
  <head>
  <?php
	$host='localhost';
	$username='root';
	$password='';
	$database='jst_ai';
	$connect=mysql_connect($host,$username,$password);
	mysql_select_db($database,$connect);
	mysql_query("UPDATE tb_batuk set dynamicValue = 0"); /*---RESET---*/
   ?>
    <title>Artificial Neural Network</title>
    <meta charset="utf-8">
    <link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <style>body {font:13px verdana;font-weight:normal}</style>
        
    <script>
    $(document).ready(function() {
        var iCnt = 0;
		var TheTextBox = document.getElementById("max_gejala");
        // CREATE A "DIV" ELEMENT AND DESIGN IT USING JQUERY ".css()" CLASS.
        var container = $(document.createElement('div')).css({
            padding: '5px', margin: '20px', width: '900px', border: '1px dashed',
            borderTopColor: '#999', borderBottomColor: '#999',
            borderLeftColor: '#999', borderRightColor: '#999'
        });
        $('#btAdd').click(function() {
            if (iCnt <= 19) {
                iCnt = iCnt + 1;
                // ADD TEXTBOX.
                $(container).append('<input type=text style="width:700px" class="input" name="tb'+iCnt+'" id=tb' + iCnt + ' ' + 'value="Gejala' + iCnt + '" /></br>');

                if (iCnt == 1) {        // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                    var divSubmit = $(document.createElement('div'));
                    $(divSubmit).append('<input type=submit class="button" onclick="GetTextValue()"' + 
                            'id=btSubmit value=Submit />');   
                }
                $('#main').after(container, divSubmit);   // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
				TheTextBox.value = iCnt+1;
            }
            else {      // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON. (20 IS THE LIMIT WE HAVE SET)
                $(container).append('<label>Reached the limit</label>'); 
                $('#btAdd').attr('class', 'bt-disable'); 
                $('#btAdd').attr('disabled', 'disabled');
            }
        });
        $('#btRemove').click(function() {   // REMOVE ELEMENTS ONE PER CLICK.
            if (iCnt != 0) { $('#tb' + iCnt).remove(); iCnt = iCnt - 1; }
            if (iCnt == 0) { $(container).empty(); 
                $(container).remove(); 
                $('#btSubmit').remove(); 
                $('#btAdd').removeAttr('disabled'); 
                $('#btAdd').attr('class', 'bt') 
            }
        });
        $('#btRemoveAll').click(function() {    // REMOVE ALL THE ELEMENTS IN THE CONTAINER.
            $(container).empty(); 
            $(container).remove(); 
            $('#btSubmit').remove(); iCnt = 0; 
            $('#btAdd').removeAttr('disabled'); 
            $('#btAdd').attr('class', 'bt');
        });
    });

    // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
    var divValue, values = '';
    function GetTextValue() {
        $(divValue).empty(); 
        $(divValue).remove(); values = '';
        $('.input').each(function() {
            divValue = $(document.createElement('div')).css({
                padding:'5px', width:'200px'
            });
            values += this.value + '<br />'
        });
        $(divValue).append('<p><b>Your selected values</b></p>' + values);
        $('body').append(divValue);
    }
</script>
  </head>
<body id="top">
<div class="wrapper row1">
    <header id="header" class="clear"> 
        <div id="logo" class="fl_left">
          <h1><i class="icon-stethoscope"></i> <a href="index.php">ArtificialNeuralNetwork</a></h1>
          <p align="right">Diagnosa penyakit batuk</p>
        </div>

        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="kami.php">PENGEMBANG</a></li>
          </ul>
        </nav>
    </header>
</div>
<!-- ################################################################################################ --> 
<div class="wrapper row2">
  <div id="breadcrumb">
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="diagnosa.php">Diagnosa</a></li>
    </ul>
  </div>
</div>
<!-- ################################################################################################ --> 

<div class="wrapper row3">
  <main id="container" class="clear">
    <div class="sidebar one_quarter first"> 
          
      
    </div>
    <!-- ########################################################################################## -->
   		<form action="result.php" method="post">
        
        <div id="main">
        	<table>
        	<tr>
            <td><input type="button" class="button" id="btAdd" value="Tambah Gejala" class="bt" /></td>
           	<td><input type="button" class="button" id="btRemove" value="Hapus Gejala" class="bt" /></td>
           	<td><input type="button" class="button" id="btRemoveAll" value="Hapus Semua Gejala" class="bt" /><br /></td>
            </tr>
             </table>
        </div>
       
        	<input type="hidden" id="max_gejala" name="max_gejala">
        </form>
    <div class="clear"></div>
  </main>
</div>
<?php
  include "includes/footer.php";
?>
</body>
</html>

