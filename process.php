<?php
$fullname=$class=$subject=$subjecta=$session=$term=$type=$msg=$msgs=$dt=$Grade=$regno =$enrolled ='';
$Score=$Result=$score=$scorea=$classResult=$Sno=$termResult=$ClassResult=$studentid=$n=$Stud='';
$length =$code=$code1=$rank=$ranker=$firstname=$middlename=$lastname=$gender='';
$dateofbirth =$rank_for=$arrayt=$username=$password=$email=$phone=$degree=$salary=$address=$type=$role=$status=$reason='';

$UserName=$Password='';
$target_dir = "";
$target_file = "";
$content = "";
$uploadOk = 1;
$imageFileType = "";
$name=""; 
$email=""; 
$phone=""; 
$fname=""; 
$tmpName ="";
$fileSize ="";
$fileType = "";

$uid=$studreg=$class=$term=$acadyr=$comment=$staffrole="";


//$fullname,$class,$subject,$session,$term,$type,$score
if(isset($_POST['register'])){
	//$length = 4;
	$n = new RandomStringGenerator();
	//$code1 = $code->generateNumericString( $length );
	$firstname = clean($_POST['firstname']);
	$middlename = clean($_POST['middlename']);
	$lastname = clean($_POST['lastname']);
	$gender = clean($_POST['sex']);
	$dateofbirth = clean($_POST['dob']);
	$class = clean($_POST['class']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$username = clean($_POST['username']);
	$password = md5(clean($_POST['password']));
	$email = clean($_POST['email']);
	$phone = clean($_POST['phone']);
	$degree = clean($_POST['degree']);
	$salary = clean($_POST['salary']);
	$address = clean($_POST['address']);
	$type = clean($_POST['type']);
	$role = clean($_POST['role']);
	$status = "Active";
	$reason = "";
	//$enrolled = clean($_POST['enrolled']);
	$code =substr($firstname, 0,1).substr($lastname, 0,1).$n->generateNumericString(4);
	$regno = $code;

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$content = $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  	$fname=($_FILES['photo']['name']); 
  	$tmpName  = $_FILES['photo']['tmp_name'];
  	$fileSize = $_FILES['photo']['size'];
  	$fileType = $_FILES['photo']['type'];

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists. <br>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($fileSize > 500000) {
	    echo "Sorry, your file is too large. <br>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded. <br>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        // $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
	        // $query = mysqli_query($servr,$sql);
	        // if(!$query)
	        // {
	        //   echo "Values Not added <br>";
	        // }
	        // else
	        // {
	        //   echo "Values added <br>";
	        // }
	        echo "";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded. <br>";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been saved. <br>";
	        // echo "<br><img src='".$target_file."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'>  <br>";
	        // echo "Stored in: " . $target_file.' <br>';
	    } else {
	        echo "Sorry, there was an error uploading your file. <br>";
	    }
	}

	$msg = register($firstname,$middlename,$lastname,$gender,$dateofbirth,$class,$session,$term,$code,$username,$password,$email,$phone,$degree,$salary,$address,$type,$role,$status,$reason,$target_file);
}



if(isset($_POST['CreateSchoolInfo'])){
	if(isset($_SESSION['s_id'])){
		$uid = clean($_POST['address']);
	}	
	$schoolname = clean($_POST['schoolname']);
	$address = clean($_POST['address']);
	$website = clean($_POST['website']);
	$email = clean($_POST['email']);
	$phone = clean($_POST['phone']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$content = $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  	$fname=($_FILES['photo']['name']); 
  	$tmpName  = $_FILES['photo']['tmp_name'];
  	$fileSize = $_FILES['photo']['size'];
  	$fileType = $_FILES['photo']['type'];

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists. <br>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($fileSize > 500000) {
	    echo "Sorry, your file is too large. <br>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded. <br>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        // $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
	        // $query = mysqli_query($servr,$sql);
	        // if(!$query)
	        // {
	        //   echo "Values Not added <br>";
	        // }
	        // else
	        // {
	        //   echo "Values added <br>";
	        // }
	        echo "";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded. <br>";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been saved. <br>";
	        // echo "<br><img src='".$target_file."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'>  <br>";
	        // echo "Stored in: " . $target_file.' <br>';
	    } else {
	        echo "Sorry, there was an error uploading your file. <br>";
	    }
	}
	$msg = createSchoolInfo($uid,$schoolname,$address,$website,$email,$phone,$session,$term,$target_file);
}

if(isset($_POST['Save'])){
	$fullname = clean($_POST['name']);
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$type = clean($_POST['type']);
	$score = clean($_POST['score']);

	$msg = addScore($fullname,$class,$subject,$session,$term,$type,$score);
}

if(isset($_POST['Save_score'])){
	$studentid = clean($_POST['studentid']);
	$fullname = clean($_POST['name']);
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$type = clean($_POST['type']);
	$score = clean($_POST['score']);

	$msg = addScore($studentid,$fullname,$class,$subject,$session,$term,$type,$score);
}

if(isset($_POST['Save_score1'])){
	$studentid = clean($_POST['studentid']);
	$score = clean($_POST['score']);
	$fullname = getFullname($studentid);
	$class = $_SESSION['class_compute'];
	$subject = $_SESSION['subject_compute'];
	$session = $_SESSION['session_compute'];
	$term = $_SESSION['term_compute'];
	$type = $_SESSION['type_compute'];
	

	$msg = addScore($studentid,$fullname,$class,$subject,$session,$term,$type,$score);

	$Studt=getStudentByClass1($class);
}

if(isset($_POST['namer'])){
	//$Score = "";
	$fullname = clean($_POST['name']);
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$type = clean($_POST['type']);
	//$score = clean($_POST['score']);

	$Score = getTest($fullname,$class,$subject,$session,$term,$type,$score);
	echo $Score;
}

// if(isset($_POST['classr'])){
// 	//$Score = "";
// 	$fullname = clean($_POST['name']);
// 	$class = clean($_POST['class']);
// 	$subject = clean($_POST['subject']);
// 	$session = clean($_POST['session']);
// 	$term = clean($_POST['term']);
// 	$type = clean($_POST['type']);
// 	//$score = clean($_POST['score']);

// 	$Score = getTest($fullname,$class,$subject,$session,$term,$type,$score);
	
// }

if(isset($_POST['results'])){
	//$Score = "";
	$fullname = clean($_POST['name']);
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$type = clean($_POST['type']);
	//$score = clean($_POST['score']);

	//$Score = getTest($fullname,$class,$subject,$session,$term,$type,$score);
	$Result = getResult($fullname,$class,$subject,$session,$term,$type);
	//echo $Result;
}

if(isset($_POST['getstudent'])){
	$_SESSION['class_compute']=clean($_POST['class']);

	$_SESSION['subject_compute'] = clean($_POST['subject']);
	$_SESSION['type_compute'] = clean($_POST['type']);
	$_SESSION['term_compute'] = clean($_POST['term']);
	$_SESSION['session_compute'] = clean($_POST['session']);
	//$Stud=getStudentByClass(clean($_POST['class']));
	$Studt=getStudentByClass1($_SESSION['class_compute']);
	//print_r ($_SESSION['session_compute']);
}


if(isset($_POST['getallstudent'])){
	$class=clean($_POST['class']);
	$session = clean($_POST['session']);
	$_SESSION['class_record'] = $class;
	$_SESSION['session_record'] = $session;
	//$Stud=getStudentByClass(clean($_POST['class']));
	if(($class == "All") && ($session =="All")) {
		$Studall=getAllStudent();
	}else if(($class != "All") && ($session !="All")) {
		$Studall=getStudentByClassSession($class,$session);
	}else if(($class == "All") && ($session !="All")){
		//$Studall=getStudentByClass($class);
		$Studall=getAllStudent1($session);
	}else if(($class != "All") && ($session =="All")){
		$Studall=getStudentByClass($class);
		//$Studall=getStudentBySession($class,$session);
	}
	// else{
	// 	$Studall = "No Record";
	// }
	
	//print_r ($_SESSION['session_compute']);
}

if(isset($_POST['member'])){
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	$type = clean($_POST['type']);

	//$classResult = getClassResultByType($class,$subject,$session,$term,$type);
	$classResult = getClassResultBySubjectByType($class,$subject,$session,$term,$type);	
}

if(isset($_POST['getclass'])){
	$class=clean($_POST['class']);
	$subject=clean($_POST['subject']);
	$type=clean($_POST['type']);

	$Studs=getStudentByClassForSubjectScoreInput($class,$subject,$type);
}



if(isset($_POST['termer'])){
	$regno = clean($_POST['regno']);
	$class = clean($_POST['class']);
	//$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	//$type = clean($_POST['type']);
	if(!empty($regno)){
		$studentid = getStudentid($regno);
		//$classResult = getClassResultByType($class,$subject,$session,$term,$type);= getClassResultBySubjectByType($class,$subject,$session,$term,$type);
		echo $regno,$class,$session,$term;
		$termResult=getEachStudentResultByTerm($studentid,$class,$session,$term);
	}else{
		$termResult = '';
	}
	
	 
	
}

if(isset($_POST['tefrmer'])){
	$regno = clean($_POST['regno']);
	$class = clean($_POST['class']);
	//$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);
	//$type = clean($_POST['type']);
	$studentid = getStudentid($regno);
	//$classResult = getClassResultByType($class,$subject,$session,$term,$type);= getClassResultBySubjectByType($class,$subject,$session,$term,$type);
	$termResultByranking=getEachStudentResultByTerm($studentid,$class,$session,$term);
}

if(isset($_POST['addsubject'])){

	if(isset($_SESSION['s_id'])){
		$uid = clean($_SESSION['s_id']);
	}
	$name = clean($_POST['subject']);
	if(!empty($name)){
		$msg = addSubject($uid,$name);
		unset($_POST['subject']);
		unset($name);
	}
}

if(isset($_POST['rank'])){
	$class = clean($_POST['class']);
	$subject = clean($_POST['subject']);
	$session = clean($_POST['session']);
	$term = clean($_POST['term']);

	$rank = getClassResultRankBySubjectByTerm($class,$subject,$session,$term);
	// $i=0;
	// foreach ($rank as $ko => $va) {
	// 	# code...
	// 	// foreach ($va as $k) {
	// 	// 	# code...
	// 	// 	print_r($k);
	// 	// 	echo '<br>';
	// 	// }
	// 	echo $va['position'];
	// 	echo '<br>';
	// 	$i++;
	// }
}

if(isset($_POST['fetch_group'])){
	$class =clean($_POST['class']);
	//$subject = clean($_POST['subject']);
	$session =clean($_POST['session']);
	$term =clean($_POST['term']);

	$_SESSION['class_record'] = clean($_POST['class']);
	$_SESSION['term_record'] = clean($_POST['term']);
	$_SESSION['session_record'] = clean($_POST['session']);
	$ranker = getClassRankingByTerm($class,$session,$term);
	// $i=0;
	// foreach ($ranker as $ko => $va) {
	// 	# code...
	// 	// foreach ($va as $k) {
	// 	// 	# code...
	// 	// 	print_r($k);
	// 	// 	echo '<br>';
	// 	// }
	// 	echo $va['firstname'];
	// 	foreach (($va['subject']) as  $k => $v){
	// 		echo $v;
	// 		echo '<br>';
	// 	}
	// 	echo '<br>';
	// 	$i++;
	// }

}

if (isset($_POST['addclass'])){

	if(isset($_SESSION['s_id'])){
		$uid = clean($_SESSION['s_id']);
	}
	$name = clean($_POST['class']);
	if(!empty($name)){
		$msg = addClass($uid,$name);
		unset($_POST['class']);
		unset($name);
	}
	
}


//*********************************************/
//  			Adding Comment
//
//*********************************************/
if(isset($_POST['addcomment'])){
	$uid = clean($_POST['uid']);
	$studreg = clean($_POST['studreg']);
	$term = clean($_POST['term']);
	$acadyr = clean($_POST['acadyr']);
	$class = clean($_POST['class']);
	$comment = clean($_POST['comment']);

	$msg = addComment($uid, $studreg, $class, $term, $acadyr, $comment);

	// if(isset($_SESSION['class_record']) && isset($_SESSION['term_record']) && isset($_SESSION['session_record'])){

	// 	$ranker = getClassRankingByTerm($_SESSION['class_record'],$_SESSION['term_record'],$_SESSION['session_record']);

	// }
	
}

if(isset($_POST['updatecomment'])){
	$uid = clean($_POST['uid']);
	$studreg = clean($_POST['studreg']);
	$term = clean($_POST['term']);
	$acadyr = clean($_POST['acadyr']);
	$class = clean($_POST['class']);
	$comment = clean($_POST['comment']);

	$msg = updateComment($uid, $studreg, $class, $term, $acadyr, $comment);
}

if (isset($_POST['addPhoto'])){
	$uid = clean($_POST['uid']);
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$content = $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  	$fname=($_FILES['photo']['name']); 
  	$tmpName  = $_FILES['photo']['tmp_name'];
  	$fileSize = $_FILES['photo']['size'];
  	$fileType = $_FILES['photo']['type'];

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists. <br>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($fileSize > 500000) {
	    echo "Sorry, your file is too large. <br>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded. <br>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        // $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
	        // $query = mysqli_query($servr,$sql);
	        // if(!$query)
	        // {
	        //   echo "Values Not added <br>";
	        // }
	        // else
	        // {
	        //   echo "Values added <br>";
	        // }
	        addPhoto($uid,$target_file);
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded. <br>";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been saved. <br>";
	        // echo "<br><img src='".$target_file."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'>  <br>";
	        // echo "Stored in: " . $target_file.' <br>';
	    } else {
	        echo "Sorry, there was an error uploading your file. <br>";
	    }
	}
}

if (isset($_POST['updatePhoto'])){
	$uid = clean($_POST['uid']);
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$content = $target_file;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  	$fname=($_FILES['photo']['name']); 
  	$tmpName  = $_FILES['photo']['tmp_name'];
  	$fileSize = $_FILES['photo']['size'];
  	$fileType = $_FILES['photo']['type'];

    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists. <br>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($fileSize > 500000) {
	    echo "Sorry, your file is too large. <br>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded. <br>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        // $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
	        // $query = mysqli_query($servr,$sql);
	        // if(!$query)
	        // {
	        //   echo "Values Not added <br>";
	        // }
	        // else
	        // {
	        //   echo "Values added <br>";
	        // }
	        updatePhoto($uid,$target_file);
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded. <br>";
	        // echo "The file ". basename( $_FILES["photo"]["name"]). " has been saved. <br>";
	        // echo "<br><img src='".$target_file."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'>  <br>";
	        // echo "Stored in: " . $target_file.' <br>';
	    } else {
	        echo "Sorry, there was an error uploading your file. <br>";
	    }
	}
}


//*********************************************/
//  			Adding Session
//
//*********************************************/
if(isset($_POST['addsession'])){
	$uid = clean($_POST['uid']);
	$session = clean($_POST['session']);
	$msg = addSession($uid, $session);
}

// if(isset($_POST['updatecomment'])){
// 	$uid = clean($_POST['uid']);
// 	$studreg = clean($_POST['studreg']);
// 	$term = clean($_POST['term']);
// 	$acadyr = clean($_POST['acadyr']);
// 	$class = clean($_POST['class']);
// 	$comment = clean($_POST['comment']);

// 	$msg = updateComment($uid, $studreg, $class, $term, $acadyr, $comment);
// }

//*********************************************/
//  			Adding Term
//
//*********************************************/
if(isset($_POST['addterm'])){
	if(isset($_SESSION['s_id'])){
		$uid = clean($_SESSION['s_id']);
	}
	$name = clean($_POST['term']);
	if(!empty($name)){
		$msg = addTerm($uid,$name);
		unset($_POST['term']);
		unset($name);
	}
}

// if(isset($_POST['updatecomment'])){
// 	$uid = clean($_POST['uid']);
// 	$studreg = clean($_POST['studreg']);
// 	$term = clean($_POST['term']);
// 	$acadyr = clean($_POST['acadyr']);
// 	$class = clean($_POST['class']);
// 	$comment = clean($_POST['comment']);

// 	$msg = updateComment($uid, $studreg, $class, $term, $acadyr, $comment);
// }

//*********************************************/
//  			Adding Session
//
//*********************************************/
if(isset($_POST['addsession'])){
	$uid = clean($_POST['uid']);
	$class = clean($_POST['session']);
	$msg = addSession($uid, $class);
}

// if(isset($_POST['updatecomment'])){
// 	$uid = clean($_POST['uid']);
// 	$studreg = clean($_POST['studreg']);
// 	$term = clean($_POST['term']);
// 	$acadyr = clean($_POST['acadyr']);
// 	$class = clean($_POST['class']);
// 	$comment = clean($_POST['comment']);

// 	$msg = updateComment($uid, $studreg, $class, $term, $acadyr, $comment);
// }

//*********************************************/
//  			Adding Session
//
//*********************************************/
if(isset($_POST['addsession'])){
	$uid = clean($_POST['uid']);
	$class = clean($_POST['session']);
	$msg = addSession($uid, $class);
}

// if(isset($_POST['updatecomment'])){
// 	$uid = clean($_POST['uid']);
// 	$studreg = clean($_POST['studreg']);
// 	$term = clean($_POST['term']);
// 	$acadyr = clean($_POST['acadyr']);
// 	$class = clean($_POST['class']);
// 	$comment = clean($_POST['comment']);

// 	$msg = updateComment($uid, $studreg, $class, $term, $acadyr, $comment);
// }





// @session_start();

// function logged_in() {
//     if(!isset($_SESSION['user_id']) && isset($_COOKIE['user_id'])) {
//         $_SESSION['user_id'] = $_COOKIE['user_id'];
//     }
//     return isset($_SESSION['user_id']);
// }

// function logout() {
//     unset($_SESSION['user_id']);
//     setcookie("user_id", "", time() - 3600);
//     header("Location: http://".$_SERVER['HTTP_HOST']);
//     exit;
// }


// setcookie('user_id', $login , time()+86000);

// setcookie('user_id', '' , time()-86000);
?>