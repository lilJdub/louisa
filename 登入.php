<html>
	<head>
		<title>會員管理系統-登入</title>
		<meta charset="UTF-8" />
		<style type="text/css">
			body{
				background-color:#9F5000;
			}
			.boxed {
				min-height: 100vh; /* minimum height = screen height */display: flex;justify-content: center;align-items: center;
			}
			.pic{
				display:flex;align-items:center;justify-content:center;
			}
			.container{
				padding: 14px 20px;margin:5px;background-color:#842B00;text-align:center;
			}
			/* Extra styles for the cancel button */
			.cancelbtn {
				width: auto;padding: 10px 18px;background-color: #f44336;
			}
			/* Center the image and position the close button */
			.imgcontainer {
				text-align: center;margin: 24px 0 12px 0;position: relative;
			}
			.ctner {
				padding: 16px;
			}
			.modal {
				display: none; /* Hidden by default */
  				position: fixed; /* Stay in place */
  				z-index: 1; /* Sit on top */
  				left: 0;
  				top: 0;
  				width: 100%; /* Full width */
  				height: 100%; /* Full height */
  				overflow: auto; /* Enable scroll if needed */
 				background-color: rgb(0,0,0); /* Fallback color */
  				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  				padding-top: 60px;
  			}
  			.modal-content {
  				background-color: #fefefe;
  				margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  				border: 1px solid #888;
  				width: 60%; /* Could be more or less, depending on screen size */
			}
			.close {
  				position: absolute;
  				right: 25px;
  				top: 0;
  				color: #000;
  				font-size: 35px;
  				font-weight: bold;
			}
			.close:hover,
			.close:focus {
  				color: red;
  				cursor: pointer;
			}
			span.psw {
				float: right;padding-top: 16px;
			}
			img.avatar {
				width: 40%;border-radius: 50%;
			}
			input[type=text], input[type=password] {
				width: 100%;padding: 6px 10px;margin: 8px 0;
				display: inline-block;border: 1px solid #ccc;box-sizing: border-box;
			}
			button {
				background-color:#EA7500;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 100%;
			}
			button:hover {
				opacity: 0.8;
			}

		</style>
	</head>
	<body>
		<div class="boxed">
			<div class="pic">
				<div class="container">
					<img src="Louisa_Coffee_Logo.jpg" style="width:300px">
					<p style="">LOUISA LOGIN</p>
					<button onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
				</div>
			</div>	
		</div>
		<div id="id01" class="modal">
  			<form class="modal-content animate" action="首頁.php" method="GET">
    			<div class="imgcontainer">
      				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      				<img src="Louisa_Coffee_Logo.jpg" alt="Avatar" class="avatar">
    			</div>
    			<div class="ctner">
      				<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
       				<button type="submit">Login</button>
      				<label>
        				<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
    			</div>
    			<div class="ctner" style="background-color:#f1f1f1">
      				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      				<span class="psw">Forgot <a href="">password?</a></span>
    			</div>
  			</form>
		</div>
		<script>
			// Get the modal
			var modal = document.getElementById('id01');
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
    			if (event.target == modal) {
        			modal.style.display = "none";
    			}
			}
		</script>
	</body>
</html>