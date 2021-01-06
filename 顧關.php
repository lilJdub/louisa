<html>
	<head>
		<title>會員管理系統-顧客關係管理</title>
    	<meta charset="UTF-8" />
    	<style>
    		*{
    			box-sizing: border-box;
    		}
    		.header{
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
    			background-color: #FFBB77;color: black;
    		}
            .header dropbtn
            {
                background-color: #3498DB;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }
            .dropdown {
                position: relative;
                display: inline-block;align-items:center;justify-content:center
            }
            .dropdown-content {
                display: none;
                text-align: center;
                position: absolute;
                background-color: #f1f1f1;
                min-width:100px;
                overflow:visible;
                z-index: 1;
            }
            .dropdown-content button {
                color: black;
                padding:12 30px;
                text-decoration: none;
                display: block;
                background-color:white;
            }
            .dropdown button:hover {background-color: #ddd;}
            .show {display: block;}
    	</style>
	</head>
	<body>
		<div class="header">
			<h1>會員關係管理</h1>
			<button class="button" onclick="openpage1()">顧客資料</button>
			<button class="button" onclick="openpage2()">消費行為</button>
			<div class="dropdown">
                <button class="button" onclick="myFunction()">圖表分析</button>         
                <div id="myDropdown" class="dropdown-content">
                    <button onclick="openpage3()">顧客個人分析</button>
                    <button>數據圖表分析</button>
                    <button>消費活動分析</button>
                </div>
            </div>
            
			<button class="button" onclick="window.location.href='首頁.php';"style="z-index: -1;float: right;padding: 12px 28px;font-size: 14px">回首頁</button>
		</div>
		<iframe id="welc" src="顧客資料系統.php" style="width: 100% ;height:480px"></iframe>
		<script>
			function openpage1()
			{
        		document.getElementById("welc").setAttribute("src", "顧客資料系統.php");
			}
		</script>
		<script>
			function openpage2()
			{
				document.getElementById("welc").setAttribute("src", "消費行為.php");
			}
		</script>
		<script>
			function openpage3()
			{
				document.getElementById("welc").setAttribute("src", "顧客個人分析.php");
			}
		</script>
		<script type="text/javascript">
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
        </script>>
	</body>
</html>