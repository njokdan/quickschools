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

// if (isset($_SESSION['s_id'])) {
//   print_r($_SESSION);
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


  <!-- Report style -->
  <link rel="stylesheet" href="report.css">


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
  <!-- jQuery 3 -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<script src="./dist/js/jQuery.print.js"></script>
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
              <h3 class="box-title">Students Result</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
              <div class="box-body">
              
              <table align="center" style="width:100%;">
              <tr>
                <td>
                  <label>Student Reg. No.</label>
                </td>
                <td>
                  <label>Class</label>
                </td>

                <td>
                  <label>Term</label>
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
                      <input class="form-control" type="text" name="regno" placeholder="Reg. No">
                        
                      </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="class">
                         
                          <?php $Classes = getAllClasses();
                              if (!empty($Classes)){ 

                                foreach ($Classes as $class) {?>
                                  
                                  <option value="<?php echo $class['classx'];  ?>"><?php echo $class['classx']; ?></option>

                              <?php }
                            }  ?>
                        </select>
                        
                      </div>
                  </td>
                  <td>
                    <div class="form-group">
                     <select class="form-control" name="term">
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
                  </td>
                <td>
                    <div class="form-group">
                     <select class="form-control" name="session">
                         
                          <?php $Sessions = getAllSessions();
                              if (!empty($Sessions)){ 

                                foreach ($Sessions as $session) {?>
                                  
                                  <option value="<?php echo $session['sessionx'];  ?>"><?php echo $session['sessionx']; ?></option>

                              <?php }
                            }  
                          ?>
                        </select>
                        
                      </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary ajax" name="termer"><i class="fa fa-spin fa-refresh" ></i>&nbsp;Fetch Result</button>
                      
                    </div>
                  </td>
                </tr>
              </table>
               <style>
                  td{
                    padding: 5px 15px;
                  }
               </style>

          </div>
          <!-- /.box -->
    </div>
    </form>
    


          <?php if(!empty($termResult)){?>
          <div class="box" id="result-sheet">
            <div class="box-header">              
              <br>
              <div class="row" ><!-- style="border:1px solid green;" -->
                <div class="col-lg-12" ><!-- style="border:1px solid green;" -->
                  <div class="col-lg-6 pull-left" >Report Sheet</div><!-- style="border:1px solid green;" -->
                  <div class="col-lg-6 pull-right" ><!-- style="border:1px solid green;text-align:right;" -->2018/2019</div>
                </div>
              </div>
              
              <table style="width:100%;">
                <tr>
                  <td><strong>Reg No.:</strong>&nbsp;&nbsp;<?php echo $termResult[0]['regno'];  ?></td>
                  <td><strong>Name:</strong>&nbsp;&nbsp;<?php echo $termResult[0]['firstname'].' '.$termResult[0]['lastname'];  ?></td>
                  <td><strong>Class:</strong>&nbsp;&nbsp;<?php echo $termResult[0]['class'];  ?></td>
                  <td><strong>Session:</strong>&nbsp;&nbsp;<?php echo $termResult[0]['session'] ; ?></td>
                  <td><strong>Term:</strong>&nbsp;&nbsp;<?php echo $termResult[0]['term'];  ?></td>
                </tr>
                <!-- <tr>
                  <td><strong>Position:</strong>&nbsp;&nbsp;<?php //echo getStudentRankingInClassByTerm(getStudentId($termResult[0]['regno']),$class,$session,$term);?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr> -->
              </table>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>S/No.</th>
                        <th>Subject</th>
                        <th>1st</th>
                        <th>2nd</th>
                        <th>Exam</th>
                        <th>Average</th>
                        <th>Grade</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $tg=$sn=1; foreach ($termResult as $result ) {?>
                        <tr>
                          <td><?php echo $sn; ?></td>
                          <td><?php echo $result['subject']; ?></td>
                          <td><?php echo $result['test1']; ?></td>
                          <td><?php echo $result['test2']; ?></td>
                          <td><?php echo $result['exam']; ?></td>
                          <td><?php echo $result['average'];$tg+=$result['average']; ?></td>
                          <td><?php echo $result['grade']; ?></td>
                          <td><?php echo $result['position']; ?></td>
                        </tr>

                    <?php $sn++;}?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total Average:&nbsp;<?php echo $tg;?></th>
                        <th colspan="2">Position&nbsp;&nbsp;<?php $grader = getStudentRankingInClassByTerm(getStudentId($termResult[0]['regno']),$termResult[0]['class'],$termResult[0]['session'],$termResult[0]['term']); echo $grader; ?></th>
                      </tr>
                    </tfoot>
                    <!-- <tfoot>

                    <tr>
                      <th><strong>S/No.</strong></th>
                      <th><strong>Reg No.</strong></th>
                      <th><strong>First Name</strong></th>
                      <!- <td> Middle Name</td> ->
                      <th><strong>Last Name</strong></th>
                      <th><strong>Current Class</strong></th>
                      <th><strong>Sex</strong></th>
                      <th><strong>Birth Date</strong></th>
                      <!- <td> role</td> ->
                    </tr>
                    </tfoot> -->
                  </table>
                </div>                
              </div>
              
              <!-- <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <p class="s" id="st1"><strong>Class Teachers Comment: </strong><span>Satisfactory</span></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <p class="s" id="st2"><strong>Principal's Comment: </strong><span>Satisfactory</span></p>
                </div>
              </div>
              <br> -->
              
              
              <style>
                
                #st1{
                  text-align: left;
                }
                #st2{
                  text-align: right;
                }
              </style>
              <!-- <div class="row">
                <div class="col-lg-4" style="margin:10px auto;" align="center">
                  <table style="" class="table">
                    <th>
                      <td colspan="3">Grading Scale</td>
                    </th>
                    <tr>
                      <td>Grade</td>
                      <td>Score-Range</td>
                      <td>Remark</td>
                    </tr>
                    <tr>
                      <td>A</td>
                      <td></td>
                      <td>Excellent</td>
                    </tr>
                    <tr>
                      <td>B</td>
                      <td></td>
                      <td>Very Good</td>
                    </tr>
                    <tr>
                      <td>C</td>
                      <td></td>
                      <td>Good</td>
                    </tr>
                    <tr>
                      <td>D</td>
                      <td></td>
                      <td>Average</td>
                    </tr>
                    <tr>
                      <td>E</td>
                      <td></td>
                      <td>Below Average</td>
                    </tr>
                    <tr>
                      <td>F</td>
                      <td></td>
                      <td>Fail</td>
                    </tr>
                  </table>
                </div>
              </div> -->
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <button class="btn btn-lg btn-primary print-result" onclick="jQuery('#report-page').print()">Print</button>
          
          <button class="btn btn-lg btn-primary" onclick="jQuery('#report-page').print()">Print</button>

          <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal-print_preview">Print_Preview</button><!-- onclick="print_preview()" -->

          <button class="btn btn-lg btn-primary" onclick="jQuery('#report-page').print()" data-toggle="modal" data-target="#modal-print_preview">Print</button>

          <?php }else{ echo "<p>No Record Currently Selected...Kindly provide RegNo!</p>";} ?>
    <!-- </section> -->

    </section>
    <!-- /.content -->

      <div class="modal fade" id="modal-print_preview">
          <div class="modal-dialog" style="width:850px;" id="report-page">
            <div class="modal-content">
              <?php 
                include("report.php");

              ?>
              <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Comment Student Performance</h4>
              </div> -->
              <!-- <div class="modal-body">
              <p id="imbox"> </p>
                <p>One fine body&hellip;
                  
                </p>
                
              </div> -->
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div> -->
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



<!-- Print  
<script>
   window.jQuery || document.write('<script src="../bower_components/jquery/dist/jquery.min.js"><\/script>')
</script>
-- >
<script>
        //<![CDATA[
        jQuery(function($) { 'use strict';
            $("#result-sheet").find('.print-result').on('click', function() {
                //Print ele2 with default options
                $.print("#result-sheet");
            });
            $("#result-sheet").find('button').on('click', function() {
                //Print ele4 with custom options
                $("#result-sheet").print({
                    //Use Global styles
                    globalStyles : false,
                    //Add link with attrbute media=print
                    mediaPrint : false,
                    //Custom stylesheet
                    stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata",
                    //Print in a hidden iframe
                    iframe : false,
                    //Don't print this
                    noPrintSelector : ".avoid-this",
                    //Add this at top
                    prepend : "Hello World!!!<br/>",
                    //Add this on bottom
                    append : "<br/>Buh Bye!",
                    //Log to console when printing is done via a deffered callback
                    deferred: $.Deferred().done(function() { console.log('Printing done', arguments); })
                });
            });
            // Fork https://github.com/sathvikp/jQuery.print for the full list of options
        });
        //]]>
        </script>
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
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->
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
