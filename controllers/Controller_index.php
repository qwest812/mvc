<?php
include_once "/models/Model_index.php";
class Controller_index
{
    function __construct(){
//        echo get_class($this);

        $index= new Model_index();
        include_once("/viewes/content.php");
    }
}