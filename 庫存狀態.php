<?php
  //index.php是首頁
  
  //匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
  require_once('connect.php');
  
  //查詢所有用戶
  
?>
<script type="text/javascript">
  function search(){
    var val=document.getElementById("srhbar").value;
    if (val==="堡皮"||val==="豬肉"||val==="起司"||val==="火腿"||val==="蛋")
    {
      burger();
    }
    else if (val==="咖啡"||val==="豆"||val==="莊園"||val==="美式")
    {
      coffee();
    }
    else if (val==="蛋糕") 
    {
      cake();
    }
    else if(val==="免洗"||val==="餐具"||val==="調味"){
      supplies();
    }
    else if (val==="茶包"||val==="綠茶"||val==="紅茶"||val==="柳橙"||val=="黑糖粉"||val=='奶') {
      drinks()
    }
  }
</script>
<script type="text/javascript">
  function burger(){
    <?php
        $res=$mysqli->query("SELECT * FROM `Material` WHERE MaterialID=0001 OR MaterialID=0002 OR MaterialID=0003 OR MaterialID=0004 OR MaterialID=0005 OR MaterialID=0016");
    ?>
    document.getElementById("tb1").innerHTML="<tr id=\"toprows\"><td>產品</td><td>安全庫存</td><td>目前庫存</td></tr><?php while($rs = mysqli_fetch_row($res)) { ?><tr id=\"rows\"><td><?php echo $rs[1];?></td><td><?php echo $rs[4];?></td><td><?php echo $rs[3];?></td></tr><?php } ?>"
    var bad=0
    var pig = document.getElementById("tb1").rows[1].cells[2].innerHTML;
    var safeP =document.getElementById("tb1").rows[1].cells[1].innerHTML;
    var che=document.getElementById("tb1").rows[2].cells[2].innerHTML;
    var safeChe=document.getElementById("tb1").rows[2].cells[1].innerHTML;
    var muffin=document.getElementById("tb1").rows[3].cells[2].innerHTML;
    var safeM=document.getElementById("tb1").rows[3].cells[1].innerHTML;
    var leg=document.getElementById("tb1").rows[4].cells[2].innerHTML;
    var safeLeg=document.getElementById("tb1").rows[4].cells[2].innerHTML;
    var ham=document.getElementById("tb1").rows[5].cells[2].innerHTML;
    var safeHam=document.getElementById("tb1").rows[5].cells[1].innerHTML;
    var egg=document.getElementById("tb1").rows[6].cells[2].innerHTML;
    var Safegg=document.getElementById("tb1").rows[6].cells[1].innerHTML;
    if (Number(safeP)>Number(pig)) {
      bad+=1;
    }
    if (Number(safeChe)>Number(che)) {
      bad+=1;
    }
    if (Number(safeM)>Number(muffin)) {
      bad+=1;
    }
    if (Number(safeLeg>leg)) {
      bad+=1
    }
    if (Number(safeHam)>Number(ham)) {
      bad+=1;
    }
    if (Number(Safegg)>Number(egg)) {
        bad+=1;
    }
    document.getElementById("burgerUnSafe").innerHTML=bad+" 項產品低於安全庫存"
  }
</script>
<script type="text/javascript">
  function coffee(){
    <?php
        $res = $mysqli->query("SELECT * FROM `Material` WHERE MaterialID=0006 OR MaterialID=0007");
      ?>
    document.getElementById("tb1").innerHTML="<tr id=\"toprows\"><td>產品</td><td>安全庫存</td><td>目前庫存</td></tr><?php while($rs = mysqli_fetch_row($res)) { ?><tr class=\"myRow\" id=\"rows\"><td><?php echo $rs[1];?></td><td><?php echo $rs[4];?></td><td><?php echo $rs[3];?></td></tr><?php } ?>"
    var bad2=0
    var cof = document.getElementById("tb1").rows[1].cells[2].innerHTML;
    var safeCof =document.getElementById("tb1").rows[1].cells[1].innerHTML;
    var fee=document.getElementById("tb1").rows[2].cells[2].innerHTML;
    var safeFee=document.getElementById("tb1").rows[2].cells[1].innerHTML;
    if (Number(safeCof)>Number(cof)) {
      bad2+=1;
    }
    if (Number(safeFee)>Number(fee)) {
      bad2+=1;
    }
    document.getElementById("CoffeeUnSafe").innerHTML=bad2+" 項產品低於安全庫存"
  }
</script>
<script type="text/javascript">
  function drinks(){
    <?php
        $res = $mysqli->query("SELECT * FROM `Material` WHERE MaterialID=0008 OR MaterialID=0009 OR MaterialID=10 OR MaterialID=11 OR MaterialID=12");
      ?>
      document.getElementById("tb1").innerHTML="<tr id=\"toprows\"><td>產品</td><td>安全庫存</td><td>目前庫存</td></tr><?php while($rs = mysqli_fetch_row($res)) { ?><tr =\"rows\"><td><?php echo $rs[1];?></td><td><?php echo $rs[4];?></td><td><?php echo $rs[3];?></td></tr><?php } ?>"
      var bad3=0;
      var milk = document.getElementById("tb1").rows[1].cells[2].innerHTML;
      var safeM =document.getElementById("tb1").rows[1].cells[1].innerHTML;
      var Gt=document.getElementById("tb1").rows[2].cells[2].innerHTML;
      var safeGt=document.getElementById("tb1").rows[2].cells[1].innerHTML;
      var Orange=document.getElementById("tb1").rows[3].cells[2].innerHTML;
      var safeO=document.getElementById("tb1").rows[3].cells[1].innerHTML;
      var Bt=document.getElementById("tb1").rows[4].cells[2].innerHTML;
      var safeBt=document.getElementById("tb1").rows[4].cells[2].innerHTML;
      var sugar=document.getElementById("tb1").rows[5].cells[2].innerHTML;
      var safeSugar=document.getElementById("tb1").rows[5].cells[1].innerHTML;
      if (Number(safeM)>Number(milk)) {
        bad3+=1;
      }
      if (Number(safeGt)>Number(Gt)) {
        bad3+=1;
      }
      if (Number(safeO)>Number(Orange)) {
        bad3+=1;
      }
      if (Number(safeBt)>Number(Bt)) {
        bad3+=1;
      }
      if (Number(safeSugar)>Number(sugar)) {
        bad3+=1;
      }
      document.getElementById("DrinkUnSafe").innerHTML=bad3+" 項產品低於安全庫存"
  }
</script>
<script type="text/javascript">
  function cake(){
    <?php
        $res = $mysqli->query("SELECT * FROM `Material` WHERE MaterialID=0013");
      ?>
      document.getElementById("tb1").innerHTML="<tr id=\"toprows\"><td>產品</td><td>安全庫存</td><td>目前庫存</td></tr><?php while($rs = mysqli_fetch_row($res)) { ?><tr id=\"rows\"><td><?php echo $rs[1];?></td><td><?php echo $rs[4];?></td><td><?php echo $rs[3];?></td></tr><?php } ?>"
      document.getElementById("tb1")
      var bad4=0
      var cake = document.getElementById("tb1").rows[1].cells[2].innerHTML;
      var safeCake =document.getElementById("tb1").rows[1].cells[1].innerHTML;
      if (Number(safeCake)>Number(cake)) {
        bad4+=1;
      }
      document.getElementById("CakeUnSafe").innerHTML=bad4+" 項產品低於安全庫存"
  }
</script>
<script type="text/javascript">
  function supplies(){
    <?php
        $res = $mysqli->query("SELECT * FROM `Material` WHERE MaterialID=0014 OR MaterialID=0015 ");
      ?>
      document.getElementById("tb1").innerHTML="<tr id=\"toprows\"><td>產品</td><td>安全庫存</td><td>目前庫存</td></tr><?php while($rs = mysqli_fetch_row($res)) { ?><tr id=\"rows\"><td><?php echo $rs[1];?></td><td><?php echo $rs[4];?></td><td><?php echo $rs[3];?></td></tr><?php } ?>"
      var bad5=0
      var SW= document.getElementById("tb1").rows[1].cells[2].innerHTML;
      var safeSw=document.getElementById("tb1").rows[1].cells[1].innerHTML;
      var Seasoning=document.getElementById("tb1").rows[2].cells[2].innerHTML;
      var safeS=document.getElementById("tb1").rows[2].cells[1].innerHTML;
      if (Number(safeSw)>Number(SW)) {
        bad5+=1;
      }
      document.getElementById("suppliesUnSafe").innerHTML=bad5+" 項產品低於安全庫存"
  }
</script>
<html>
 <head>
  <title>庫存管理系統</title>
     <meta charset="UTF-8" />
     <style>
        .search{
          padding: 15px;
          background: rgba(120, 36, 0, 0.83);
        }
        .category{
          width:30%;
          height:500px;
          background: #C4C4C4;
          float: left;
        }
        .item{
          width:70%;
          height:500px;
          background: #F8EAC6;
          float: left;
        }
        .btn button{
          display:block;
          width:100%;
          height:20%;
          background-color:#C4C4C4;
          align-self: center;
        }
        .table{
          border:1;
          width:100%;
          column-gap: 5px;
        }
     </style>
 </head>
 <body>
  <div class="search">
    <input id="srhbar" type="text" placeholder="Search..">
    <button id="srhbtn" type="submit" onclick="search()">Search</button>
  </div>
    <div class="category">
      <div class="btn">
        <button id="bg" onclick="burger()"><p>漢堡</p><p id="burgerUnSafe"></p></button>
        <button onclick="coffee()"><p>咖啡豆</p><p id="CoffeeUnSafe"></p></button>
        <button onclick="drinks()"><p>飲料</p><p id="DrinkUnSafe"></p></button>
        <button onclick="cake()"><p>蛋糕</p><p id="CakeUnSafe"></button>
        <button onclick="supplies()"><p>消耗材</p><p id="suppliesUnSafe"></p></button>
      </div>
    </div>
    <div class="item">
      <div class="table">
        <table id="tb1" border="1" width="100%" style="text-align: middle;vertical-align: middle;">
          
        </table>
        <script type="text/javascript">
          supplies()
          drinks()
          cake()
          coffee()
          burger()
        </script>
      </div>
    </div>  
 </body>
</html>