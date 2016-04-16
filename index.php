
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
  if (RegForm.username.value == "")
  {
    alert("用户名不可为空!");
    RegForm.username.focus();
    return (false);
  }

  if (RegForm.sex.value == "")
  {
    alert("性别不能为空!");
    RegForm.sex.focus();
    return (false);
  }

  if (RegForm.studentnumber.value == "")
  {
    alert("学号不可为空!");
    RegForm.studentnumber.focus();
    return (false);
  }

    if (RegForm.school.value == "")
  {
    alert("学校不可为空!");
    RegForm.school.focus();
    return (false);
  }

    if (RegForm.phone.value == "")
  {
    alert("手机号不可为空!");
    RegForm.phone.focus();
    return (false);
  }

   if (RegForm.workdate.value == "")
  {
    alert("工作时间不可为空!");
    RegForm.workdate.focus();
    return (false);
  }
}
</script>

    <div class="container">
      <div class="starter-template">
        <h3>填写个人信息</h3>
       <div id="user0">
      <fieldset>
      <form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">

      <div id="usern">
      <label for="username" class="label"><p>姓名:</p></label></div>
      <input id="username" name="username" type="text" class="input" /><br>
      <span>(必填)</span>

      <div id="usern">
      <label for="sex" class="label"><p>性别:</p></label>
      <input id="sex" name="sex" type="text" class="input" /><br>
      <span>(必填)</span>
      </div>

      <div id="usern">
      <label for="studentnumber" class="label"><p>学号:</p></label>
      <input id="studentnumber" name="studentnumber" type="text" class="input" /><br>
      <span>(必填)</span>
      </div>

      <div id="usern">
      <label for="school" class="label"><p>学校:</p></label>
      <input id="school" name="school" type="text" class="input" /><br>
      <span>(必填)</span>
      </div>
       <div id="usern">
      <label for="phone" class="label"><p>手机号:</p></label>
      <input id="phone" name="phone" type="text" class="input" /><br>
      <span>(必填)</span>
      </div>

       <div id="usern">
      <label for="workdate" class="label"><p>工作起止时间:</p></label>
      <input id="workdate" name="workdate" type="text" class="input" /><br>
      <span>(必填)</span>
      </div>
      <p>
      <input  type="submit" name="submit" value="  提交  " class="center" />
     
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
