<?php 
	namespace app;
	function my_autoloader($class){
		include_once str_replace("app\\", "", $class).".php";
	}

	spl_autoload_register("app\my_autoloader");

	//require_once "vendor/autoload.php";

	new animals\dog();
	print "<br/>";
	 new humans\teacher();

	 new dog();