<?php
	//index.php是首頁
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
	require_once('connect.php');
	
	//查詢所有用戶
	$res = $mysqli->query("select * from Customer_Info");	

?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>BRO</title>
</head>
<body>
	
</body>
</html>