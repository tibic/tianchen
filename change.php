<?php
// error_reporting(0);
include("conn.php");
$user=trim($_POST['user']);
$password=sha1(trim($_POST['password']));
$npassword=sha1(trim($_POST['npassword']));
$npassword1=sha1(trim($_POST['npassword1']));
if($_POST['submit']) {
  
   $sql="select * from guanli where user='$user' and password='$password'";
   $r=mysql_query($sql);
   if(mysql_num_rows($r)>'0') {
  
    if($npassword==$npassword1) {
     $sql1="update guanli set password='$npassword' where user='$user' and password='$npassword'";
     mysql_query($sql1); 
     echo "修改密码成功！";
     }
    else {
     echo "两次输入新密码不一致！";
      }
   }
   else {
    echo "用户名或者原密码有误！";
     }
}

?>