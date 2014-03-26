<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="传承">
    <meta name="author" content="jia dongyu">
   
    <meta name="keywords" content="上海交大,资源,讨论,传承">
    <link rel="shortcut icon" href="./docs-assets/ico/favicon.png">

    <title>传承</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
	<link href="sticky-footer.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="./docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php include_once('./sql_constent.php');?>
  <body>

      <div class="navbar navbar-inverse " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">薪火相传</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#xygl">学院管理</a></li>
          <li><a href="#kcgl">课程管理</a></li>
        </ul>
        


        <form class='navbar-form navbar-right' role='form' method='post' action='./module/login.php'>
            <div class='form-group'>
              <input type='text' name='Email' placeholder='Email' class='form-control'>
            </div>
            <div class='form-group'>
              <input type='password' name='password' placeholder='Password' class='form-control'>
            </div>
            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>"

       </div>
      </div>
    </div>


<div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-body">
        <div class="col-md-4">
        <a name="xygl">学院管理</a>
        <form role="form" action="./manage/add_school.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="school_name" name="school_name" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" placeholder="year_total" name="year_total" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" placeholder="school_short_name" name="school_short_name" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">add</button>
          </form>
        </div>
        <div class="col-md-8">
        <?php include('./manage/display_database_select_info.php'); $info=read_selcet_info();
        foreach($info as $v)
        {
          
          echo "
            <form role='form' action='XXXXXXXXXXX' method='get'>
            <div class='row'>
            <div class='form-group col-md-2'>
              <input type='text' placeholder='",$v['school_name'],"' name='school_name' class='form-control'>
            </div>
            <div class='form-group col-md-2'>
              <input type='text' placeholder='",$v['year_total'],"' name='year_total' class='form-control'>
            </div>
            <div class='form-group col-md-2'>
              <input type='text' placeholder='",$v['school_short_name'],"' name='school_short_name' class='form-control'>
            </div>
            <input type='hidden' name='origin_school_name' value='",$v['school_name'],"'>
            <input type='hidden' name='origin_year_total' value='",$v['year_total'],"'>
            <input type='hidden' name='origin_school_short_name' value='",$v['school_short_name'],"'>

            <div class='form-group col-md-2'>
            <div class='radio'>
            <label>
              <input type='radio' name='op' value='delete'>
              delete
             </label>
            </div>

            </div>
            <div class='form-group col-md-2'>
            <div class='radio'>
            <label>
              <input type='radio' name='op' value='update'>
              update
             </label>
            </div>
            </div>
            <button type='submit' class='btn btn-success'>do operation</button>
            </div>
          </form>

          ";
        }
        
        ?>


        </div>
      </div>
    </div>

    <div class='panel panel-default'>
      <div class='panel-body'>
          <div class="col-md-4">
      <a name="kcgl">课程管理</a>
        <form role="form" action="./manage/course_manage.php" method="get">
        <div class="form-group">
          
          <label class=" control-label">学院</label>
          <select class="form-control " name="school_short_name">
          <?php
          foreach ($info as $v) 
            echo "<option>".$v['school_short_name']."</option>";
          ?>
          </select>
        

          
          <label class="control-label">年级</label>
          <select class="form-control " name="grade">
          <?php
          for ($i=1;$i<=5;$i++) 
            echo "<option>".$i."</option>";
          ?>
          </select>
         

          
          <label class="control-label">学期</label>
          <select class="form-control " name="semster">
          <?php
          for ($i=1;$i<=2;$i++) 
            echo "<option>".$i."</option>";
          ?>
          </select>
         

        </div>
        <button type="submit" class="btn btn-success">submit</button>
        </form>
            </div>
          </div>
        </div>
      </div>
    </div>

        <a name="zyjsgl">资源教师管理</a>

       <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/holder/2.0/holder.min.js"></script>
  </body>
</html>
