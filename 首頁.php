<html>
	<head>
		<title>會員管理系統-首頁</title>
		<meta charset="UTF-8" />
		<style>
			body
			{
				background-color:black;
			}
			.card {
				/* Add shadows to create the "card" effect */
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
				transition: 0.3s;
				background-image:url("beans.jpg");
				background-repeat:repeat-x;
				background-size: cover;
			}
			.pic{
				display:flex;align-items:center;justify-content:center;
			}
			.container {color:white; padding: 2px 16px;}
			button{
				background-color:#D26900;border: none; color:white; padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer;border-radius: 4px;
			}
		</style>
	</head>
	<body>
		<div class="card">
			<div class="container">
				<h1 align="middle">產銷資訊系統</h1>
			</div>
			<div class="pic">
					<img src="Louisa_Coffee_Logo.jpg";>
			</div>
		</div>
		<div class="pic">
			<button onclick="window.location.href='顧關.php';">會員資訊系統</button>
			<button onclick="window.location.href='庫存管理系統.php';">庫存管理系統</button>
		</div>
		<p id="nothing" style="color: white;display:flex;align-items:center;justify-content:center;font-size:25px"></p>
		<script type="text/javascript">
			const queryString = window.location.search;
			console.log(queryString);
			const urlParams = new URLSearchParams(queryString);
			const user = urlParams.get('uname')
			if(user!=null)
			{
				alert(user+"，你好!")
				document.getElementById("nothing").innerHTML=user+" 歡迎進入";
			}
		</script>
	</body>
</html>