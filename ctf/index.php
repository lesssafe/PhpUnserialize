<?php
class LessSafe{
	protected $file='index.php';
	function __destruct(){
		if(!empty($this->file))
		{
			show_source($this->file);
		}
	}
	function __wakeup(){
		$this->file='index.php';
	}
}
if(!isset($_GET['file'])){
	show_source('index.php');
}
else{
	unserialize($_GET['file']);
}
//flag in flag.php
?>
