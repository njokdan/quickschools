<?php

function clean($str) {
	global $servr;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($servr,$str);
	}

function OrdinalNumberSuffix($num) {
    if (!in_array(($num % 100),array(11,12,13))){
      switch ($num % 10) {
        // Handle 1st, 2nd, 3rd
        case 1:  return $num.'st';
        case 2:  return $num.'nd';
        case 3:  return $num.'rd';
      }
    }
    return $num.'th';
  }

function getrank($arrayed,$rank_for){
  arsort($arrayed);// It orders high to low by value. You could avoid this with a simple ORDER BY clause in SQL.
  $resolved = '';
  $result = array();
  $rating ='';
  $pos = $real_pos = 0;
  $prev_score = -1;
  foreach ($arrayed as $exam_n => $score) {
      $real_pos += 1;// Natural position.
      $pos = ($prev_score != $score) ? $real_pos : $pos;// If I have same score, I have same position in ranking, otherwise, natural position.
      $rating = OrdinalNumberSuffix($pos);
      $result[$exam_n] = array(
                       "score" => $score, 
                       "position" => $rating, 
                       "exam_no" => $exam_n
                       );
      $prev_score = $score;// update last score.
  }
  foreach ($result as $rk) {
    if($rk["exam_no"]==$rank_for){
      $resolved = $rk["position"];
    }
  }
  return $resolved;

}

function register($uid,$sid,$firstname,$middlename,$lastname,$gender,$dateofbirth,$class,$session,$term,$regno,$username,$password,$email,$phone,$degree,$salary,$address,$type,$role,$status,$reason,$target_file)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");

	$sql = "INSERT INTO student(uid,sid,firstname,middlename,lastname,gender,dateofbirth,class,session,term,regno,username,password,email,phone,degree,salary,address,type,role,status,reason,enrolled)VALUES('$uid','$sid','$firstname','$middlename','$lastname','$gender','$dateofbirth','$class','$session','$term','$regno','$username','$password','$email','$phone','$degree','$salary','$address','$type','$role','$status','$reason','$dt')";
	$query = mysqli_query($servr,$sql);
	$uid = mysqli_insert_id($servr);
	addPhoto($uid,$target_file);
	// $sql1 = "INSERT INTO photo(uid,location,created)VALUES('$uid','$target_file','$dt')";	
	// $query1 = mysqli_query($servr,$sql1);
	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}
	// uid bigint(4) NOT NULL,
 //      schoolname varchar(50) NOT NULL,
 //      address varchar(50) NOT NULL,
 //      website varchar(50) NOT NULL,
 //      email varchar(50) NOT NULL,
 //      contact varchar(11) NOT NULL,
 //      logo varchar(6) NOT NULL,
 //      period varchar(10) NOT NULL,

function createSchoolInfo($uid,$name,$address,$website,$email,$contact,$year,$term,$logo){
	global $servr; $dt ="";
	$dt = date("d-m-Y");
	$sql = "INSERT INTO school(uid,schoolname,address,website,email,contact,current_year,current_term,logo,period)VALUES('$uid','$name','$address','$website','$email','$contact','$year','$term','$logo','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}

function getSchoolInfo($sid){
	global $servr; $info= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$info[] = array(
						'schoolid' => $row['schoolid'],
						'uid' => $row['uid'],
						'schoolname' => $row['schoolname'],
						'address' => $row['address'],
						'website' => $row['website'],
						'email' => $row['email'],
						'contact' => $row['contact'],
						'year' => $row['current_year'],
						'term' => $row['current_term'],
						'logo' => $row['logo'],
						'period' => $row['period']);	
		}
	}
	return $info;
}

function getSchoolName($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['schoolname'];

	}
	return $school;
}
function getSchoolAddress($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['address'];

	}
	return $school;
}

function getSchoolEmail($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['email'];

	}
	return $school;
}

function getSchoolWebsite($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['website'];

	}
	return $school;
}

function getSchoolContact($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['contact'];

	}
	return $school;
}

function getSchoolYear($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['current_year'];

	}
	return $school;
}

function getSchoolTerm($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['current_term'];

	}
	return $school;
}

function getSchoolLogo($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['logo'];

	}
	return $school;
}

function getSchoolCreated($sid){
	global $servr; $school= '';
	$sql = "SELECT * FROM school WHERE schoolid='$sid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$school=$row['period'];

	}
	return $school;
}

function getAllSchoolInfo(){
	global $servr; $info= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	$sql = "SELECT * FROM school";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$info[] = array(
						'schoolid' => $row['schoolid'],
						'uid' => $row['uid'],
						'schoolname' => $row['schoolname'],
						'address' => $row['address'],
						'website' => $row['website'],
						'email' => $row['email'],
						'contact' => $row['contact'],
						'year' => $row['current_year'],
						'term' => $row['current_term'],
						'logo' => $row['logo'],
						'period' => $row['period']);	
		}
	}
	return $info;
}

function getSchoolInfoByCreator($uid){
	global $servr; $info= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	$sql = "SELECT * FROM school WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$info[] = array(
						'schoolid' => $row['schoolid'],
						'uid' => $row['uid'],
						'schoolname' => $row['schoolname'],
						'address' => $row['address'],
						'website' => $row['website'],
						'email' => $row['email'],
						'contact' => $row['contact'],
						'year' => $row['current_year'],
						'term' => $row['current_term'],
						'logo' => $row['logo'],
						'period' => $row['period']);	
		}
	}
	return $info;
}
// assignid bigint(4) NOT NULL AUTO_INCREMENT,
//       sid bigint(4) NOT NULL,
//       toid bigint(4) NOT NULL,
//       status varchar(10) NOT NULL,
//       period varchar(10) NOT NULL,
function assignSchool($sid,$toid,$byid,$status){
	global $servr; $dt ="";
	$dt = date("d-m-Y");
	$sql = "INSERT INTO assignschool(sid,toid,uid,status,period)VALUES('$sid','$toid','$byid','$status','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}

function addComment($uid, $studreg, $class, $term, $acadyr, $comment){
	$dt =$stid=$clsid=$trmid=$sessid= '';
	global $servr;
	$dt = date("d-m-Y");
	$stid = getStudentId($studreg);
	$clsid = getClassid($class);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	$sql = "INSERT INTO comment(staffid,studentid,classid,termid,sessionid,comments,period)VALUES('$uid', '$stid', '$clsid', '$trmid', '$sessid', '$comment','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}
function getComment($studreg, $term, $acadyr){
	global $servr; $comment= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	$sql = "SELECT comments FROM comment WHERE studentid='$stid' and termid='$trmid' and sessionid='$sessid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$comment=$row['comments'];

	}
	return $comment;
}

function getStaffComment($staffid, $studreg, $term, $acadyr,$staffrole){
	global $servr; $comment=$role= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);

	if(isset($_SESSION['s_role'])){
		$role = $_SESSION['s_role'];
		if($role==$staffrole){
			$sql = "SELECT comments FROM comment WHERE staffid='$staffid' and studentid='$stid' and termid='$trmid' and sessionid='$sessid'";
			$result = mysqli_query($servr,$sql);
			if ($row = mysqli_fetch_array($result)) {
				
				$comment=$row['comments'];

			}
		}
	}
	return $comment;
}

function getStaffComment1($studreg, $term, $acadyr,$staffrole){
	global $servr; $comment=$staffid=$role= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);

	$sql = "SELECT * FROM comment WHERE studentid='$stid' and termid='$trmid' and sessionid='$sessid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$staffid = $row['staffid'];
		$role = getRole($staffid);
		if($role==$staffrole){
			$comment=$row['comments'];
		}

	}
	return $comment;
}

function getStaffComment1Created($studreg, $term, $acadyr,$staffrole){
	global $servr; $Created=$staffid=$role= '';
	$stid = getStudentId($studreg);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);

	$sql = "SELECT * FROM comment WHERE studentid='$stid' and termid='$trmid' and sessionid='$sessid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$staffid = $row['staffid'];
		$role = getRole($staffid);
		if($role==$staffrole){
			$Created=$row['period'];
		}

	}
	return $Created;
}


function updateComment($uid, $studreg, $class, $term, $acadyr, $comment){
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	$stid = getStudentId($studreg);
	$clsid = getClassid($class);
	$trmid = getTermId($term);
	$sessid = getSessionid($acadyr);
	//staffid,studentid,classid,termid,sessionid,comments,period
	$sql ="UPDATE comment SET comments = '$comment', period = '$dt' where studentid = '$stid' and termid = '$trmid' and sessionid = '$sessid'";
	// $sql = "INSERT INTO photo(uid,location,created)VALUES('$uid','$location','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not updated";
	}
	else
	{
		$msg = "Values updated";
	}
	
	return $msg;
}


function addPhoto($uid,$location){
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	$sql = "INSERT INTO photo(uid,location,created)VALUES('$uid','$location','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}

function getPhoto($uid){
	global $servr; $photo= '';
	$sql = "SELECT location FROM photo WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$photo=$row['location'];

	}
	return $photo;
}

function getPhotoByRegNo($regno){
	global $servr; $photo=$uid= '';
	$uid = getStudentId($regno);
	$sql = "SELECT location FROM photo WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$photo=$row['location'];

	}
	return $photo;
}

function updatePhoto($uid,$location){
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	$sql ="UPDATE photo SET location = '$location', created = '$dt' where uid = '$uid'";
	// $sql = "INSERT INTO photo(uid,location,created)VALUES('$uid','$location','$dt')";	
	$query = mysqli_query($servr,$sql);
	if(!$query)
	{
		$msg = "Values Not updated";
	}
	else
	{
		$msg = "Values updated";
	}
	
	return $msg;
}

function addScore($studentid,$fullname,$class,$subject,$session,$term,$type,$score)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");

	$sql = "INSERT INTO mark(studentid,fullname,class,subject,session,term,type,score,period)VALUES('$studentid','$fullname','$class','$subject','$session','$term','$type','$score','$dt')";
	$query = mysqli_query($servr,$sql);

	if(!$query)
	{
		$msg = "Values Not added";
	}
	else
	{
		$msg = "Values added";
	}
	
	return $msg;
}

// staffid bigint(4),
//       studentid bigint(4),
//       classid varchar(11) NOT NULL,
//       termid varchar(3) NOT NULL,
//       sessionid varchar(9) NOT NULL,
//       comments varchar(200) NOT NULL,
//       period varchar(10) NOT NULL,
function addStudentResultComment($staffid,$studentid,$classid,$termid,$sessionid,$comments){
	global $servr;
	$period = date("d-m-Y");
	$sql = "INSERT INTO comment(staffid,studentid,classid,termid,sessionid,comments,period)VALUES('$staffid','$studentid','$classid','$termid','$sessionid','$comments','$period')";
	$query = mysqli_query($servr,$sql);

	if(!$query)
	{
		$msg = "Comment Not added";
	}
	else
	{
		$msg = "Comment added";
	}
	
	return $msg;






}


function addSubject($uid,$name)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	if(!checkSubject($uid,$name)){
		$sql = "INSERT INTO subject(uid, subject, period)VALUES('$uid','$name','$dt')";
		$query = mysqli_query($servr,$sql);

		if(!$query)
		{
			$msg = "Subject Not added";
		}
		else
		{
			$msg = "Subject added";
		}
		
		return $msg;
	}
}

function checkSubject($uid,$name){
	global $servr; $class= '';
	$sql = "SELECT * FROM subject WHERE uid='$uid' and subject='$name'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
	// if ($row = mysqli_fetch_array($result)) {
		
		// $class=$row['class'];
		return True;
	 }
}

function addClass($uid,$name)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	if(!checkClass($uid,$name)){
		$sql = "INSERT INTO classx(uid, classx, period)VALUES('$uid','$name','$dt')";
		$query = mysqli_query($servr,$sql);

		if(!$query)
		{
			$msg = "Class Not added";
		}
		else
		{
			$msg = "Class added";
		}
		
		return $msg;
	}
	
}

function addTerm($uid,$name)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	if(!checkTerm($uid,$name)){
		$sql = "INSERT INTO term(uid, term, period)VALUES('$uid','$name','$dt')";
		$query = mysqli_query($servr,$sql);

		if(!$query)
		{
			$msg = "Term Not added";
		}
		else
		{
			$msg = "Term added";
		}
		
		return $msg;
	}
}

function checkTerm($uid,$name){
	global $servr; $class= '';
	$sql = "SELECT * FROM term WHERE uid='$uid' and term='$name'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
	// if ($row = mysqli_fetch_array($result)) {
		
		// $class=$row['class'];
		return True;
	 }
}

function addSession($uid,$name)
{
	$dt = '';
	global $servr;
	$dt = date("d-m-Y");
	if(!checkSession($uid,$name)){
		$sql = "INSERT INTO sessionx(uid, sessionx, period)VALUES('$uid','$name','$dt')";
		$query = mysqli_query($servr,$sql);

		if(!$query)
		{
			$msg = "Session Not added";
		}
		else
		{
			$msg = "Session added";
		}
		
		return $msg;
	}
}

function checkSession($uid,$name){
	global $servr; $class= '';
	$sql = "SELECT * FROM sessionx WHERE uid='$uid' and sessionx='$name'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
	// if ($row = mysqli_fetch_array($result)) {
		
		// $class=$row['class'];
		return True;
	 }
}
// function getTermid($term){
// 	global $servr; $termid= '';
// 	$sql = "SELECT * FROM term WHERE term='$term'";
// 	$result = mysqli_query($servr,$sql);
// 	if ($row = mysqli_fetch_array($result)) {
		
// 		$termid=$row['term'];

// 	}
// 	return $termid;
// }

function getTerm($termid){
	global $servr; $term= '';
	$sql = "SELECT * FROM term WHERE termid='$termid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$term=$row['term'];

	}
	return $term;
}

function getAllTerm($uid){
	global $servr; $term= array();
	$sql = "SELECT * FROM term WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$term[] = array(
						'termid' => $row['termid'],
						'uid' => $row['uid'],
						'term' => $row['term'],
						'period' => $row['period']);	
		}
	}
	return $term;
}

function getAllTerms(){
	global $servr; $term= array();
	$sql = "SELECT * FROM term";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$term[] = array(
						'termid' => $row['termid'],
						'uid' => $row['uid'],
						'term' => $row['term'],
						'period' => $row['period']);	
		}
	}
	return $term;
}



// function getClassid($class){
// 	global $servr; $classid= '';
// 	$sql = "SELECT * FROM classx WHERE class='$class'";
// 	$result = mysqli_query($servr,$sql);
// 	if ($row = mysqli_fetch_array($result)) {
		
// 		$classid=$row['classid'];

// 	}
// 	return $classid;
// }

function getClass($classid){
	global $servr; $class= '';
	$sql = "SELECT * FROM classx WHERE classid='$classid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$class=$row['class'];

	}
	return $class;
}

function checkClass($uid,$name){
	global $servr; $class= '';
	$sql = "SELECT * FROM classx WHERE uid='$uid' and classx='$name'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
	// if ($row = mysqli_fetch_array($result)) {
		
		// $class=$row['class'];
		return True;
	 }
	
}

function getAllClass($uid){
	global $servr; $class= array();
	$sql = "SELECT * FROM classx WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$class[] = array(
						'classxid' => $row['classxid'],
						'uid' => $row['uid'],
						'classx' => $row['classx'],
						'period' => $row['period']);	
		}
	}
	return $class;
}

function getAllClasses(){
	global $servr; $class= array();
	$sql = "SELECT * FROM classx order by classx asc";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$class[] = array(
						'classxid' => $row['classxid'],
						'uid' => $row['uid'],
						'classx' => $row['classx'],
						'period' => $row['period']);	
		}
	}
	return $class;
}

// function getSessionid($sessionx){
// 	global $servr; $sessionxid= '';
// 	$sql = "SELECT * FROM sessionx WHERE sessionx='$sessionx'";
// 	$result = mysqli_query($servr,$sql);
// 	if ($row = mysqli_fetch_array($result)) {
		
// 		$sessionxid=$row['sessionxid'];

// 	}
// 	return $sessionxid;
// }

function getSession($sessionxid){
	global $servr; $sessionx= '';
	$sql = "SELECT * FROM sessionx WHERE sessionxid='$sessionxid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$sessionx=$row['sessionx'];

	}
	return $sessionx;
}

function getAllSession($uid){
	global $servr; $session= array();
	$sql = "SELECT * FROM sessionx WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$session[] = array(
						'sessionxid' => $row['sessionxid'],
						'uid' => $row['uid'],
						'sessionx' => $row['sessionx'],
						'period' => $row['period']);	
		}
	}
	return $session;
}

function getAllSessions(){
	global $servr; $session= array();
	$sql = "SELECT * FROM sessionx";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$session[] = array(
						'sessionxid' => $row['sessionxid'],
						'uid' => $row['uid'],
						'sessionx' => $row['sessionx'],
						'period' => $row['period']);	
		}
	}
	return $session;
}

function addSecurityDetails($id,$username,$password,$type)
{
	global $servr;
	$sql = "INSERT INTO security(id,username,password,type)VALUES('$id','$username','$password','$type')";
	$query = mysqli_query($servr,$sql);

	if(!$query)
	{
		$msg = "Security Details Not added";
	}
	else
	{
		$msg = "Security Details added";
	}
	
	return $msg;
}

function logout(){
	global $servr;
	//session_start();
	session_destroy();
	mysql_close($servr);
	header("Location:index.php");
}

function login($username,$password){
	global $servr; $id = '';
	$password = md5($password); 
	$sql = "SELECT * FROM security WHERE username='$username' AND password='$password'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		//session_start();
		$id = $row['id'];
		
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];

		if($row['type']=='STAFF'){
			$_SESSION['type'] = $row['type'];	
			header("location:staffprofile.php");

		}elseif($row['type']=='STUDENT'){
			$_SESSION['type'] = $row['type'];
			$sql1 = "SELECT * FROM student WHERE studentid='$id'";
			$result1 = mysqli_query($servr,$sql1);
			if ($row1 = mysqli_fetch_array($result1)) {

				$_SESSION['firstname'] = $row1['firstname'];
				$_SESSION['lastname'] = $row1['lastname'];
				$_SESSION['gender'] = $row1['gender'];
				$_SESSION['dateofbirth'] = $row1['dateofbirth'];
				$_SESSION['class'] = $row1['class'];
				$_SESSION['session'] = $row1['session'];
				$_SESSION['term'] = $row1['term'];
				$_SESSION['regno'] = $row1['regno'];
				$_SESSION['enrolled'] = $row1['enrolled'];

			}
			header("location:studentprofile.php");

		}else{
			$_SESSION['type'] = "ADMIN";
			header("location:adminprofile.php");
		}
		


	}

	//return $student;

}

function loginWithRegNo($regno){
	global $servr;
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		//session_start();		
		$_SESSION['id'] = $row['studentid'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['dateofbirth'] = $row['dateofbirth'];
		$_SESSION['class'] = $row['class'];
		$_SESSION['session'] = $row['session'];
		$_SESSION['term'] = $row['term'];
		$_SESSION['regno'] = $row['regno'];
		$_SESSION['enrolled'] = $row['enrolled'];		
	}
	header("location:studentprofile.php");	
}

function loginWithPin($pin){
	global $servr;
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		//session_start();		
		$_SESSION['id'] = $row['studentid'];
		$_SESSION['firstname'] = $row['firstname'];
		$_SESSION['lastname'] = $row['lastname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['dateofbirth'] = $row['dateofbirth'];
		$_SESSION['class'] = $row['class'];
		$_SESSION['session'] = $row['session'];
		$_SESSION['term'] = $row['term'];
		$_SESSION['regno'] = $row['regno'];
		$_SESSION['enrolled'] = $row['enrolled'];		
	}
	header("location:studentprofile.php");	
}

function getTermId($term){
	global $servr; $id= '';
	$sql = "SELECT * FROM term WHERE term='$term'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['termid'];

	}
	return $id;
}

function getClassId($class){
	global $servr; $id= '';
	$sql = "SELECT * FROM classx WHERE classx='$class'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['classxid'];

	}
	return $id;
}

function getSessionId($session){
	global $servr; $id= '';
	$sql = "SELECT * FROM sessionx WHERE sessionx='$session'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['sessionxid'];

	}
	return $id;
}

function getStudentById($studentid){
	global $servr; $student=array();
	$sql = "SELECT * FROM student WHERE studentid='$studentid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {		
			$student[] = array(
						'id' => $row['studentid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);		
		}
	}
	return $student;
}

function getStudentId($regno){

	global $servr; $id= '';
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['studentid'];

	}
	return $id;

}

function getaStudent($studentid){

	global $servr; $score= '';
	$sql = "SELECT * FROM mark WHERE studentid='$studentid' AND class='$class' AND subject='$subject' AND session='$session' AND term='$term' AND type = 'Exam'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$score=$row['score'];
		
	}
	return $score;

}

function getRole($staffid){
	global $servr; $role= '';
	$sql = "SELECT * FROM student WHERE studentid='$staffid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$role=$row['role'];

	}
	return $role;
}

function getStudentFirstname($studentid){
	global $servr; $firstname= '';
	$sql = "SELECT * FROM student WHERE studentid='$studentid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$firstname=$row['firstname'];

	}
	return $firstname;
}

function getStudentLastname($studentid){
	global $servr; $lastname= '';
	$sql = "SELECT * FROM student WHERE studentid='$studentid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$lastname=$row['lastname'];

	}
	return $lastname;
}
function getStudentFirstnameByRegNo($regno){
	global $servr; $firstname= '';
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$firstname=$row['firstname'];

	}
	return $firstname;
}

function getStudentLastnameByRegNo($regno){
	global $servr; $lastname= '';
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$lastname=$row['lastname'];

	}
	return $lastname;
}

function getStudentIdByRegNo($regno){
	global $servr; $id= '';
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['studentid'];

	}
	return $id;
}

function getFullname($studentid){
	global $servr;$fullname='';
	$sql = "SELECT * FROM student WHERE studentid='$studentid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$fullname = $row['firstname']." ".$row['lastname'];
		
	}
	return $fullname;

}

function getStudentRegno($studentid){
	global $servr; $regno= '';
	$sql = "SELECT * FROM student WHERE studentid='$studentid'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$regno=$row['regno'];

	}
	return $regno;
}

function getStudentByRegno($regno){
	global $servr; $student=array();
	$sql = "SELECT * FROM student WHERE regno='$regno'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getStudentByClass($classt){
	global $servr; $studenta=array();$sid='';
	// echo "<br>Classes <br>";
	// print_r($classt);
	// if(is_array($classt)){
	// 	$sid=$classt;
	// }else{
	// 	$sid=$classt;
	// }
	
	$sql = "SELECT * FROM student WHERE class='$classt'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
		
			$studenta[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $studenta;
}


function getStudentByClassSession($class,$session){
	global $servr; $student=array();$sid='';
	$sql = "SELECT * FROM student WHERE class='$class' and session='$session'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getStudentBySession($session){
	global $servr; $student=array();$sid='';
	$sql = "SELECT * FROM student WHERE session='$session'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getStudentByClass1($class){
	global $servr; 
	$student=array();
	$sid=$sregno=$sclass=$ssession=$numrows=$sub=$scr=$stype=$ssubject=$sterm='';
	$sql = "SELECT * FROM student WHERE class='$class'";
	$result = mysqli_query($servr,$sql);
	$numrowsa = mysqli_num_rows($result);

	if($numrowsa>0){
		while ($row = mysqli_fetch_array($result)) {
						$sid = $row['studentid'];
						$sclass = $_SESSION['class_compute'];
						$ssubject = $_SESSION['subject_compute'];
						$stype = $_SESSION['type_compute'];
						$ssession = $_SESSION['session_compute'];
						$sterm = $_SESSION['term_compute'];
						$sregno = $row['regno'];

						$sql1 = "SELECT * FROM mark WHERE studentid='$sid' AND class='$sclass' AND session='$ssession' AND term='$sterm' AND type='$stype' AND subject='$ssubject'";
						$result1 = mysqli_query($servr,$sql1);
						$numrows = mysqli_num_rows($result1);

						// if($numrows>0){
						// 	while($row1 = mysqli_fetch_array($result1)){
						// 		print_r($row1) ;
						// 		if((!empty($row1['subject'])) && (!empty($row1['score']))){

						// 			$sub = $row1['subject'];
						// 			$scr = $row1['score'];
						// 		}
								
						// 	}
						// 	$student[] = array(
						// 					'id' => $row['studentid'],
						// 					'firstname' => $row['firstname'],
						// 					'lastname' => $row['lastname'],
						// 					'class' => $row['class'],
						// 					'subject' => $sub,
						// 					'session' => $row['session'],
						// 					'term' => $row['term'],
						// 					'score' => $scr,
						// 					'status' => "UPDATING");
						// }
						// $sub = $scr = '';
						if($numrows<1){
							$student[] = array(
											'id' => $row['studentid'],
											'firstname' => $row['firstname'],
											'lastname' => $row['lastname'],
											'gender' => $row['gender'],
											'dateofbirth' => $row['dateofbirth'],
											'class' => $row['class'],
											'subject' => $sub,
											'session' => $row['session'],
											'term' => $row['term'],
											'regno' => $row['regno'],
											'score' => $scr,
											'status' => "NEW",
											'enrolled' =>$row['enrolled']);
						}
		
			
		}
	}
return $student;
}


function getAllStudent(){
	global $servr; $student=array();
	$sql = "SELECT * FROM student";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getAllStudent1($ss){
	global $servr; $student=array();
	$sql = "SELECT * FROM student where session = '$ss'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getAllStudentDetails(){
	global $servr; $student=array();
	$sql = "SELECT * FROM student";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			
			$student[] = array(
						'id' => $row['studentid'],
						'uid' => $row['uid'],
						'sid' => $row['sid'],
						'firstname' => $row['firstname'],
						'lastname' => $row['lastname'],
						'gender' => $row['gender'],
						'dateofbirth' => $row['dateofbirth'],
						'class' => $row['class'],
						'session' => $row['session'],
						'term' => $row['term'],
						'regno' => $row['regno'],
						'enrolled' =>$row['enrolled']);
			
		}
	}
	return $student;
}

function getSubject($subject){
	global $servr; $subjects=array();
	$sql = "SELECT * FROM subject WHERE name='$subject'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$subjects[] = array(
					'id' => $row['subjectid'],
					'subject' => $row['name']);
		
	}
	return $subjects;

}

function getAllSubjects(){
	global $servr; $subjects=array();
	$sql = "SELECT * FROM subject";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {
			
			$subjects[] = array(
						'id' => $row['subjectid'],
						'subject' => $row['subject']);
			
		}
	}
	return $subjects;

}

function getAllSubject($uid){
	global $servr; $subject= array();
	$sql = "SELECT * FROM subject WHERE uid='$uid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {

			$subject[] = array(
						'subjectid' => $row['subjectid'],
						'uid' => $row['uid'],
						'subject' => $row['subject'],
						'period' => $row['period']);	
		}
	}
	return $subject;
}
// staffid bigint(4),
//       studentid bigint(4),
//       classid varchar(11) NOT NULL,
//       termid varchar(3) NOT NULL,
//       sessionid varchar(9) NOT NULL,
//       comments varchar(200) NOT NULL,
//       period varchar(10) NOT NULL,
function getStudentResultComment($studentid,$classid,$termid,$sessionid){
	global $servr; $comment=array();
	$sql = "SELECT * FROM comment WHERE studentid='$studentid' and classid='$classid' and termid='$termid' and sessionid='$sessionid'";
	$result = mysqli_query($servr,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows>0){
		while ($row = mysqli_fetch_array($result)) {		
			$comment[] = array(
						'staffid' => $row['staffid'],
						'studentid' => $row['studentid'],
						'classid' => $row['classid'],
						'termid' => $row['termid'],
						'sessionid' => $row['sessionid'],
						'comments' => $row['comments'],
						'period' =>$row['period']);		
		}
	}
	return $comment;
}

function getTest($studentid,$class,$subject,$session,$term,$type){
	global $servr; $score= '';
	$sql = "SELECT * FROM mark WHERE studentid='$studentid' AND class='$class' AND subject='$subject' AND session='$session' AND term='$term' AND type = '$type'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$score=$row['score'];
	}
	return $score;

}
function getTest1($studentid,$class,$subject,$session,$term){
	global $servr; $score= '';
	$sql = "SELECT * FROM mark WHERE studentid='$studentid' AND class='$class' AND subject='$subject' AND session='$session' AND term='$term' AND type = 'Test1'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$score=$row['score'];
	}
	return $score;
}
function getTest2($studentid,$class,$subject,$session,$term){
	global $servr; $score= '';
	$sql = "SELECT * FROM mark WHERE studentid='$studentid' AND class='$class' AND subject='$subject' AND session='$session' AND term='$term' AND type = 'Test2'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$score=$row['score'];
	}
	return $score;
}
function getExam($studentid,$class,$subject,$session,$term){
	global $servr; $score= '';
	$sql = "SELECT * FROM mark WHERE studentid='$studentid' AND class='$class' AND subject='$subject' AND session='$session' AND term='$term' AND type = 'Exam'";
	$result = mysqli_query($servr,$sql);
	if ($row = mysqli_fetch_array($result)) {
		
		$score=$row['score'];
	}
	return $score;
}

function getAverage1($test1,$test2,$Exam){
	$Average='';
	$Average = round((($test1+$test2+$Exam)/3),2);
	return $Average;
}

function getAverage($studentid,$class,$subject,$session,$term){
	$test1=$test2=$Exam=$Average='';
	$test1 = getTest1($studentid,$class,$subject,$session,$term);
	$test2 = getTest2($studentid,$class,$subject,$session,$term);
	$Exam = getExam($studentid,$class,$subject,$session,$term);
	//$Average = round((($test1+$test2+$Exam)/3),2);
	return getAverage1($test1,$test2,$Exam);
}

function getGrade($grad){
	if ($grad>=80 && $grad <=100) {
	
		$grade = "A";

	}elseif ($grad>=70 && $grad <=79) {
	
		$grade = "B";

	}elseif ($grad>=60 && $grad <=69) {
	
		$grade = "C";

	}elseif ($grad>=50 && $grad <=59) {
	
		$grade = "D";

	}elseif ($grad>=40 && $grad <=49) {
	
		$grade = "E";

	}else{
		$grade = "F";
	}

	return $grade;
}



function getResult($studentid,$class,$subject,$session,$term){
	$test1=$test2=$Exam=$Average='';
	$Grade='';
	$result = array();
	$test1 = getTest1($studentid,$class,$subject,$session,$term);
	$test2 = getTest2($studentid,$class,$subject,$session,$term);
	$Exam = getExam($studentid,$class,$subject,$session,$term);
	$Average = round((getAverage($studentid,$class,$subject,$session,$term)),1);

	$Grade = getGrade($Average);
	$fullname = getFullname($studentid);

	$result[]=array(
					'id' => $studentid,
					'regno' => getStudentRegno($studentid),
					'fullname' => $fullname,
					'class' => $class,
					'subject' => $subject,
					'session' => $session,
					'term' => $term,
					'test1' => $test1,
					'test2' => $test2,
					'exam' => $Exam,
					'average' =>$Average,
					'grade' => $Grade);
		
	
	return $result;

}



function getClassResultByType($class,$subject,$session,$term,$type){
	$ClassResult=array();
	$student = getStudentByClass($class);
	$Sno=1;
	foreach ($student as $stud) {
		$studentid = $stud['id'];
		$firstname = $stud['firstname'];
		$lastname = $stud['lastname'];
		$regno = $stud['regno'];

		if($type=='Test1'){
			$score = getTest1($studentid,$class,$subject,$session,$term);
		}
		if($type=='Test2'){
			$score = getTest2($studentid,$class,$subject,$session,$term);
		}
		if($type=='Exam'){
			$score = getTest2($studentid,$class,$subject,$session,$term);
		}
		$grade = getGrade($score);


		$ClassResult[] = array(
					'Sno' => $Sno,
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subject,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'score' =>$score,
					'grade' =>$grade);
		
		$Sno++;
	}
	return $ClassResult;

}

function getClassResultBySubjectByType($class,$subject,$session,$term,$type){
	$ClassResult=array();$Total='';
	$student = getStudentByClass($class);
	$Sno = 1;
	foreach ($student as $stud) {
		$studentid = $stud['id'];
		$firstname = $stud['firstname'];
		$lastname = $stud['lastname'];
		$regno = $stud['regno'];
		$Test1 = getTest1($studentid,$class,$subject,$session,$term);
		$Test2 = getTest2($studentid,$class,$subject,$session,$term);
		$Exam = getExam($studentid,$class,$subject,$session,$term);
		$Total = $Test1+$Test2+$Exam;
		$average = getAverage($studentid,$class,$subject,$session,$term);
		$grade = getGrade($average);


		$ClassResult[] = array(
					'Sno' => $Sno,
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subject,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'test1' =>$Test1,
					'test2' =>$Test2,
					'exam' =>$Exam,
					'total' =>$Total,
					'average' =>$average,
					'grade' =>$grade);
		
		$Sno++;
	}
	return $ClassResult;

}

function getClassResultBySubjectByTerm($class,$subject,$session,$term){
	$ClassResult=array();$Total='';
	$student = getStudentByClass($class);
	$Sno = 1;
	foreach ($student as $stud) {
		$studentid = $stud['id'];
		$firstname = $stud['firstname'];
		$lastname = $stud['lastname'];
		$regno = $stud['regno'];
		$Test1 = getTest1($studentid,$class,$subject,$session,$term);
		$Test2 = getTest2($studentid,$class,$subject,$session,$term);
		$Exam = getExam($studentid,$class,$subject,$session,$term);
		$Total = $Test1+$Test2+$Exam;
		$average = getAverage($studentid,$class,$subject,$session,$term);
		$grade = getGrade($average);


		$ClassResult[] = array(
					'Sno' => $Sno,
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subject,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'test1' =>$Test1,
					'test2' =>$Test2,
					'exam' =>$Exam,
					'total' =>$Total,
					'average' =>$average,
					'grade' =>$grade);
		
		$Sno++;
	}
	return $ClassResult;

}
function getPosition($Studentid,$class,$Subject,$session,$term){

	$subjects = getAllSubjects();
	$students = getStudentByClass($class);
	$studentSubjectStack = array();
	$TerminalResult = array();
	$groupAverage = array();
	$totalAverage = '';
	$total='';
	$Regno=getStudentRegno($Studentid);
	
	$firstname=$lastname='';
	$count='';
	$sum_arr =$Test2=$Test1=$Exam=$average= 0;

	if(!empty($students)){
		foreach ($students as $stud) {
			$studentid = $stud['id'];
			$firstname = $stud['firstname'];
			$lastname = $stud['lastname'];
			$regno = $stud['regno'];

			$Test1 = getTest1($studentid,$class,$Subject,$session,$term);
			
			$Test2 = getTest2($studentid,$class,$Subject,$session,$term);
			$Exam = getExam($studentid,$class,$Subject,$session,$term);
			$Total = $Test1+$Test2+$Exam;
			$average = getAverage($studentid,$class,$Subject,$session,$term);

			///////////////////////////////////////////////
			//
			
			$studentSubjectStack[$regno] = $average;

		}
	}
		// $avgT = getGroupedAverage($class,$session,$term);
		// 	$rank_for = $regno;
	//print_r($studentSubjectStack);
			$rankt = getrank($studentSubjectStack,$Regno);
	return $rankt;

}

function getEachStudentResultByTerm($Studentid,$class,$session,$term){
	$Subject =$comment1=$comment2=$created1=$created2='';$TerminalResult=array();
	$subject = getAllSubjects();
	$Sno = 1;
	$comment1 = getStaffComment1(getStudentRegno($Studentid), $term, $session,"Admin");
	$created1 = getStaffComment1Created(getStudentRegno($Studentid), $term, $session,"Admin");
	$comment2 = getStaffComment1(getStudentRegno($Studentid), $term, $session,"Admin");
	$created2 = getStaffComment1Created(getStudentRegno($Studentid), $term, $session,"Admin");

	if(!empty($subject)){
		foreach ($subject as $sub ){
		$firstname = getStudentFirstname($Studentid);
		$lastname = getStudentLastname($Studentid);
		$regno = getStudentRegno($Studentid);
		$Subject = $sub['subject'];
		$Test1 = getTest1($Studentid,$class,$Subject,$session,$term);
		$Test2 = getTest2($Studentid,$class,$Subject,$session,$term);
		$Exam = getExam($Studentid,$class,$Subject,$session,$term);
		$Total = $Test1+$Test2+$Exam;
		$average = getAverage($Studentid,$class,$Subject,$session,$term);
		$grade = getGrade($average);
		$position = getPosition($Studentid,$class,$Subject,$session,$term);
		//$comment = getStudentResultComment($studentid,$classid,$termid,$sessionid);

		$TerminalResult[] = array(
					'average' =>$average,
					'Sno' => $Sno,
					'id' => $Studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $Subject,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'test1' =>$Test1,
					'test2' =>$Test2,
					'exam' =>$Exam,
					'total' =>$Total,					
					'grade' =>$grade,
					'position' =>$position,
					'comment1' =>$comment1,
					'created1' =>$created1,
					'comment2' =>$comment2,
					'created2' =>$created2);//'comment' =>$comment

		}
	}

	arsort($TerminalResult);
	return $TerminalResult;

}

function getEachStudentResultByTermg($Studentid,$class,$session,$term){

	}

function getEachStudentOverallResultAverageByTerm($Studentid,$class,$session,$term){

	}


function getEachStudentResultByTer($Studentid,$class,$session,$term){

	}

function getClassRankingByTerm($class,$session,$term){
	$subjects = getAllSubjects();
	$students = getStudentByClass($class);
	$subjectStack = array();
	$TerminalResult = array();
	$totalAverage = '';
	$total='';
	$regno='';
	$studentid=$rankt='';
	$firstname=$firstname=$lastname='';
	$Subject=$avgT='';
	$count=$count1=$count2=$count3=0;
	$rank_for ='';
	$sum_arr=$sum_arr1=$sum_arr2=$sum_arr3 = 0;
	$ca ='';
	$weightageAverage=0;
	if(!empty($students)){
		foreach ($students as $stud) {
			$studentid = $stud['id'];
			$firstname = $stud['firstname'];
			$lastname = $stud['lastname'];
			$regno = $stud['regno'];
			$rank_for = $regno;
			if(!empty($subjects)){
				foreach ($subjects as $sub) {
					//get test1, test2, exam
					$Subject = $sub['subject'];
					$Test1 = getTest1($studentid,$class,$Subject,$session,$term);
					$Test2 = getTest2($studentid,$class,$Subject,$session,$term);
					$Exam = getExam($studentid,$class,$Subject,$session,$term);
					$Total = $Test1+$Test2+$Exam;
					$average = getAverage($studentid,$class,$Subject,$session,$term);

					///////////////////////////////////////////////
					//
					$subjectStack[$Subject] = $average;

				}
			}//
			
			$count = sizeof($subjectStack);
			$sum_arr = array_sum($subjectStack);

			
			//sum all the averages together
			// $count = sizeof($subjectStack);
			// $sum_arr = array_sum($subjectStack);
			// // foreach ($subjectStack as $av => $a) {
			// 	$total += $a;
			// }
			// $totalAverage = round(($total/$count),2);
			//$ca ='' ;
			$totalAverage = round(($sum_arr/$count),2);
			
			
			//Collect average rank
			//call a function
			//$groupAverage[$regno]=$totalAverage;
			$avgT = getGroupedAverage($class,$session,$term);
			$rank_for = $regno;
			$rankt = getrank($avgT,$rank_for);

			//Get Terminal Subject Ranking by average




			//Students record for the term

			$ClassResultByRanking[] = array(
					'average' =>$totalAverage,					
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subjectStack,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'ca' => $ca,					
					'grade' =>getGrade($totalAverage),
					'position' =>$rankt,
					'comment1' =>getStaffComment1($regno, $term, $session,"Admin"),
					'comment2' =>getStaffComment1($regno, $term, $session,"Admin"));

		}
	}//
	arsort($ClassResultByRanking);
	return $ClassResultByRanking;
}

function getStudentRankingInClassByTerm($id,$class,$session,$term){

	// echo $id;
	// echo "<br>";
	// if (empty($class)){
	// 	echo "Class is empty";
	// }else if ($class==0){
	// 	echo "Class is 0";
	// 	echo $class;
	// }else if ($class==""){
	// 	echo "Class is spaced";
	// 	//print_r($classt);
	// }else{
	// 	echo "Class is valuable";
	// 	echo $class['classx'];
	// }
	
	// echo "<br>";
	// echo $session;
	// echo "<br>";
	// echo $term;
	// echo "<br>";
	//$students = array();
	$subject = getAllSubjects();
	// echo "Arrays of Subjects <br>";
	// print_r($subjectsu);
	// echo "<br>";
	$student = getStudentByClass($class);
	// echo "Arrays of Students <br>";
	// print_r($studentsu);
	// echo "<br>";
	$subjectStack = array();
	$TerminalResult = array();
	$totalAverage = '';
	$total='';
	$regno='';
	$studentid=$rankt='';
	$firstname=$firstname=$lastname='';
	$Subject=$avgT='';
	$count=$count1=$count2=$count3=0;
	$rank_for ='';
	$sum_arr=$sum_arr1=$sum_arr2=$sum_arr3 = 0;
	$ca ='';
	$weightageAverage=0;
	if(!empty($student)){
		foreach ($student as $stud) {
			$studentid = $stud['id'];
			$firstname = $stud['firstname'];
			$lastname = $stud['lastname'];
			$regno = $stud['regno'];
			$rank_for = $regno;
			if(!empty($subject)){
				foreach ($subject as $sub) {
					//get test1, test2, exam
					$Subject = $sub['subject'];
					$Test1 = getTest1($studentid,$class,$Subject,$session,$term);
					$Test2 = getTest2($studentid,$class,$Subject,$session,$term);
					$Exam = getExam($studentid,$class,$Subject,$session,$term);
					$Total = $Test1+$Test2+$Exam;
					$average = getAverage($studentid,$class,$Subject,$session,$term);

					///////////////////////////////////////////////
					//
					$subjectStack[$Subject] = $average;

				}
			}//
			
			$count = sizeof($subjectStack);
			$sum_arr = array_sum($subjectStack);
			// echo "Arrays of Subjects Stacks <br>";
			// echo "<br>";
			// print_r($subjectStack);
			
			//sum all the averages together
			// $count = sizeof($subjectStack);
			// $sum_arr = array_sum($subjectStack);
			// // foreach ($subjectStack as $av => $a) {
			// 	$total += $a;
			// }
			// $totalAverage = round(($total/$count),2);
			//$ca ='' ;
			$totalAverage = round(($sum_arr/$count),2);
			
			
			//Collect average rank
			//call a function
			//$groupAverage[$regno]=$totalAverage;
			$avgT = getGroupedAverage($class,$session,$term);
			$rank_for = $regno;
			$rankt = getrank($avgT,$rank_for);

			//Get Terminal Subject Ranking by average




			//Students record for the term

			$ClassResultByRanking[] = array(					
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subjectStack,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'ca' => $ca,
					'average' =>$totalAverage,
					'grade' =>getGrade($totalAverage),
					'position' =>$rankt);

		}
	}//

	if(!empty($ClassResultByRanking)){
		foreach ($ClassResultByRanking as $rank) {
			if($rank['id']==$id){
				return $rank['position'];
			}
			
		}

	}
}

function getGroupedAverage($class,$session,$term){
	$subjects = getAllSubjects();
	$students = getStudentByClass($class);
	$subjectStack = array();
	$TerminalResult = array();
	$groupAverage = array();
	$totalAverage = '';
	$total='';
	$regno='';
	$studentid='';
	$firstname=$firstname=$lastname='';
	$Subject='';
	$count='';
	$sum_arr = 0;

	if(!empty($students)){
		foreach ($students as $stud) {
			$studentid = $stud['id'];
			$firstname = $stud['firstname'];
			$lastname = $stud['lastname'];
			$regno = $stud['regno'];

			if(!empty($subjects)){
				foreach ($subjects as $sub) {
					//get test1, test2, exam
					$Subject = $sub['subject'];
					$Test1 = getTest1($studentid,$class,$Subject,$session,$term);
					$Test2 = getTest2($studentid,$class,$Subject,$session,$term);
					$Exam = getExam($studentid,$class,$Subject,$session,$term);
					$Total = $Test1+$Test2+$Exam;
					$average = getAverage($studentid,$class,$Subject,$session,$term);

					///////////////////////////////////////////////
					//
					$subjectStack[$Subject] = $average;

				}
			}//
			//sum all the averages together
			$count = sizeof($subjectStack);
			$sum_arr = array_sum($subjectStack);
			// foreach ($subjectStack as $avg => $av) {
			// 	$total += $av;
			// }
			// $totalAverage = round(($total/$count),2);
				$totalAverage = round(($sum_arr/$count),2);
			//Collect average rank
			//call a function
			$groupAverage[$regno]=$totalAverage;

		}
	}
	//print_r($groupAverage);
	return $groupAverage;
}

function getClassResultRankBySubjectByTerm($class,$subject,$session,$term){
	$ClassResultStack=array();$Total='';
	$student = getStudentByClass($class);
	$regno='';
	
	foreach ($student as $stud) {
		$studentid = $stud['id'];
		$firstname = $stud['firstname'];
		$lastname = $stud['lastname'];
		$regno = $stud['regno'];
		$Test1 = getTest1($studentid,$class,$subject,$session,$term);
		//echo $subject.'<br>';
		$Test2 = getTest2($studentid,$class,$subject,$session,$term);
		$Exam = getExam($studentid,$class,$subject,$session,$term);
		$Total = $Test1+$Test2+$Exam;
		$average = getAverage($studentid,$class,$subject,$session,$term);
		$grade = getGrade($average);

		//echo $regno.'-'.$average.'<br>';
		//echo "<br>";

		$ClassResultStack[$regno] =$average;
		
		}
		// foreach ($ClassResultStack as $r_n => $average) {
		// 	echo $r_n['DD8148'].'<br>';

		// }
		arsort($ClassResultStack);
		//print_r($ClassResultStack);
		// foreach ($ClassResultStack as $r_n => $average){
		// 	print_r(($r_n).'-'.($average));//[$regno].'<br>';
		// 	//print_r($r_n['DD8148']);
		// 	echo '<br>';
		// }

		$result = array();
		$ClassResultByRanking=array();
		$ranking ='';
		$rank ='';
		$pos = $real_pos = 0;
		$prev_score = -1;$Sno = 1;
		foreach ($ClassResultStack as $roll_n => $score) {
			//$studentid = $stud['id'];
			$firstname = getStudentFirstnameByRegNo($roll_n);
			$lastname = getStudentLastnameByRegNo($roll_n);
			$regno = $roll_n;
			$studentid = getStudentIdByRegNo($roll_n);
			$Test1 = getTest1($studentid,$class,$subject,$session,$term);
			$Test2 = getTest2($studentid,$class,$subject,$session,$term);
			$Exam = getExam($studentid,$class,$subject,$session,$term);
			$Total = $Test1+$Test2+$Exam;
			$average = getAverage($studentid,$class,$subject,$session,$term);
			$grade = getGrade($average);

		    $real_pos += 1;// Natural position.
		    
		    $pos = ($prev_score != $score) ? $real_pos : $pos;// If I have same score, I have same position in ranking, otherwise, natural position.
		    $ranking = OrdinalNumberSuffix($pos);
		    // $result[$roll_n] = array(
		    //                  "score" => $score, 
		    //                  "position" => $ranking, 
		    //                  "exam_no" => $roll_n
		    //                  );
		    $ClassResultByRanking[]= array(
		    		'average' =>$average,
					'Sno' => $Sno,
					'id' => $studentid,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'subject' => $subject,
					'class' => $class,
					'session' => $session,
					'term' => $term,
					'regno' => $regno,
					'test1' =>$Test1,
					'test2' =>$Test2,
					'exam' =>$Exam,
					'total' =>$Total,					
					'grade' =>$grade,
					'position' =>$ranking);
		    $prev_score = $score;// update last score.
		    $Sno++;
		}
		//$rank = $result[$roll_n];
	//return $ClassResult;
	arsort($ClassResultByRanking);
	return $ClassResultByRanking;

}


function getStudentByClassForSubjectScoreInput($class,$subject,$type){
	global $servr; 
	$student=array();
	$sid=$sregno=$sclass=$ssession=$numrows=$sub=$scr=$sterm='';
	$sql = "SELECT * FROM student WHERE class='$class'";
	$result = mysqli_query($servr,$sql);
	while ($row = mysqli_fetch_array($result)) {
					$sid = $row['studentid'];
					$sclass = $row['class'];
					$ssession = $row['session'];
					$sterm = $row['term'];
					$sregno = $row['regno'];

					$sql1 = "SELECT * FROM mark WHERE studentid='$sid' AND class='$sclass' AND session='$ssession' AND term='$sterm'";
					$result1 = mysqli_query($servr,$sql1);
					$numrows = mysqli_num_rows($result1);

					if($numrows>0){
						while($row1 = mysqli_fetch_array($result1)){
							print_r($row1) ;
							if((!empty($row1['subject'])) && (!empty($row1['score']))){

								$sub = $row1['subject'];
								$scr = $row1['score'];
							}
							
						}
						$student[] = array(
										'id' => $row['studentid'],
										'firstname' => $row['firstname'],
										'lastname' => $row['lastname'],
										'class' => $row['class'],
										'subject' => $sub,
										'session' => $row['session'],
										'term' => $row['term'],
										'score' => $scr,
										'status' => "UPDATING");
					}
					$sub = $scr = '';
					if($numrows<1){
						$student[] = array(
										'id' => $row['studentid'],
										'firstname' => $row['firstname'],
										'lastname' => $row['lastname'],
										'gender' => $row['gender'],
										'dateofbirth' => $row['dateofbirth'],
										'class' => $row['class'],
										'subject' => $sub,
										'session' => $row['session'],
										'term' => $row['term'],
										'regno' => $row['regno'],
										'score' => $scr,
										'status' => "NEW",
										'enrolled' =>$row['enrolled']);
					}
	
		
	}
	return $student;
}




 
/////////////////ACCESS LEVELS//////////////////////////
// $access1 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant","Security","Cheff","Guardian","Parent","Father","Mother","Student");

// $access2 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant","Security","Cheff");

// $access3 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant");

// $access4 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher");

// $access5 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar");

// $access6 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head");

// $access7 = array("Super-Admin","Admin-Principal","Admin-Proprietor");

// $access8 = array("Super-Admin","Admin-Principal");

// $access9 = array("Super-Admin");
function level1($role){
	$access1 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant","Security","Cheff","Guardian","Parent","Father","Mother","Student");
	if (in_array($role, $access1)){
		return true;
	}
}

function level2($role){
	$access2 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant","Security","Cheff");
	if (in_array($role, $access2)){
		return true;
	}
}

function level3($role){
	$access3 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher","Accountant");
	if (in_array($role, $access3)){
		return true;
	}
}

function level4($role){
	$access4 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar","Teacher");
	if (in_array($role, $access4)){
		return true;
	}
}

function level5($role){
	$access5 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head","Admin-Registrar");
	if (in_array($role, $access5)){
		return true;
	}
}

function level6($role){
	$access6 = array("Super-Admin","Admin-Principal","Admin-Proprietor","Admin-Head");
	if (in_array($role, $access6)){
		return true;
	}
}

function level7($role){
	$access7 = array("Super-Admin","Admin-Principal","Admin-Proprietor");
	if (in_array($role, $access7)){
		return true;
	}
}

function level8($role){
	$access8 = array("Super-Admin","Admin-Principal");
	if (in_array($role, $access8)){
		return true;
	}
}

function level9($role){
	$access9 = array("Super-Admin");
	if (in_array($role, $access9)){
		return true;
	}
}
?>