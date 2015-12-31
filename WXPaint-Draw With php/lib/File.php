<?php
/**
 * Created by JetBrains PhpStorm.
 * User: JOKO PURNOMO A
 * Date: 5/26/14
 * Time: 7:40 AM
 * To change this template use File | Settings | File Templates.
 */

class File {

    public function read($path){
        $result = "";
        if(file_exists($path)){
            $handle = fopen($path, "rt");
            if($handle){
                $result = fread($handle, 100000000);
                fclose($handle);
            }
        }

        return $result;
    }

    public function write($path, $text){
        $result = false;
        $handle = fopen($path, "wt");
        if($handle){
            if(fwrite($handle, $text, 100000000))
                $result = true;
            fclose($handle);
        }

        return $result;
    }

}