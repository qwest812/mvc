<?php

class Routing
{
    public $dir;
    private $mapClass;

    public function __construct($dir)
    {
        $q= explode("/",$dir);
        $this->dir=$q;
//        var_dump($this->dir);
    }

    function  startRouting()
    {
//        var_dump($this->dir[1]);
        switch($this->dir[1]) {

            case "index":
                return "Controller_index";
                break;
            case "user":
                return "Controller_user";
                break;
            case "":
                return "Controller_index";
                            break;
            default:
                return "Controller_404";


        }

    }

    function  classRegister($className, $dir)
    {
        $this->mapClass[$className] = $dir;
    }

    function autoload($className)

    {
//        var_dump(345345);
        $classDir = "..".DIRECTORY_SEPARATOR.$this->dir[0]. DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $className.".php";
//        echo $classDir;
//        var_dump($this->dir);
//        echo"<br>".__DIR__;
        if (isset ($this->mapClass[$className])) {
            include_once($this->mapClass[$className]);
        } elseif (file_exists($classDir)) {
            $this->classRegister($className, $classDir);
            include_once($classDir);
        }else{
            include_once("../viewes/404.php");
        }
    }

}