<?php 

	function my_autoloader($class){
		include_once str_replace("app\\", "", $class).".php";
	}

	spl_autoload_register("my_autoloader");

	//require_once "vendor/autoload.php";

	new app\animals\dog();
	print "<br/>";
	new app\humans\teacher();

	new app\dog();