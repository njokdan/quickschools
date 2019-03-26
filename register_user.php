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
              <h3 class="box-title">Quick Registration Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" name="register" id="registernew" enctype="multipart/form-data" method="POST">
              <div class="box-body">
                <div class="form-group">
                <label>First Name</label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter FirstName" name="firstname">
                </div>
                <div class="form-group">
                <label>Middle Name</label>
                  <input type="text" class="form-control" id="middlename" placeholder="Enter MiddleName" name="middlename">
                </div>
                <div class="form-group">
                <label>Last Name</label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter LastName" name="lastname">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control" name="sex" id="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Date</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="dob" name="dob" >
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group">
                <label>Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                <label>Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" name="phone">
                </div>
                <div class="form-group">
                <label>Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                  <label>Class</label>
                  <select class="form-control" name="class" id="class">
                    <option>None</option>
                    <option>Primary 1</option>
                    <option>Primary 2</option>
                    <option>Primary 3</option>
                    <option>Primary 4</option>
                    <option>Primary 5</option>
                    <option>Admin</option>
                    <option>Staff Room</option>
                    <option>Security Post</option>
                    <option>Kitchen</option>
                    <option>Store</option>
                    <option>Library</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Session(Academic Yr.)</label>
                  <select class="form-control" name="session" id="session">
                    <option>2017/2018</option>
                    <option>2018/2019</option>
                    <option>2019/2020</option>
                    <option>2020/2021</option>
                    <option>2021/2022</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Term</label>
                  <select class="form-control" name="term" id="term">
                    <option>1st</option>
                    <option>2nd</option>
                    <option>3rd</option>
                  </select>
                </div>

                <div class="form-group">
                <label>UserName</label>
                  <input type="text" class="form-control" id="username" placeholder="UserName" name="username">
                </div>
                <div class="form-group">
                <label>Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>

                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="type" id="type">
                    <option>Non-Staff</option>
                    <option>Staff</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role" id="role">
                    <option>Student</option>
                    <option>Admin</option>
                    <option>Super-Admin</option>
                    <option>Admin-Principal</option>
                    <option>Admin-Proprietor</option>
                    <option>Admin-Head</option>
                    <option>Teacher</option>
                    <option>Accountant</option>
                    <option>Security</option>
                    <option>Cheff</option>
                    <option>Guardian</option>
                    <option>Parent</option>
                    <option>Father</option>
                    <option>Mother</option>
                    <option>None</option>
                  </select>
                </div>
                <div class="form-group">
                <label>Degree</label>
                  <select class="form-control" name="degree" id="degree">
                    <option>None</option>
                    <option>HND</option>
                    <option>OND</option>
                    <option>BSc</option>
                    <option>Phd</option>
                    <option>Master</option>
                    <option>NCE</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Salary</label>
                    <input type="text" class="form-control" id="salary" placeholder="Salary e.g 50000" name="salary">
                  </div>
                  
                  <div class="form-group">
                    <label for="loadImage">Load Image</label>
                    <input type="file" id="file" name="photo" onchange="previewFile()" style="width:80px;">
                    <img id="Imgprev" class="pull-left" src="" height="100" width="100" alt="Image preview..." style="border-radius:50%;padding:5px;">
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="register">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </div>

    <!-- </section> -->


    

 

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
<?php //if(isset($_SESSION['s_id'])){echo '<script type="text/javascript" src="registernew.js"></script>';}?>
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
