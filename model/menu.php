<?php
/**
 * Created by PhpStorm.
 * User: Dataka05
 * Date: 04/12/2018
 * Time: 12:12
 */
namespace model;

Class menu{
    public function menu(){
        echo("hello");
    }

    public function addLogo(){
        echo ($_SERVER["REQUEST_URI"]);
        echo("<div>");
        //if($_SERVER["REQUEST_URI"]){

        //}
        echo("</div>");
    }
}
?>