<?php
	// db_connect.php 是用來連接MYSQL
	$mysqlhost = "140.119.19.73:9306"; //本機
	$mysqluser = "TG09"; //最高權限的使用者
	$mysqlpassword = "u73e9x"; //預設無密碼
	$mysqldb = "TG09";    //Database的名字
	$mysqli= new mysqli($mysqlhost,$mysqluser,$mysqlpassword,$mysqldb); //建立物件，連接MYSQL
	$mysqli->query("set names 'utf8';");	//設utf8編碼，避免亂碼
?>