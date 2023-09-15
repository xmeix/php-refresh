<?php

class Signup extends Controller{



    public function index()
    {   
      
        $user = new User();
        $result = $user->validate($_POST);
        show($_POST);
        var_dump($result);
        show($user->errors);
        $data['title'] ="Signup";
        $this->view("signup",$data);
        
    }
    
     
    
}