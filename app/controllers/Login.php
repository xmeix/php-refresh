<?php

class Login extends Controller{
    public function index()
    {   
       
        $data['title'] ="Login";
        $user = new User();
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            // validate
            // check if an email is contained by a user at least
            $row = $user->first([
                'email'=>$_POST['email']
            ]);

            if($row){
                if($row->password === $_POST['password']){
                    // authenticate
                    $_SESSION['USER_DATA'] = $row;
                    redirect('home');
                }
            }

        }
        
        $this->view("login",$data);
        
    }
}

