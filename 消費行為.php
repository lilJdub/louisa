<?php
	//index.php是首頁
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
	require_once('connect.php');
?>	
	<!DOCTYPE html>
<html>
<head>
	<title>消費行為管理</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<?php if (!empty($_GET)): ?>
    	<form action="tryget.php" method="get">
        	<div>
				<input type="text" name="ordNum" placeholder="請輸入訂單號碼">
				<input type="submit" style="float: right;">
				<small style="float: right;">包括品項</small>
				<input type="text" name="PurchaseTime" placeholder="N/A"style="float: right;">
				<small style="float: right;">最近購物時間</small>
				<input type="text" name="BuyerName" placeholder="N/A"style="float: right;">
				<small style="float: right;">請輸入購買人姓名</small>
				<input type="text" name="MemID" placeholder="N/A"style="float: right;">
				<small style="float: right;">請輸入會員ID</small> 
			</div>
    	</form>
    	<p id="ans"></p>
    	<script type="text/javascript">
    		const queryString = window.location.search;
			console.log(queryString);
			const urlParams = new URLSearchParams(queryString);
			const MemID = urlParams.get('MemID')
			const BN = urlParams.get('BuyerName')
			document.getElementById("ans").innerHTML=MemID+BN;
    		
    	</script>

	<?php else: ?>
    	<form action="tryget.php" method="get">
        	<div>
				<input type="text" name="ordNum" placeholder="請輸入訂單號碼">
		
				<input type="submit" style="float: right;">
				<small style="float: right;">包括品項</small>
				<input type="text" name="PurchaseTime" placeholder="N/A"style="float: right;">
				<small style="float: right;">最近購物時間</small>
				<input type="text" name="BuyerName" placeholder="N/A"style="float: right;">
				<small style="float: right;">請輸入購買人姓名</small>
				<input type="text" name="MemID" placeholder="N/A"style="float: right;">
				<small style="float: right;">請輸入會員ID</small> 
			</div>
    	</form>
    	<?php
    		$res = $mysqli->query("select * from Purchase_Behavior");
    	?>
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
	<?php endif; ?>
</body>
</html>