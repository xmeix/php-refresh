<?php

class Signup extends Controller{



    public function index()
    {   
      
        $data['errors'] = [];

        $user = new User();
        if($user->validate($_POST)){
            $_POST['date'] = date("Y-m-d H:i:s");
            $user->insert($_POST);
        }
         
        // show($user->errors);
        $data['errors'] = $user->errors;
        $data['title'] ="Signup";
        $this->view("signup",$data);
        
    }
    
     
    
}