<?php
class App{

    // this function works like a react-router-dom
    protected $controller = '_404';
    function __construct()
    {
        $arr = $this -> getURL();
        // ucfirst to change the first letter to a capital letter 
        $filename = '../app/controllers/'.ucfirst($arr[0]).".php"; 

        if(file_exists($filename)){
            require $filename;
            $this->controller = $arr[0];
        }else {
            require '../app/controllers/'.$this->controller.".php"; 
 
        }
    }


    private function getURL(){
        $url = $_GET['url'] ?? 'home';
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $arr = explode("/",$url);
        return $arr;
    }


}
$app = new App("dunia");
?>