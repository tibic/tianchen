 
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<head><title>查看信息</title></head>

<link href="dist/css/xinxi2.css" rel="stylesheet">
<body>
<?
include("conn.php");
?>

<?
$sql="select * from `users` WHERE phone='$_REQUEST[phone]'";
$query=mysql_query($sql);
if($row=mysql_fetch_array($query)){
?>
<fieldset>
	<center><div id="one">	
			姓名：<?=$row['username'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			性别：<?=$row['sex'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			学号：<?=$row['studentnumber'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			学校：<?=$row['school'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			手机号：<?=$row['phone'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			起止日期：<?=$row['workdate'];?>
	</div></center>
</fieldset>
<fieldset>
	<center><div id="one">	
			提交日期：<?php echo date("Y-m-d", $row['regdate']); ?>
	</div></center>
</fieldset>
<?
}
else{
	echo "记录为空";
}
?>

</body>
</html>