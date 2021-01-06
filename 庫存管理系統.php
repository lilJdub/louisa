<html>
	<head>
		<title>庫存管理系統</title>
    	<meta charset="UTF-8" />
    	<style>
    		*{
    			box-sizing: border-box;
    		}
    		.header{
    			overflow: hidden;
    			background-color: #000000;
    			padding: 20px 10px;
    		}
    		.header h1{
    			padding:10px;color:white;
    		}
    		.header a{
    			float: left;
    			color: white;
    			text-align: center;
    			padding: 12px;
    			text-decoration: none;
    			font-size: 18px;
    			line-height: 25px;
    			border-radius: 4px;
    		}
    		.header button{
    			background-color:#D26900;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 4px;
    		}
    		.header button:hover {
    			background-color: #ddd;color: black;
    		}
    		
    	</style>
	</head>
	<body>
		<div class="header">
			<h1>庫存管理系統</h1>
			<button class="button" onclick="openpage1()">庫存狀態</button>
			<button class="button" onclick="openpage2()">物料訂購</button>
			<button class="button" onclick="openpage3()">訂單管理</button>
			<button class="button" onclick="window.location.href='首頁.php';"style="float: right;padding: 12px 28px;font-size: 14px">回首頁</button>
		</div>
		<iframe id="welc" src="庫存狀態.php" style="width: 100% ;height:480px"></iframe>
		<script>
			function openpage1()
			{
        		document.getElementById("welc").setAttribute("src", "庫存狀態.php");
			}
		</script>
		<script>
			function openpage2()
			{
				document.getElementById("welc").setAttribute("src", "物料訂購.php");
			}
		</script>
		<script>
			function openpage3()
			{
				document.getElementById("welc").setAttribute("src", "訂單管理.php");
			}
		</script>
		
	</body>
</html>