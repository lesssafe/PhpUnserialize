<?php
class TestClass
{
    public $variable = 'This is a string';	//一个变量
    public function PrintVariable()	//一个简单的方法
    {
        echo $this->variable.'<br />';
    }
    public function  __construct()	//Constructor
    {
        echo '__construct<br />';
    }
    public function __destruct()	//Destructor
    {
        echo '__destruct<br />';
    }
    public function __toString()
    {
        return '__toString<br />';
    }
}
$object = new TestClass();	//创建一个对象，__construct会被调用
$object->PrintVariable();	//创建一个方法

echo $object;	//对象被当作一个字符串，toString会被调用
//php脚本要结束时，__destruct会被调用
?>