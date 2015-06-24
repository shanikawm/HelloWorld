<?php
/**
 * Created by PhpStorm.
 * User: Shanika
 * Date: 6/24/2015
 * Time: 8:47 PM
 */

namespace HelloWorld;


class HelloWorld {
    private $name;
    function __construct($name){
        $this->name=$name;
    }

    function SayHello(){
        echo "Hello {$this->name}\n";
    }

}