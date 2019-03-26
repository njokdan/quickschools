<header class="main-header">

    <!-- Logo -->
    <a href="welcome.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Q</b>Schl</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Quick</b>School</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- search form -->
      <!-- <div class="row">
        <div class="col-md-3">
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
        </div>        
      </div> -->
      <!-- /.search form -->


      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php if(isset($_SESSION['s_id'])){ $sr=''; $sr=getPhoto($_SESSION['s_id']); echo $sr;}  ?>" class="user-image" alt="User Image"><!-- dist/img/user2-160x160.jpg -->
              <span class="hidden-xs"><?php if(isset($_SESSION['s_firstname']) && isset($_SESSION['s_lastname'])){echo $_SESSION['s_firstname']." ".$_SESSION['s_lastname'];} ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php if(isset($_SESSION['s_id'])){ $sr=''; $sr=getPhoto($_SESSION['s_id']); echo $sr;}  ?>" class="img-circle" alt="User Image"><!-- dist/img/user2-160x160.jpg -->

                <p>
                  <?php if(isset($_SESSION['s_firstname']) && isset($_SESSION['s_lastname'])){echo $_SESSION['s_firstname']." ".$_SESSION['s_lastname'].' '.'-'.' '.$_SESSION['s_class'];} ?>
                  <small><?php if(isset($_SESSION['s_role'])){ echo $_SESSION['s_role']; } ?> since <?php echo date('M', strtotime($_SESSION['s_enrolled'])).". ".date('Y', strtotime($_SESSION['s_enrolled'])); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!/.row >
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>