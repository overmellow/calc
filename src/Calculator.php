<?php
namespace overmellow\calc;

class Calculator
{
    function __construct() {
        print "In BaseClass constructor\n";
    }
     
    public function add($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }
}