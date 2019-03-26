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

if(isset($_SESSION['s_role'])){
  $staffrole = $_SESSION['s_role'];
}
if((isset($_GET['role'])) && ($_GET['role']=$role)){


}

// foreach ($_SESSION as $subject => $subt) {
//     echo $subject.': '.$subt."<br>";
// }


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
    function show(a,b,c,d,e,f,g){
      var x = document.getElementById(a);
      var y = document.getElementById('imbox');
      var z = document.getElementById('comment');
      var za = document.getElementById(f).value;
      var zb = document.getElementById(g).value;
      var r = x.innerHTML;
      var role = "Admin";
      y.innerHTML ='USERID:'+ d+'<br>'+ ' Reg. No.:' + r + ' Term:' + b + ' Session:' + c + ' Class: '+ e +' '+"<?php echo getStaffComment1('" + r + "','" + b + "','" + c + "','" + role + "') ?>";
       z.innerHTML ="<p><h4>Class Teacher's Comment:</h4> " + za + "</p>" + "<p><h4>Head Teacher's Comment:</h4> " + zb + "</p>";//"<?php echo getStaffComment1('" + r + "','" + b + "','" + c + "','" + role + "'); ?>"
      document.getElementById('uid').value = d;
      document.getElementById('studreg').value = x.innerText;
      document.getElementById('term').value = b;
      document.getElementById('acadyr').value = c;
      document.getElementById('class').value = e;

      
    }
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
                                  
                                  <option value="<?php echo $session['sessionx']; ?>"><?php echo $session['sessionx']; ?></option>

                              <?php }
                            }  
                          ?>
                        </select>
                        
                      </div>
                  </td>

                  <td>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary ajax" name="fetch_group"><i class="fa fa-spin fa-refresh" ></i>&nbsp;Fetch Result</button>
                      
                    </div>
                  </td>
                </tr>
              </table>
               

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
                  <td><strong>Birth Date</strong></td>1
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


          <?php if(!empty($ranker)){?>
          <?php $Subject = getAllSubjects(); ?>
          <?php if(!empty($Subject)){?>
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Record for <?php if(isset($_SESSION['class_record'])){echo $_SESSION['class_record'];}  ?> Class in <?php if(isset($_SESSION['term_record'])){echo $_SESSION['term_record'];}  ?> Term <?php if(isset($_SESSION['session_record'])){echo $_SESSION['session_record'];} ?> Session</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="rotate">S/No.</th>
                  <th class="rotate">Reg_No.</th>
                  <th class="rotate">First_Name</th>
                  <th class="rotate">Last_Name</th>
                  <?php foreach ($Subject as $subject ) {?>
                  <th class="rotate" style="width:20px;"><?php echo substr($subject['subject'],0,4); ?></th>
                  <?php }?>
                  <th class="rotate">Average</th>
                  <th class="rotate">Grade</th>
                  <th class="rotate">Position</th>
                  <!-- <th class="rotate">Status</th> -->
                  <th class="rotate">Comment</th>
                </tr>
                </thead>
                <tbody>
                <!-- <tr> -->
                  <?php 
                      $i=1;
                      $red = 0;
                      foreach ($ranker as $ko => $va) { ?>
                        <tr>
                          <td><?php echo $i; ?></td>  
                          <td id="<?php echo $va['regno']; ?>"><?php echo $va['regno'];$red=$va['regno']; ?></td>
                          <td><?php echo $va['firstname']; ?></td>
                          <td><?php echo $va['lastname']; ?></td>
                            <?php foreach (($va['subject']) as  $k => $v){  ?>
                            <td><?php echo $v; ?></td>
                            <?php } ?>
                          <td><?php echo $va['average']; ?></td>
                          <td><?php echo $va['grade']; ?></td>
                          <td><?php echo $va['position']; ?></td>
                          <!-- <td>Promoted</td> -->
                          <td><input type="hidden" id="co1" value="<?php echo $va['comment1']; ?>">
                              <input type="hidden" id="co2" value="<?php echo $va['comment2']; ?>"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-comment" onclick="show('<?php echo $red; ?>','<?php if(isset($_SESSION['term_record'])){echo $_SESSION['term_record'];}?>','<?php if(isset($_SESSION['session_record'])){echo $_SESSION['session_record'];}?>','<?php if(isset($_SESSION['s_id'])){echo $_SESSION['s_id'];}?>', '<?php if(isset($_SESSION['class_record'])){echo $_SESSION['class_record'];}  ?>','co1','co2')">View/Add</a></td>
                        </tr>
                      <?php $i++;} ?>

                <!-- </tr> -->
                </tbody>
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <?php } 
              }?>
          <?php // }else{ echo "<p>No Record Currently available...Kindly Select to check the available records!</p>";} ?>
    <!-- </section> -->
    </section>
    <!-- /.content -->

     <div class="modal fade" id="modal-comment">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Comment Student Performance</h4>
                <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="input-group input-group-sm">                  
                      <input type="hidden" class="form-control" name="uid" id="uid">
                      <input type="hidden" class="form-control" name="studreg" id="studreg">
                       <input type="hidden" class="form-control" name="class" id="class">
                      <input type="hidden" class="form-control" name="term" id="term">
                      <input type="hidden" class="form-control" name="acadyr" id="acadyr">
                      <input type="text" class="form-control" name="comment" value="">
                        <span class="input-group-btn">
                          <input type="submit" class="btn btn-primary btn-flat" name="addcomment" value="Save">
                          <!-- <input type="submit" class="btn btn-success btn-flat pull-right" name="updatecomment" value="Update"> -->
                        </span>
                    </div>
                </form>  
                
              </div>
              <div class="modal-body">
              <p id="imbox"> </p>
                <p id="comment"><!-- One fine body&hellip; -->
                  
                </p>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
              </div>
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
