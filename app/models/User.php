<?php

class User{
    
    protected $table = "users";
    public $errors = [];

    public function validate($data= []){

        $this->errors = [];

        if(empty($data['username'])){
            $this->errors['username'] = "username is required";
        }else if(empty($data['password'])){
            $this->errors['password'] = "password is required";
        }
        if(empty($this->errors)){
            return true;
        }

        return false;
    }
}