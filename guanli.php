<?php session_start(); ?>
<?php
if(!isset($_SESSION['user'])){
    header("Location:login.html");
    exit();
}
include("conn.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>天辰汇杰</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
      <link href="dist/css/register.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">天辰人力</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <!--  <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li> -->
            <li><a href="xinxi.php">查看信息</a></li>
             <li><a href="guanli.php">管理</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
 
<?
//注销登录
if('action' == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['user']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}
?>
 <link rel="stylesheet" type="text/css" href="dist/css/line.css">
 <div id="main">
 <h2><center>天辰人力资源信息<a href="login.php? action=logout">(注销)</a>
     <a href="out.php">(导出)</a></center></h2>
 <table border="1px;">
<tr>
  <th width="50px;"><center>序号</center></th>
  <th width="150px;"><center>姓名</center></th>
  <th width="150px;"><center>性别</center></th>
  <th width="150px;"><center>学号</center></th>
  <th width="150px;"><center>学校</center></th>
  <th width="150px;"><center>手机号</center></th>
  <th width="150px;"><center>工作时间</center></th>
  <th width="150px;"><center>提交日期时间</center></th>
</tr>
 </table>
 <meta charset="utf-8">
<table width=1000 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?
$sql="select * from `users` order by `id`";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query)){
?>


<table border="1px;">
<tr>
  <td width="50px;"><center><?=$row['id'];?> </center></td>
  <td width="150px;"><center><?=$row['username'];?> </center></td>
  <td width="150px;"><center><?=$row['sex'];?> </center></td>
  <td width="150px;"><center><?=$row['studentnumber'];?></center></td>
  <td width="150px;"><center><?=$row['school'];?></center></td>
  <td width="150px;"><center><?=$row['phone'];?></center></td>
  <td width="150px;"><center><?=$row['workdate'];?></center></td>
  <td width="150px;"><center><?php echo date("Y-m-d", $row['regdate']); ?></center></td>
</tr>
</table>

  
  <?
}
  ?>
</table>

</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>

