<?php
include('check_login1.php');
include('connect.php');

include("RandomStringGenerator.php");
include('function.php');
include('process.php');

$err1="";
if(isset($_POST['login'])){

    $UserName = clean($_POST['username']);
    $Password =md5(clean($_POST['password']));
    
      
    
      //Create query
    $sql="SELECT * FROM student WHERE username='$UserName' AND password='$Password' AND status='Active'";//Password
    $result=mysqli_query($servr, $sql);
    
      //Check whether the query was successful or not
  if($result) {
      if(mysqli_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['s_id'] = $row['studentid'];
        $_SESSION['s_firstname'] = $row['firstname'];
        $_SESSION['s_middlename'] = $row['middlename'];
        $_SESSION['s_lastname'] = $row['lastname'];
        $_SESSION['s_gender'] = $row['gender'];
        $_SESSION['s_dateofbirth'] = $row['dateofbirth'];
        $_SESSION['s_class'] = $row['class'];
        $_SESSION['s_session'] = $row['session'];
        $_SESSION['s_term'] = $row['term'];
        $_SESSION['s_regno'] = $row['regno'];
        $_SESSION['s_username'] = $row['username'];
        $_SESSION['s_password'] = $row['password'];
        $_SESSION['s_email'] = $row['email'];
        $_SESSION['s_phone'] = $row['phone'];
        $_SESSION['s_degree'] = $row['degree'];
        $_SESSION['s_salary'] = $row['salary'];
        $_SESSION['s_address'] = $row['address'];
        $_SESSION['s_type'] = $row['type'];
        $_SESSION['s_role'] = $row['role'];
        $_SESSION['s_reason'] = $row['reason'];
        $_SESSION['s_status'] = $row['status'];
        $_SESSION['s_enrolled'] = $row['enrolled'];
        
        session_write_close();
        $err1 ="";
        header("location: profile.php?r=K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j&p=dashboard&uid=1&type=Non-Staff&role=Student");
        //header("location: profile.php");
        exit();
      }else {
        
        $err1="Username or Password Incorrect!";
        //Login failed
        //header("location: profile.php");
        // header("location: errorlogin.php");
        // exit();
      }
    }else {
      header("location: errorlogin.php");
       exit();
      //die("Query failed");
    } 



}
  


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QuickSchool | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- Default style -->
   <link rel="stylesheet" href="default/css/default.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">

    <a href="index2.html" class="logoo" id="logoo"><b>Quick</b>School</a>
    <div class="des"></div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="index.php" method="post">
    <p><?php echo "<span style='color:red;'>".$err1."</span>"; ?></p>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <!-- <input type="checkbox"> --> <a href="profile.php?r=<?php echo 'K45tg5p679uojg4d56ghnbSR098877766@34554333455dfgfgfgfseafmbnnvgtyjbnvfgbpo09oi87j';?>&p=dashboard&uid=1&type='Non-Staff'&role='Student'">Remember Me</a> 
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
