<?php

    //$dbConfig = config::getInstance()->get('db');
    function connect(){
        $db = new PDO(
            "mysql:host=ftpupload.net; dbname=PDO_bookstore",
            "epiz_30799275",
            "rubelinfinity"
        );
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        if(!$db){
            echo 'Database not connected!';
        }
        return $db;
    }

?>