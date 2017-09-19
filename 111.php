<?php
/* Class my_class
{
var $my_var;
function _my_class($value)
{
$this->my_var = $value;
}
}
$a = new my_class(10);
echo $a->my_var; */

class A{
    static public $m=1;
    static public function m(){
        echo static::$m,'
';
    }
    static public function n(){
        static::n();
    }
}
class B extends A{
    static public $m=111;
    static public function m(){
        parent::m();
    }
    static public function n(){
        echo parent::$m,'
';
    }
}
B::m();
//B::n();