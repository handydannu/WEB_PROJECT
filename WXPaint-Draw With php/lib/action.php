<?php
/**
 * Created by JetBrains PhpStorm.
 * User: JOKO PURNOMO A
 * Date: 5/25/14
 * Time: 11:01 PM
 * To change this template use File | Settings | File Templates.
 */

include_once("File.php");

$file = new File();

$action = "";
$data = "";
$filename = "";
if(isset($_POST['action'])){
    $action = strtolower($_POST['action']);
}
if(isset($_POST['data'])){
    $data = $_POST['data'];
}
if(isset($_POST['filename'])){
    $filename = $_POST['filename'];
}
$filename .= ".json";

switch ($action){
    case 'save' : {
        if($file->write('../file/'.$filename, $data))
            echo '1';
        else
            echo '0';
    }break;

    case 'get' : {
        $data = $file->read('../file/'.$filename);
        echo $data;
    }break;
}


