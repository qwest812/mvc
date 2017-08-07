<?php

/**
 * Created by PhpStorm.
 * User: Селедочка
 * Date: 06.08.2017
 * Time: 20:06
 */
class Model_index
{
    public $db="";
 function __construct(){
     $db= new dataBase();
     $this->db=$db->getPDO();
 }

    function  getAllBlog(){
        try
                    {
                        $ff = new PDO('mysql:host=localhost;dbname=mvc','root','');
                    }
                    catch(PDOException $e)
                    {
                        die("Error: ".$e->getMessage());
                    }
        $sql='SELECT * FROM `blog` WHERE 1 ';
        if(! $dd=$ff->query($sql)){
            die(var_export($ff->errorinfo(), TRUE));
        }
        $result= $ff->query($sql);
        var_dump($result);
//        return $result;
        foreach ($ff->query($sql) as $row) {
                        print $row['id'] . "\t";
                        print $row['title'] . "\t";
                        print $row['text'] . "\n";
                    }
    }
}