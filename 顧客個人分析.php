<!DOCTYPE html>
<html>
<head>
	<title>顧客個人分析</title>
	<style type="text/css">
		*{
			background-color: #FFC78E;
		}
		.top{
			background-color: #FF9224;
			text-align: center;
		}
		.name{
			padding: 20px
		}
		.left{
			width:50%;
			height:500px;
          	background:white;
          	float: left;
          	display:flex;align-items:center;justify-content:center;
		}
		.right{
			width:50%;
			height:500px;
			background:	#FFF3EE;
			float: left;
			display:flex;align-items:center;justify-content:center;
		}
		#searchBar{
			padding:5px 15px;
			width: 16%;
			border:2px black solid;
			cursor:pointer;
			-webkit-border-radius: 5px;
			border-radius: 5px;
		}

		#searchBtn{
			margin-left: 5px;
			padding:8px 15px;
			background:#ccc;
			border:0 none;
			cursor:pointer;
			-webkit-border-radius: 5px;
			border-radius: 5px; 
			background-color:#D26900;
			color: white;
		}
		.pic{
			width: 60%
		}
		.tb{
			width: 80%;
			height: 60%
		}
	</style>
	<script type="text/javascript">
		function Method(){
			var val=document.getElementById("searchBar").value;
			if (val==="test1"||val==="test2"||val==="test3"||val==="test4"||val==="test5"||val==="上下錞"||val==="連恩柔"||val==="江仲偉"||val==="張皓鈞") {
				document.getElementById("name").innerHTML="<b style='font-size:20px;'>"+val+" 的個人分析</b>"
				createImg();
				createTable();
			}
			else{
				alert("此顧客不存在!");
			}
		}
		function createImg(){
             var rdmNum = Math.floor(Math.random()*5);
             if (rdmNum===0) {
             	document.getElementById("chart").src="chart1.png";
             }
             else if(rdmNum===1){
             	document.getElementById("chart").src="chart2.png";
             }
             else if(rdmNum===2){
             	document.getElementById("chart").src="chart3.png";
             }
             else if(rdmNum===3){
             	document.getElementById("chart").src="chart4.png";
             }
 			else{
 				document.getElementById("chart").src="chart5.png";
 			}
      	}
      	function createTable(){
      		var Num1 = Math.floor(Math.random()*100000);
      		document.getElementById("tr1").innerHTML=Num1;
      		var Num2 = Math.floor(Math.random()*2);
      		if (Num2===0) {
      			var txt="蛋糕"
      		}
      		if (Num2===1) {
      			var txt="莊園拿鐵"
      		}
      		document.getElementById("tr2").innerHTML=txt;
      		var Num3=Math.floor(Math.random()*30);
      		document.getElementById("tr3").innerHTML=Num3;
      		var Num4=Math.floor(Math.random()*2);
      		if (Num4===0) {
      			var txt="台中大甲店"
      		}
      		if (Num4===1) {
      			var txt="木柵政大店"
      		}
      		document.getElementById("tr4").innerHTML=txt;
      		var Num5=Math.floor(Math.random()*200000);
      		document.getElementById("tr5").innerHTML=Num5;
      	}
		</script>
<body>
	<div class="top">
		顧客個人分析	
	</div>
	<div class="name">
		<p id="name">請輸入顧客名稱</p>
		<div class="search">	
			<p>關鍵字：<input id="searchBar" type="text" name="condition" placeholder="顧客名稱"><button id="searchBtn" onclick="Method()" >查詢</button></p>
		</div>
    </div>
	</div>
	<div class="left">
		<img id="chart" src="" class="pic">
	</div>
	<div class="right">
		<table class="tb" border=1>
			<tr id="row">
				<td>個別錢包大小</td>
				<td id="tr1"></td>
			</tr>
			<tr id="row2">
				<td>最近購賣品項</td>
				<td id="tr2"></td>
			</tr>
			<tr id="row3">
				<td>30天內購買筆數</td>
				<td id="tr3"></td>
			</tr>
			<tr>
				<td>最常出現店家</td>
				<td id="tr4"></td>
			</tr>
			<tr>
				<td>總購買金額</td>
				<td id="tr5"></td>
			</tr>
		</table>
	</div>
</body>
</html>