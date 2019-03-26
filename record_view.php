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
      <!-- left column -->
        <div class="col-lg-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Users Records</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="box-body">
              
              <table align="center" style="width:100%;">
              <tr>
                <td>
                  <label>Class</label>
                </td>
                <td>
                  <label >Session</label>
                </td>
                <td >
                  
                </td>
              </tr>
                <tr>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="class">
                         <option value="All">All</option>
                          <option value="Primary 1">Primary 1</option>
                          <option value="Primary 2">Primary 2</option>
                          <option value="Primary 3">Primary 3</option>
                          <option value="Primary 4">Primary 4</option>
                          <option value="Primary 5">Primary 5</option>
                        </select>
                        
                      </div>
                  </td>
                <td>
                    <div class="form-group">
                     <select class="form-control" name="session">
                          <option value="All">All</option>
                          <option value="2017/2018">2017/2018</option>
                          <option value="2018/2019">2018/2019</option>
                          <option value="2019/2020">2019/2020</option>
                          <option value="2020/2021">2020/2021</option>
                          <option value="2021/2022">2021/2022</option>
                          <option value="2022/2023">2022/2023</option>
                        </select>
                        
                      </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary ajax" name="getallstudent" >&nbsp;<i class="fa fa-spin fa-refresh" ></i>&nbsp; Fetch Student</button>
                      
                    </div>
                  </td>
                </tr>
              </table>
               <style>
                  td{
                    padding: 0px 10px;
                  }
               </style>

          </div>
          <!-- /.box -->
    </div>
    </form>
    

    <?php// if(!empty($Studall)) {?>
             
              <!-- <table>
                <tr>
                  <td><strong>S/No.</strong></td>
                  <td><strong>Reg No.</strong></td>
                  <td><strong>First Name</strong></td>
                  <!-<td> Middle Name</td> ->
                  <td><strong>Last Name</strong></td>
                  <td><strong>Current Class</strong></td>
                  <td><strong>Sex</strong></td>
                  <td><strong>Birth Date</strong></td>
                  <!-<td> role</td> ->
                </tr> -->
                 <?php //$s=1; foreach ($Studall as $result ) {
                     // $fullname = $result['firstname']." ".$result['lastname'];
                      //$studentid = $result['id'];echo $fullname;} ?>
                      
                 <!-- <tr>
                   
                  <td><strong><?php //echo $s; ?></strong></td>
                  <td><?php //echo $result['regno']; ?></td>
                  <td><?php //echo $result['firstname']; ?></td>
                  <td><?php //echo $result['lastname']; ?></td>
                  <!- <td><?php //echo $result['']; ?></td> ->
                  <td><?php //echo $result['class']; ?></td>
                  <td><?php //echo $result['gender']; ?></td>
                  <td><?php //echo $result['dateofbirth']; ?></td>
                  <!- <td><?php //echo $result['role']; ?></td> ->

                 </tr>       -->
                
                <?php //$s++; ?>
                <?php //} ?>
             <!--  </table> -->
              <?php //}else{ echo "<p>No Record Currently available...Kindly Select to check the available records!</p>";} ?>
              <style>
                /*td{
                  padding:10px;
                }*/
              </style>


          <?php if(!empty($Studall)) {?>
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Record for <?php if(isset($_SESSION['class_record'])){echo $_SESSION['class_record'];}  ?> Class in <?php if(isset($_SESSION['session_record'])){echo $_SESSION['session_record'];} ?> Session</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th><strong>S/No.</strong></th>
                  <th><strong>Reg No.</strong></th>
                  <th><strong>First Name</strong></th>
                  <!-- <td> Middle Name</td> -->
                  <th><strong>Last Name</strong></th>
                  <th><strong>Current Class</strong></th>
                  <th><strong>Sex</strong></th>
                  <th><strong>Birth Date</strong></th>
                  <!-- <td> role</td> -->
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php $s=1; foreach ($Studall as $result ) {?>
                  <tr>                   
                  <td><strong><?php echo $s; ?></strong></td>
                  <td><?php echo $result['regno']; ?></td>
                  <td><?php echo $result['firstname']; ?></td>
                  <td><?php echo $result['lastname']; ?></td>
                  <!-- <td><?php //echo $result['']; ?></td> -->
                  <td><?php echo $result['class']; ?></td>
                  <td><?php echo $result['gender']; ?></td>
                  <td><?php echo $result['dateofbirth']; ?></td>
                  <!-- <td><?php //echo $result['role']; ?></td> -->
                 </tr>      
                
                <?php $s++; ?>
                <?php } ?>

                </tr>
                </tbody>
                <tfoot>

                <tr>
                  <th><strong>S/No.</strong></th>
                  <th><strong>Reg No.</strong></th>
                  <th><strong>First Name</strong></th>
                  <!-- <td> Middle Name</td> -->
                  <th><strong>Last Name</strong></th>
                  <th><strong>Current Class</strong></th>
                  <th><strong>Sex</strong></th>
                  <th><strong>Birth Date</strong></th>
                  <!-- <td> role</td> -->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <?php }else{ echo "<p>No Record Currently available...Kindly Select to check the available records!</p>";} ?>
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
