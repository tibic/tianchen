
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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
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



    <script language=JavaScript>
function InputCheck(RegForm)
{
  if (RegForm.phone.value == "")
  {
    alert("手机号不可为空!");
    RegForm.phone.focus();
    return (false);
  }
}
</script>


 <?
include("conn.php");
?>
    <div class="container">
      <div class="starter-template">
        <h3>请输入手机号</h3>
       <div id="user0">
      <fieldset>
      <form name="xinxiForm" method="get" action="xinxi2.php" onSubmit="return InputCheck(this)">

      <div id="usern">
      <label for="phone" class="label"><p>手机号:</p></label></div>
      <input id="phone" name="phone" type="text" class="input" /><br>
      <span>(必填)</span>

      <p>
      <input  type="submit" name="submit" value="查看" class="center" />
      </p>
      </form>
      </fieldset>

      </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
