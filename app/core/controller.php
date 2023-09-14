<?php 
// main controller

class Controller
{

    public function view($view, $data = []){
        // load a view file

        // go through the array and gets all the array items and makes variables with those names 
        extract($data);

        $filename = "../app/views/".$view.".view.php";

        if(file_exists($filename)){
            require $filename;
        }else {
            echo "could not find view file: ".$filename;
        }
    }

}