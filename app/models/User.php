<?php

class User{
    
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
        if(empty($this->errors)){
            return true;
        }

        return false;
    }
    
    public function insert($data){
        // remove unwanted columns
        if(!empty($this->allowedColumns)){
              foreach ($data as $key => $value) {
                if(!in_array($key,$this->allowedColumns)){
                    unset($data[$key]);
                }
        }
        }
      

        $keys= array_keys($data); 
        $query = "insert into users";
        $query.="(".implode(",",$keys).") values (:".implode(',:',$keys).")";
  
        $db = new Database();
        $db->query($query,$data);
    }
}