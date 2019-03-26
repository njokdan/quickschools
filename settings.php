<?php
include('check_login.php');
include('connect.php');
include("RandomStringGenerator.php");
include('function.php');
include('process.php');
$type = $role = '';
///////////////////VARIABLES/////////////////////////
//Session Bios
//Session
//Term
//ExamType
//Class
//Subject
/////////////////////////////////////////////////
// if(isset($_SESSION['s_firstname'])){
// echo $_SESSION['s_firstname'];
// }
////////////////////////////////////////////////////
$type = 'Non-Staff';
$type1 = 'Staff';

$role = 'Student';
$role1 = 'Admin';

if((isset($_GET['role'])) && ($_GET['role']=$role)){


}


// if(((isset($_GET['r'])) && ($_GET['r'] =='K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j'))){ 
  
//   if ((isset($_GET['p'])) && ($_GET['p']=='dashboard')){

//     if ((isset($_GET['role'])) && ($_GET['role']=$role)){
//       echo "yes it is set <br>";

//       echo $_GET['r'];

//       echo "<br>";

//       echo $_GET['role'];
//     }

//   }
  
// }


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QuickSchool | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
   <!-- Pace style -->
  <link rel="stylesheet" href="plugins/pace/pace.min.css">


  <script type="text/javascript" src="maini.js"></script>
  <script type="text/javascript" src="ajax.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>

  #alertbox1{
    position:fixed;z-index:1000;width:60%;display:none;
  }

  </style>
  <script>
   function previewFile(){
       var preview = document.getElementById('Imgprev'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  //previewFile();  //calls the function named previewFile()
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('topbar.php'); ?>
  
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="callout callout-success" id="alertbox1" >
        <h4>I am a success callout!</h4>

        <p>This is a green callout.</p>
      </div>
      
              <!-- Info boxes -->
      <div class="row">
        <div class="col-md-2">
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-add_session">Add Session</button>
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-add_class">Add Class</button>
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-add_subject">Add Subject</button>
          
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-add_term">Add Term</button>
          <a type="button" class="btn btn-block btn-primary btn-sm" href="assign_subject.php">Assign Subject</a>
        </div>
        <div class="col-md-2">
         <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-assign_subject_to_teacher">Assign Subject to Teacher</button>
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-assign_subject_to_student">Assign Subject to Student</button>
          <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#modal-school_info">Create School Info...</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View/Edit School Info...</button>
          <!-- <button type="button" class="btn btn-block btn-primary btn-sm">Class-wise</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">Class-wise</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">Class-wise</button> -->
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-block btn-primary btn-sm">View Session</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View Class</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View Subject</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View Term</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View Teacher's Subject</button>
          <button type="button" class="btn btn-block btn-primary btn-sm">View Student Subject</button>
          
        </div>
      </div>
    <!-- </section> -->
    </section>
    <!-- /.content -->

    
        <div class="modal fade" id="modal-add_session">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Session [Academic Year]</h4>
                <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                  <input type="hidden" class="form-control" name="uid" value="<?php if(isset($_SESSION['s_id'])){echo $_SESSION['s_id'];} ?>">
                    <div class="input-group input-group-sm">
                      <input type="text" class="form-control" name="session">
                          <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary btn-flat" name="addsession" value="Save"><!-- Save</button> -->
                          </span>
                    </div>
                </form>
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                  <?php $uid=$Sessiono="";if(isset($_SESSION['s_id'])){$uid=$_SESSION['s_id'];} $Sessiono=getAllSession($uid); ?>
                  <?php if(!empty($Sessiono)){?>
                    <table>
                      <tr>
                        <th>S/No</th>
                        <th>Staff ID</th>
                        <th>Subject</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                      
                        <?php foreach ($Sessiono as $sessiona) {?>
                          <tr>
                          <td><?php echo $sessiona['sessionxid']; ?></td>
                          <td><?php echo $sessiona['uid']; ?></td>
                          <td><?php echo $sessiona['sessionx']; ?></td>
                          <td><?php echo $sessiona['period']; ?></td>
                          <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                          </tr>
                        <?php }?>
                        <!-- <td>1</td>
                        <td>2007/2008</td>
                        <td>Active</td>
                        <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td> -->
                      
                    </table>
                    <?php }?>
                </p>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-add_class">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Class</h4>
                <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" class="form-control" name="uid" value="<?php if(isset($_SESSION['s_id'])){echo $_SESSION['s_id'];} ?>">
                  <div class="input-group input-group-sm">

                    <input type="text" class="form-control" name="class">
                        <span class="input-group-btn">
                          <input type="submit" class="btn btn-primary btn-flat" name="addclass" value="Save"><!-- Save</button> -->
                        </span>
                  </div>
                </form>
                
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                <?php $uid=$Classo="";if(isset($_SESSION['s_id'])){$uid=$_SESSION['s_id'];} $Classo=getAllClass($uid); ?>
                <?php if(!empty($Classo)){?>
                  <table>
                    <tr>
                      <th>S/No</th>
                      <th>Staff ID</th>
                      <th>Class</th>
                      <th>Created</th>
                      <th>Action</th>
                    </tr>
                    
                      <?php foreach ($Classo as $classic ) {?>
                        <tr>
                        <td><?php echo $classic['classxid']; ?></td>
                        <td><?php echo $classic['uid']; ?></td>
                        <td><?php echo $classic['classx']; ?></td>
                        <td><?php echo $classic['period']; ?></td>
                        <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                        </tr>
                      <?php }?>
                      <!-- <td>1</td>
                      <td>2007/2008</td>
                      <td>Active</td>
                      <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td> -->
                    
                  </table>
                  <?php }?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-add_subject">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Subject</h4>
                  <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" class="form-control" name="uid" value="<?php if(isset($_SESSION['s_id'])){echo $_SESSION['s_id'];} ?>">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" name="subject">
                            <span class="input-group-btn">
                              <input type="submit" class="btn btn-primary btn-flat" name="addsubject" value="Save"><!-- Save</button> -->
                            </span>
                      </div>
                  </form>
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                  <?php $uid=$Subjecto="";if(isset($_SESSION['s_id'])){$uid=$_SESSION['s_id'];} $Subjecto=getAllSubject($uid); ?>
                  <?php if(!empty($Subjecto)){?>
                    <table>
                      <tr>
                        <th>S/No</th>
                        <th>Staff ID</th>
                        <th>Subject</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                      
                        <?php foreach ($Subjecto as $subjecta) {?>
                          <tr>
                          <td><?php echo $subjecta['subjectid']; ?></td>
                          <td><?php echo $subjecta['uid']; ?></td>
                          <td><?php echo $subjecta['subject']; ?></td>
                          <td><?php echo $subjecta['period']; ?></td>
                          <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                          </tr>
                        <?php }?>
                        <!-- <td>1</td>
                        <td>2007/2008</td>
                        <td>Active</td>
                        <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td> -->
                      
                    </table>
                    <?php }?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-add_term">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Add Term</h4>
                  <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                      <input type="hidden" class="form-control" name="uid" value="<?php if(isset($_SESSION['s_id'])){echo $_SESSION['s_id'];} ?>">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="term">
                              <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary btn-flat" name="addterm" value="Save"><!-- Save</button> -->
                              </span>
                        </div>
                  </form>
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                  <?php $uid=$Termo="";if(isset($_SESSION['s_id'])){$uid=$_SESSION['s_id'];} $Termo=getAllTerm($uid); ?>
                  <?php if(!empty($Termo)){?>
                    <table>
                      <tr>
                        <th>S/No</th>
                        <th>Staff ID</th>
                        <th>Term</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                      
                        <?php foreach ($Termo as $terma) {?>
                          <tr>
                          <td><?php echo $terma['termid']; ?></td>
                          <td><?php echo $terma['uid']; ?></td>
                          <td><?php echo $terma['term']; ?></td>
                          <td><?php echo $terma['period']; ?></td>
                          <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                          </tr>
                        <?php }?>
                        <!-- <td>1</td>
                        <td>2007/2008</td>
                        <td>Active</td>
                        <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td> -->
                      
                    </table>
                    <?php }?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-assign_subject_to_teacher">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Assign Subject to Teacher</h4>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat">Save</button>
                      </span>
                </div>
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                  <table>
                    <tr>
                      <th>S/No</th>
                      <th>Year</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2007/2008</td>
                      <td>Active</td>
                      <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                    </tr>
                  </table>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-assign_subject_to_student">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Assign Subject to Student</h4>
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-flat">Save</button>
                      </span>
                </div>
              </div>
              <div class="modal-body">
                <p><!-- One fine body&hellip; -->
                  <table>
                    <tr>
                      <th>S/No</th>
                      <th>Year</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2007/2008</td>
                      <td>Active</td>
                      <td><a href="#" class="btn btn-sm btn-info" type="button">Edit</a>&nbsp;<a href="#" class="btn btn-sm btn-info" type="button">Delete</a></td>
                    </tr>
                  </table>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




        <div class="modal fade" id="modal-school_info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create School Information</h4>
              </div>
              <div class="modal-body">
                <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>School Name</label>
                  <input type="text" class="form-control" id="schoolname" placeholder="Enter School Name" name="schoolname" required>
                </div>
                <div class="form-group">
                  <label>School Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                </div>
                <!-- /.form group -->
                <div class="form-group">
                  <label>School Website</label>
                  <input type="text" class="form-control" id="website" placeholder="e.g www.qschool.com" name="website" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" placeholder="e.g contact@qschool.com" name="email" required>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="e.g. 08012345678" name="phone" required>
                </div>
                <div class="form-group">
                  <label>Set Current Academic Year</label>
                  <select class="form-control" name="session" id="session">
                    <?php $Sessions = getAllSessions();
                              if (!empty($Sessions)){ 

                                foreach ($Sessions as $session) {?>
                                  
                                  <option value="<?php echo $session['sessionx'];  ?>"><?php echo $session['sessionx']; ?></option>

                              <?php }
                            }  
                          ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Set Current Term</label>
                  <select class="form-control" name="term" id="term">
                    <?php $Terms = getAllTerms();
                              if (!empty($Terms)){ 

                                foreach ($Terms as $term) {?>
                                  
                                  <option value="<?php echo $term['term'];  ?>">
                                    <?php 

                                      if(($term['term']=="1st") || ($term['term']=="1ST") || ($term['term']=="First") || ($term['term']=="FIRST")){
                                          echo "First";
                                      }elseif (($term['term']=="2nd") || ($term['term']=="2ND") || ($term['term']=="Second") || ($term['term']=="SECOND")){
                                          echo "Second";
                                      }elseif(($term['term']=="3rd") || ($term['term']=="3RD") || ($term['term']=="Third") || ($term['term']=="THIRD")){
                                          echo "Third";
                                      }
                                      
                                    ?>
                                  </option>

                              <?php }
                        }  ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="loadImage">Load School Logo</label>
                    <input type="file" id="file" name="photo" onchange="previewFile()" style="width:80px;">
                    <img id="Imgprev" class="pull-left" src="" height="100" width="100" alt="Image preview..." style="border-radius:50%;padding:5px;">
                </div>
              </div>
              <!-- /.box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="CreateSchoolInfo" value="Submit">
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
              </div> 

            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('footer.php'); ?>

  

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- PACE -->
<script src="bower_components/PACE/pace.min.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- <script type="text/javascript" src="jquery.js"></script> -->
<?php if(isset($_SESSION['s_id'])){echo '<script type="text/javascript" src="registernew.js"></script>';}?>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    })

    //Date picker
    $('#dob').datepicker({
      autoclose: true
    })
  })

  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.ajax').click(function () {
    $.ajax({
      url: '#', success: function (result) {
        $('.ajax-content').html('<hr>Ajax Request Completed !')
      }
    })
  })
</script>

</body>
</html>
