<?php
	//index.php是首頁
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
	require_once('connect.php');
	
	//查詢所有用戶
	$res = $mysqli->query("SELECT * FROM `Purchase_Behavior` WHERE Member_Id=107306077");	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>消費行為管理</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div>
		<input type="text" name="ordNum" placeholder="請輸入訂單號碼">
		
		<button id="searchbtn" onclick="defaulttable()" style="float: right;border-radius:2px;padding:2px 13px;">搜尋</button>
		<input type="text" name="stuff" placeholder="這邊沒寫完@@"style="float: right;">
		<small style="float: right;">包括品項</small>
		<input type="text" name="PurchaseTime" placeholder="N/A"style="float: right;">
		<small style="float: right;">最近購物時間</small>
		<input type="text" name="BuyerName" placeholder="N/A"style="float: right;">
		<small style="float: right;">請輸入購買人姓名</small>
		<input type="text" name="MemID" placeholder="N/A"style="float: right;">
		<small style="float: right;">請輸入會員ID</small> 
	</div>
	<script type="text/javascript">
		function defaulttable()
		{
			location.replace("查詢消費.php");
		}
	</script>
	<table id="tb1" border="1" width="100%">
		<tr id="toprows">
			<td>顧客ID</td>
			<td>購買單號</td>
			<td>購買時間</td>
			<td>購買物品</td>
			<td>購買數量</td>
			<td>消費總金額</td>
			<td>消費店家</td>
		</tr>
		<?php while($rs = mysqli_fetch_row($res)) { ?>
		<tr id="rows">
			<td><?php echo $rs[0];?></td>
			<td><?php echo $rs[1];?></td>
			<td><?php echo $rs[2];?></td>
			<td><?php echo $rs[3];?></td>
			<td><?php echo $rs[4];?></td>
			<td><?php echo $rs[5];?></td>
			<td><?php echo $rs[6];?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>