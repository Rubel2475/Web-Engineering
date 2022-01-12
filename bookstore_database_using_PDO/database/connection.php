<?php

    //$dbConfig = config::getInstance()->get('db');
    function connect(){
        $db = new PDO(
            "mysql:host=127.0.0.1; dbname=PDO_bookstore",
            "root",
            ""
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

    // $data = $db->query("SELECT * FROM `book` WHERE 1");

    // foreach($data as $key => $datum):
    //     var_dump($datum);
    // endforeach;

?>