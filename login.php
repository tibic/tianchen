<div>
<span id="ycphp" style="color:#FF0000;">1</span>
</div>
<script language="javascript">
    function runtime() {
     document.getElementById('ycphp').innerHTML=document.getElementById('ycphp').innerHTML-1;
     if(document.getElementById('ycphp').innerHTML==0) {
      location.href='guanli.php?act=list';
     }
     setTimeout("runtime()",1);
    }
    runtime();
</script>
<?
session_start();

//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['user']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
?>
<?php
header("Content-Type:text/html;charset=utf-8");
//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$user = htmlspecialchars($_POST['user']);
$password = ($_POST['password']);

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
$check_query = mysql_query("select * from guanli where user='$user' and password='$password' 
limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    @$_SESSION['user'] = $user;
     echo @$user,' 欢迎你！进入 <a href="guanli.php">信息中心</a><br />';
    echo '点击此处 <a href="login.php? action=logout">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
