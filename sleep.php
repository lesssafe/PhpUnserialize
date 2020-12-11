<?php
class LessSafe    						//定义一个LessSafe类
{
public $name  = 'LessSafe';   //定义一个name变量
public $age = 2;							//定义一个age变量
function getname()						//定义一个方法				
{
	echo $this->name;
}
function __sleep()
{
	echo "When using serialize, __sleep() will be called";
}
}
$s = new LessSafe();   				//创建一个对象
echo $s->getname()."</br>";		//调用方法
$s_serialize = serialize($s);	//讲对象进行序列化
print_r($s_serialize);				//打印序列化结果
?>