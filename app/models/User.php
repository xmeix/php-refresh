<?php

class User extends Model{
    
    protected $table = "users";
    public $errors = [];
    protected $allowedColumns = [
        "email",
        "password",
        "date"
    ];
    public function validate($data= []){

        $this->errors = [];

        if(empty($data['email'])){
            $this->errors['email'] = "email is required";
        }else if(empty($data['password'])){
            $this->errors['password'] = "password is required";
        }


        // check if email exists

        if(!empty($data)){
            
            if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            
                $this->errors['email'] = "Email is not valid";
            
            }else if($this-> where(['email'=>$data['email']])){
            
                $this->errors['email'] = "Email already exists";
            
            }
        }

     








        if(empty($this->errors)){
            return true;
        }
        // show($this->errors);
        return false;
    }
    
   
}