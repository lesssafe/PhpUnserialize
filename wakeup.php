<?php
class LessSafe    						//定义一个LessSafe类
{
public $name  = 'LessSafe';   //定义一个name变量
public $age = 2;							//定义一个age变量
function getname()						//定义一个方法				
{
	echo $this->name;
}
function __wakeup()
{
	echo"When using unserialize, __wakeup() will be called";
}
}

$s = new LessSafe();   				//创建一个对象
echo $s->getname()."</br>";		//调用方法
unserialize($_GET[id])
?>