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
      <!-- Info boxes -->
      
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
                        <select class="form-control" name="class" id="class" onchange="release_item('subject')">
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
                        <select class="form-control" name="subject" id="subject" onchange="release_item('type')">
                          <option value="">Select Subject</option>
                          <?php $Subject = getAllSubjects(); ?>
                          <?php if(!empty($Subject)){?>
                            <?php foreach ($Subject as $subject ) {?>
                            <option value="<?php echo $subject['subject']; ?>"><?php echo $subject['subject']; ?></option>
                            <?php } }?>
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="type" id="type" onchange="release_item('term')">
                          <option value="">Type</option>
                          <option value="Test1">Test 1</option>
                          <option value="Test2">Test 2</option>
                          <option value="Exam">Exam</option>
                          
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  
                </tr>
                <tr>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="term" id="term" onchange="release_item('session')">
                          <option value="">Select Term</option>
                          <option value="1st">First</option>
                          <option value="2nd">Second</option>
                          <option value="3rd">Third</option>
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="session" id="session" onchange="release_item('submit')">
                           <option value="">session</option>
                          <option value="2017/2018">2017/2018</option>
                          <option value="2018/2019">2018/2019</option>
                          <option value="2019/2020">2019/2020</option>
                          <option value="2020/2021">2020/2021</option>
                          <option value="2021/2022">2021/2022</option>
                          <option value="2022/2023">2022/2023</option>
                        </select>
                        &nbsp; &nbsp;
                      </div>
                  </td>
                  <td>
                    <div class="box-foter">
                    &nbsp; &nbsp;
                      <button type="submit" class="btn btn-primary ajax" name="getstudent" id="submit" ><i class="fa fa-spin fa-refresh" ></i>&nbsp;Fetch Student</button>
                      &nbsp; &nbsp;
                    </div>
                  </td>
                </tr>
              </table>
               <style>
                  #subject,#type,#term,#session,#submit{
                    display: none;
                  }
               </style>
              <script>
              function  release_item(sa){
                var g = document.getElementById(sa);
                g.style.display="block";
              }
              </script>
          </div>
          <!-- /.box -->
    </div>
    </form>

    <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <!-- </section> -->
<?php if(((!empty($Stud)) || (!empty($Studt))) && (isset($_SESSION['session_compute']))){?>
 <!-- <section class="content"> -->
      <div class="row">
      <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Scoring Form for:&nbsp;
              <?php if(isset($_SESSION['subject_compute'])){ echo $_SESSION['subject_compute']; } ?>
              &nbsp;in &nbsp;
              <?php if(isset($_SESSION['class_compute'])){ echo $_SESSION['class_compute']; } ?>(<?php if(isset($_SESSION['term_compute'])){ echo $_SESSION['term_compute']; } ?>
              &nbsp;Term)&nbsp;<?php if(isset($_SESSION['session_compute'])){ echo $_SESSION['session_compute']; } ?>
              </h4>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <div class="box-body">
                            
             
              <table>
                <tr>
                  <td>
                    <div class="form-goup">
                    &nbsp; &nbsp;
                        <select class="form-control" name="studentid">
                          <!-- <option>Select Student</option> -->
                         <?php if(!empty($Stud)){
                            foreach ($Stud as $result ) {
                            $fullname = $result['firstname']." ".$result['lastname'];
                            
                            $studentid = $result['id'];
                            ?>
                          <option value="<?php  echo $result['id'];  ?>"><?php echo $fullname; ?></option>
                          <?php }
                          }?>


                          <?php if(!empty($Studt)){
                            foreach ($Studt as $result ) {
                            $fullname = $result['firstname']." ".$result['lastname'];
                            
                            $studentid = $result['id'];
                            ?>
                          <option value="<?php  echo $result['id'];  ?>"><?php echo $fullname; ?></option>
                          <?php }
                          }?>


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
                      <button type="submit" class="btn btn-primary ajax"  name="Save_score1">Submit Score</button>
                      &nbsp; &nbsp;
                    </div>
                  </td>
                </tr>
              </table>
              
              </div>

              <?php }else{
                  echo "Sorry, There is no record for Now...Kindly Select a Class!";
                }

                ?>
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
