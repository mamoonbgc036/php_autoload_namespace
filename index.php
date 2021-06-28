<?php 

	function my_autoloader($class){
		if(strpos($class, "app\\")!==false){
			$x = str_replace("app\\", "", $class);
			include_once $x.".php";
		}else{
			include_once str_replace("\\", "/", $class).".php";
		    //echo str_replace("\\", "/", $class).".php";die();
		}
	}

	spl_autoload_register("my_autoloader");

	new app\dog();
	new animals\dog();