<?php
$fullname=$class=$subject=$subjecta=$session=$term=$type=$msg=$msgs=$dt=$Grade=$regno =$enrolled ='';
$Score=$Result=$score=$scorea=$classResult=$Sno=$termResult=$ClassResult=$studentid=$n=$Stud='';
$length =$code=$code1=$rank=$ranker=$firstname=$middlename=$lastname=$gender=$dateofbirth=$rank_for=$arrayt=$username=$password=$email=$phone=$degree=$salary=$address=$type=$role=$status=$reason='';

$UserName=$Password='';
include('connect.php');
include("RandomStringGenerator.php");
include('function.php');
include('process.php');


// if(isset($_GET['firstname']) && !empty($_GET['firstname'])){

// 		$firstname = $_GET['firstname'];
// 		$lastname = $_GET['lastname'];
		
// 				// if(isset($_GET['posts']) && !empty($_GET['posts']) ){
// 				// $posts = $_GET['posts'];
// 				// 	if(send_post($sender,$posts)){
// 	echo "U've got 1 Post";
// 				// 	}/*else{
// 				// 		echo "Post wasn\'t sent";
// 				// 	}*/
// 				// } /*else {
// 				// 	echo "No Post was entered.";
// 				// }*/


			
// 	}



if(isset($_GET['firstname'])){

	//$length = 4;
	$n = new RandomStringGenerator();
	//$code1 = $code->generateNumericString( $length );
	$firstname = clean($_GET['firstname']);
	$middlename = clean($_GET['middlename']);
	$lastname = clean($_GET['lastname']);
	$gender = clean($_GET['sex']);
	$dateofbirth = clean($_GET['dateofbirth']);
	$class = clean($_GET['classx']);
	$session = clean($_GET['session']);
	$term = clean($_GET['term']);
	$username = clean($_GET['username']);
	$password = md5(clean($_GET['password']));
	$email = clean($_GET['email']);
	$phone = clean($_GET['phone']);
	$degree = clean($_GET['degree']);
	$salary = clean($_GET['salary']);
	$address = clean($_GET['address']);
	$type = clean($_GET['type']);
	$role = clean($_GET['role']);
	$status = "Active";
	$reason = "";
	//$enrolled = clean($_POST['enrolled']);
	$code =substr($firstname, 0,1).substr($lastname, 0,1).$n->generateNumericString(4);
	$regno = $code;
	$msg = register($firstname,$middlename,$lastname,$gender,$dateofbirth,$class,$session,$term,$code,$username,$password,$email,$phone,$degree,$salary,$address,$type,$role,$status,$reason);


	return $msg;



}
?>