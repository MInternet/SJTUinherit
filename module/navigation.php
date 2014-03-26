  
  <div class='navbar navbar-inverse ' role='navigation'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#'>薪火相传</a>
        </div>
        <div class='navbar-collapse collapse'>
        <ul class='nav navbar-nav'>
        <?php 
          include('./manage/display_database_select_info.php'); $info=read_selcet_info();
          foreach ($info as $row)
          {
          echo"
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>",$row['school_name']," <b class='caret'></b></a>
            <ul class='dropdown-menu'>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=1&smester=1'>大一上</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=1&smester=2'>大一下</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=2&smester=1'>大二上</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=2&smester=2'>大二下</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=3&smester=1'>大三上</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=3&smester=2'>大三下</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=4&smester=1'>大四上</a></li>";
          if ($row['year_total']==5)
                echo "<li><a href='./index.php?school=",$row['school_short_name'],"&grade=5&smester=2'>大五上</a></li>
              <li><a href='./index.php?school=",$row['school_short_name'],"&grade=5&smester=1'>大五上</a></li>";
              
          echo  "</ul>
          </li>";
        }

        ?>
        </ul>
        <?php 
        if (!isset($_SESSION['usr_name']))
        echo "
          <form class='navbar-form navbar-right' role='form' method='post' action='./module/login.php'>
            <div class='form-group'>
              <input type='text' name='Email' placeholder='Email' class='form-control'>
            </div>
            <div class='form-group'>
              <input type='password' name='password' placeholder='Password' class='form-control'>
            </div>
            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>";
        else
        echo "
          <div class='navbar-right navbar-brand'>
            Hello ! ",$_SESSION['usr_name'],"
          </div>
          ";
        ?>


        </div><!--/.navbar-collapse -->
      </div>
    </div>