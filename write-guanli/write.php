<?php

$conn = @mysql_connect("localhost","root","");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("tianchen", $conn);
//字符转换，读库
mysql_query("set character set 'utf-8'");
//写库
mysql_query("set names 'utf-8'");
?>

<?
//写入数据
$sql = "INSERT INTO guanli(user,password)
VALUES('adminer','tianchen321')";
if(mysql_query($sql,$conn)){
    exit('用户信息提交成功！点击此处 <a href="index.php">填写个人信息</a>');
} else {
    echo '抱歉！添加信息失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>

