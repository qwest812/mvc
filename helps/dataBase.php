<?php

class dataBase
{
    protected static $BD=null;
    public function __construct(){
//var_dump(self::$BD);

        if(isset(self::$BD)){
            echo "gdas111";
        }else{
            echo "gdas222";
            try
            {   // У меня таблица хранится в бд test.
                self::$BD = new PDO('mysql:host=localhost;dbname=mvc','root','');
            }
            catch(PDOException $e)
            {
                die("Error: ".$e->getMessage());
            }
        }

    }
    function  getPDO(){
        return self::$BD;
    }
    private function  __clone(){

    }




}