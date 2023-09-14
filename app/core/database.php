<?php

class Database{

    private function connect() {
        $str = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
        return new PDO($str,DBUSER,DBPASSWORD);
    }

    public function query($query,$data=[],$type='object'){
        
        $con = $this->connect();

        $stmt = $con->prepare($query);
        if($stmt){

            $check = $stmt->execute($data);
            // return;
            if($check){
                $typeM = PDO::FETCH_OBJ;
                if($type!="object"){
                    $typeM = PDO::FETCH_ASSOC;
                }
                $result = $stmt->fetchAll($typeM);
                show($result);
                if($result && count($result) > 0){
                    return $result;
                }
            }
        }
 
        return false;
    }

    public function create_tables(){
        $query="
        CREATE TABLE IF NOT EXISTS `users` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `email` varchar(100) NOT NULL,
            `password` varchar(255) NOT NULL,
            `date` date DEFAULT NULL,
            PRIMARY KEY (`id`),
            KEY `email` (`email`),
            KEY `date` (`date`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4
        ";

        $this->query($query);
    }

}