<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php if(isset($_SESSION['s_id'])){ $sr=''; $sr=getPhoto($_SESSION['s_id']); echo $sr;}  ?>" class="img-circle" alt="User Image"><!-- dist/img/user2-160x160.jpg -->
        </div>
        <div class="pull-left info">
          <p><?php if(isset($_SESSION['s_firstname']) && isset($_SESSION['s_lastname'])){echo $_SESSION['s_firstname']." ".$_SESSION['s_lastname'];} ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li class="treeview "><!- active menu-open ->
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li class="alctive"><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->
        <li>
          <a href="profile.php">
            <i class="fa fa-files-o"></i> <span>Profile</span>
            
          </a>
        </li>
        <!-- <li>
          <a href="profile.php?r=<?php //echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=visitors&uid=1&type=''&role=''">
            <i class="fa fa-taxi"></i><i class="fa fa-user"></i> <span>Visitor(s)</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-orange">1</small>
            </span>
          </a>
        </li> -->
        <!-- <li>
          <a href="profile.php?r=<?php //echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=activities&uid=1&type=''&role=''">
            <i class="fa fa-th"></i> <span>Activities</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->
        <!-- <li>
          <a href="profile.php?r=<?php //echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=attendance&uid=1&type=''&role=''">
            <i class="fa fa-laptop"></i> <span>Attendance</span>
            <!- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> ->
          </a>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Results</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="profile.php"><i class="glyphicon glyphicon-eye-open"></i><i class="fa fa-hourglass-start"></i> Current</a></li> 
            <li><a href="profile.php"><i class="glyphicon glyphicon-eye-open"></i><i class="fa fa-hourglass-end"></i> History</a></li>
            <li><a href="profile.php"><i class="glyphicon glyphicon-eye-open"></i> Term</a></li>
            <li><a href="profile.php"><i class="glyphicon glyphicon-eye-open"></i> Session</a></li> -->
             <li><a href="result1.php"><i class="glyphicon glyphicon-eye-open"></i>Class[Subject-wise]</a></li>
             <li><a href="result.php"><i class="glyphicon glyphicon-eye-open"></i>Class[Term-wise]</a></li>
             <!--  <li><a href="profile.php"><i class="glyphicon glyphicon-eye-open"></i>Student[Subject-wise]</a></li> -->
              <li><a href="result2.php"><i class="glyphicon glyphicon-eye-open"></i>Student[Term-wise]</a></li>
            <li><a href="addscore.php"><i class="glyphicon glyphicon-pencil"></i> Add Score</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-floppy-save"></i> Update Score</a></li>
            <li><a href="viewscore.php"><i class="glyphicon glyphicon-eye-open"></i> View Score</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Payment(s)</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=general&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> General Status</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=schoolfees&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> School Fees</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=library&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Library</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=computerlab&uid=1&type=''&role=''"><i class="fa fa-laptop"></i> Computer Lab</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=transport&uid=1&type=''&role=''"><i class="fa fa-bus"></i> Transport</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=textbook&uid=1&type=''&role=''"><i class="glyphicon glyphicon-book"></i> Textbooks</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=makepayment&uid=1&type=''&role=''"><i class="glyphicon glyphicon-pencil"></i> Make Payments</a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Records</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="profile.php?r=<?php //echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=registernew&uid=1&type2='Staff'&role='Admin'"><i class="glyphicon glyphicon-pencil"></i>Register New</a></li> -->
            <li><a href="register_user.php"><i class="glyphicon glyphicon-pencil"></i>Register User</a></li>

            <li><a href="Record_view.php"><i class="glyphicon glyphicon-eye-open"></i>View</a></li>
            <li><a href="profile.php"><i class="fa fa-edit"></i>Edit</a></li>
            <li><a href="profile.php"><i class="fa fa-trash-o"></i>Delete</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Time Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=examtable&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Exam Time tables</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=testtable&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Test Time tables</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=foodtable&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Food tables</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=activitiestable&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Activities tables</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=supervisoryroster&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Supervisory Roster</a></li>
            <li><a href="profile.php?r=<?php // echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=sweepingroster&uid=1&type=''&role=''"><i class="fa fa-circle-o"></i> Sweeping Roster</a></li>
          </ul>
        </li> -->
        <!-- <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="profile.php?r=<?php //echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=bulksms&uid=1&type=''&role=''">
            <i class="glyphicon glyphicon-phone"></i><span>Bulk SMS</span>            
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->
        
        <li><a href="settings.php"><i class="fa fa-gear"></i> <span>Settings</span></a></li>
        
        <li><a href="document.php"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>