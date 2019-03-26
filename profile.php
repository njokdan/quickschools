<?php
include('check_login.php');
include('connect.php');
include("RandomStringGenerator.php");
include('function.php');
include('process.php');
$type = $role = $dt='';
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

// if(isset($_SESSION['s_id'])){ $sr=''; $sr=getPhoto($_SESSION['s_id']); echo $sr;}


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
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('topbar.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
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
 
       <div class="row">
      <!-- left column -->
        <div class="col-md-6">
        <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Profile 
                <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="POST">
                  <input type="text" name="uid" value="<?php if(isset($_SESSION['s_regno'])){ echo getStudentId($_SESSION['s_regno']);} ?>">
                  <input type="file" name="photo" alt="photo"> 
                  <input type="submit" value="save" name="addPhoto">
                </form>
              </h3>
            </div>
            <div class="table-responsive">
                <table class="table no-margin table-hover" style="margin:10px;">
          <!-- <table style="margin:10px;"> -->
            <tr>
              <td style="padding:10px;"><strong>Reg.No:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_regno'])){echo $_SESSION['s_regno'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>First Name:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_firstname'])){echo $_SESSION['s_firstname'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Middle Name:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_middlename'])){echo $_SESSION['s_middlename'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Last Name:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_lastname'])){echo $_SESSION['s_lastname'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Enrolled:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_enrolled'])){echo $_SESSION['s_enrolled'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Gender:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_gender'])){echo $_SESSION['s_gender'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Date Of Birth:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_dateofbirth'])){echo $_SESSION['s_dateofbirth'];} ?></td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Email:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_email'])){echo $_SESSION['s_email'];} ?></td>
              <td style="padding:10px;"><button class="btn btn-primary">Edit</button> </td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Phone No:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_phone'])){echo $_SESSION['s_phone'];} ?></td>
              <td style="padding:10px;"><button class="btn btn-primary">Edit</button> </td>
            </tr>
            <tr>
              <td style="padding:10px;"><strong>Address:</strong></td>
              <td style="padding:10px;"><?php if(isset($_SESSION['s_address'])){echo $_SESSION['s_address'];} ?></td>
              <td style="padding:10px;"><button class="btn btn-primary">Edit</button> </td>
            </tr>
          </table>
          </div>
          </div>
        </div>
      </div>
 
       <?php if((isset($_GET['r']) && ($_GET['r'] =='K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j')) && ($_GET['type']=$type1) && ($_GET['role']=$role1)){ ?>
      <?php if(isset($_GET['p']) && ($_GET['p'] == 'addscore')) { ?>
    <!-- <section class="content"> -->
      <div class="row">
      <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Student Quick Scoring Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="box-body">
              
              <table>
                <tr>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="class">
                          <option>Get Student By class</option>
                          <option value="Primary 1">Primary 1</option>
                          <option value="Primary 2">Primary 2</option>
                          <option value="Primary 3">Primary 3</option>
                          <option value="Primary 4">Primary 4</option>
                          <option value="Primary 5">Primary 5</option>
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="subject">
                          <option value="">Select Subject</option>
                          <option value="English">English</option>
                          <option value="Mathematics">Mathematics</option>
                          <option value="Physics">Physics</option>
                          <option value="Social">Social</option>
                          <option value="C.R.K">C.R.K</option>
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="box-foter">
                    &nbsp; &nbsp;
                      <input type="submit" class="btn btn-primary ajax" name="getstudent" value="Fetch Student"><i class="fa fa-spin fa-refresh" ></i>
                      &nbsp; &nbsp;
                    </div>
                  </td>
                </tr>
                
              </table>
               <div class="form-group">

               </div>

               <?php if(!empty($Stud)) {?>
             
              <table>
                <tr>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="student">
                          <option>Select Student</option>

                           <?php foreach ($Stud as $result ) {
                            $fullname = $result['firstname']." ".$result['lastname'];
                            
                            $studentid = $result['id'];
                            ?>
                          <option><?php echo $fullname; ?></option>
                          <?php }?>
                        </select>


                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="form-goup">
                      <input type="text" class="form-control" id="" placeholder="Enter Score" name="score">
                    </div>
                  </td>
                  <td>
                    <div class="box-foter">
                    &nbsp; &nbsp;
                      <button type="submit" class="btn btn-primary ajax">Submit Score</button>
                      &nbsp; &nbsp;
                    </div>
                  </td>
                </tr>
              </table>
              <?php }  ?>
            </form>
          </div>
          <!-- /.box -->
    </div>
    <!-- </section> -->


    <?php } ?> <!-- dashboard -->



       <?php } ?>

    </section>
    <!-- /.content -->

    
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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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

<!-- <script type="text/javascript" src="jquery.js"></script> -->
<?php if(isset($_SESSION['s_id'])){echo '<script type="text/javascript" src="registernew.js"></script>';}?>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
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
