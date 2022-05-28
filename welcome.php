<?php
include('check_login.php');
include('connect.php');
include("RandomStringGenerator.php");
include('function.php');
include('process.php');
$type = $role = $dt= $stclasspop='';

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


//if($_SESSION['type'] === 'Staff'){
  $stclasspop = getStudentPopPerClassPerSessionPerTerm("Primary 1", "2017/2018", "1st");

  //$stclasspop = getStudentPop($class, $term, $session);
//}


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
     
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-pie-chart"></i></span>

            <div class="info-box-content" style="text-align:center;">
              <span class="info-box-text" ><p>Overall <br>Performance</p></span>
              <span class="info-box-number" >90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="fa fa-graduation-cap"></i></span>

            <div class="info-box-content" style="text-align:center;">
              <span class="info-box-text" ><p>Overall <br>Ranking</p></span>
              <span class="info-box-number" >1st</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-institution"></i></span>

            <div class="info-box-content" style="text-align:center;">
              <span class="info-box-text">Class</span>
              <span class="info-box-number"><small>Primary 1</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content" style="text-align:center;">
              <span class="info-box-text">Class <br>of</span>
              <span class="info-box-number"><?php echo $stclasspop; ?> <small>Std.</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     

      

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
          
          

              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Class Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="dist/img/user1-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date">Today</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                     <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user6-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user5-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user4-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user3-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user8-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                      <img src="dist/img/user7-128x128.jpg" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date">12 Jan</span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->
          <!-- <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Recomended Items</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div> -->
            <!-- /.box-header -->
            <!-- <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin table-hover">
                  <thead>
                  <tr>
                    <th>Item ID</th>
                    <th>Subject</th>
                    <th>Items</th>
                    <th>Author(s)</th>
                    <th>Publisher</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT9842</a></td>
                    <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-success">Shipped</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT1848</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT7429</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT7429</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-info">Processing</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT1848</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT7429</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">IT9842</a></td>
                     <td>Literature</td>
                    <td>Things Fall Apart</td>
                    <td>Chinua Achebe</td>
                    <td>Lightspring Pub.</td>
                    <td><span class="label label-success">Shipped</span></td>
                  </tr>
                  </tbody>
                </table>
              </div> -->
              <!-- /.table-responsive -->
           <!--  </div> -->
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!- /.box-footer ->
          </div>
          <!- /.box -->
        </div> 
        <!-- /.col -->

        
      </div>
      <!-- /.row -->

       


      
    <!-- /.content -->
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
