<?php
header("Content-Type:text/html;charset=utf-8");
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
//包含数据库连接文件
include('conn.php');
$check_query = mysql_query("select id from users where phone='$_POST[phone]' limit 6");
if(mysql_fetch_array($check_query)){
    echo '错误：手机号',$_POST['phone'],'已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit();
}
//写入数据
$regdate = time();
$sql = "INSERT INTO users(id,username,sex,studentnumber,school,phone,workdate,regdate)
VALUES('','$_POST[username]','$_POST[sex]','$_POST[studentnumber]',
	'$_POST[school]','$_POST[phone]','$_POST[workdate]','$regdate')";
if(mysql_query($sql,$conn)){
    exit('您的信息提交成功！点击此处 <a href="xinxi.php">查看</a>');
} else {
    echo '抱歉！添加信息失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>