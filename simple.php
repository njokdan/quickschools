<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
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


$servr = mysqli_connect($localhost,$username,$password);
if($servr){
  echo "Server Connected successfully <br>";
}
//Create database
$db_create = "CREATE DATABASE IF NOT EXISTS emp_database";
$create_query = mysqli_query($servr,$db_create);
//test the query
if(!$create_query){
  echo "Error Creating database<br>";
}else{
  echo "Database Created sucessfully <br>";//"<br>";
}
//select the database
$db_select = mysqli_select_db($servr,'emp_database');
//test the database selection
if(!$db_select){
  echo "Error Selecting database<br>";
}else{
  echo "";//"Database Selected sucessfully<br>";
}

//Create table if not exist
$sql = "CREATE TABLE IF NOT EXISTS employees(
      empid bigint(4) NOT NULL AUTO_INCREMENT,
      name varchar(40) NOT NULL,
      email varchar(125) NOT NULL,
      phone varchar(30) NOT NULL,
      filename varchar(100) NOT NULL,
      filetype varchar(10) NOT NULL,
      filesize varchar(10) NOT NULL,
      content text NOT NULL,      
      PRIMARY KEY (empid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table employees created successfully<br>";
} else {
  echo "Error creating employees table: " . mysqli_error($servr).'<br>';
}

// if(isset($_POST['add'])){
//     //This is the directory where images will be saved 
// $target = "images/"; 
//     if(!is_dir($target)) mkdir($target);
//  $target= $target . basename( $_FILES['photo']['name']); 

// //This gets all the other information from the form 
// $name=$_POST['username']; 
// $email=$_POST['email']; 
// $phone=$_POST['phone']; 
// $fname=($_FILES['photo']['name']); 
// $tmpName  = $_FILES['photo']['tmp_name'];
// $fileSize = $_FILES['photo']['size'];
// $fileType = $_FILES['photo']['type'];



// //process the file
// $fp      = fopen($tmpName, 'r');
// $content = fread($fp, filesize($tmpName));
// $content = addslashes($content);
// fclose($fp);

// if(!get_magic_quotes_gpc()){
// $fname = addslashes($fname);}

// // Connects to your Database 
// // require_once 'login.php';
// // $db_server=mysqli_connect($db_hostname,$db_username,$db_password);

// // $db_server=mysqli_connect("localhost","root","");

// // if(!$db_server) die("Unable to connect to MySQL" .mysql_error());

// // mysqli_select_db($db_server,"emp_database")
// // or die("Unable to connect to database" .mysql_error()); 




// //select the database
// $db_select = mysqli_select_db($servr,'emp_database');
// //test the database selection
// if(!$db_select){
//   echo "Error Selecting database<br>";
// }else{
//   echo "";//"Database Selected sucessfully<br>";
// }
// //Writes the information to the database 
// // mysqli_query("INSERT INTO `employees` VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')") ; 
// try {
//     $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
//     $query = mysqli_query($servr,$sql);
//  } catch (Exception $e) {
//    echo mysqli_error($servr);
//    echo "<br>";
//    echo $e;
//  } 
 

//   if(!$query)
//   {
//     echo "Values Not added";
//   }
//   else
//   {
//     echo "Values added";
//   }
//  //Writes the photo to the server 
//  if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) { 

//  //Tells you if its all ok 
// echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
// echo "<br><img src='".$target."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'> ";
//        } 
//   else { 

//          //Gives and error if its not 
//  echo "Sorry, there was a problem uploading your file."; 
//     } 

// }
?> 


<?php
// if(isset($_POST['add'])){
  //This gets all the other information from the form 
  // $name=$_POST['username']; 
  // $email=$_POST['email']; 
  // $phone=$_POST['phone']; 
  // $fname=($_FILES['photo']['name']); 
  // $tmpName  = $_FILES['photo']['tmp_name'];
  // $fileSize = $_FILES['photo']['size'];
  // $fileType = $_FILES['photo']['type'];

  //This is the directory where images will be saved 
//   $target = "images/"; 
//       if(!is_dir($target)) mkdir($target);
//    // $target= $target . basename( $_FILES['photo']['name']); 

//   $allowedExts = array("gif", "jpeg", "jpg", "png");
//   $temp = explode(".", $_FILES["photo"]["name"]);
//   $extension = end($temp);

//   if ((($_FILES["photo"]["type"] == "image/gif")
//   || ($_FILES["photo"]["type"] == "image/jpeg")
//   || ($_FILES["photo"]["type"] == "image/jpg")
//   || ($_FILES["photo"]["type"] == "image/pjpeg")
//   || ($_FILES["photo"]["type"] == "image/x-png")
//   || ($_FILES["photo"]["type"] == "image/png"))
//   && ($_FILES["photo"]["size"] < 20000)
//   && in_array($extension, $allowedExts)) {
//     if ($_FILES["photo"]["error"] > 0) {
//       echo "Return Code: " . $_FILES["photo"]["error"] . "<br>";
//     } else {
//       // echo "Upload: " . $_FILES["photo"]["name"] . "<br>";
//       // echo "Type: " . $_FILES["photo"]["type"] . "<br>";
//       // echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " kB<br>";
//       // echo "Temp file: " . $_FILES["photo"]["tmp_name"] . "<br>";
//       $target= $target . basename( $_FILES['photo']['name']);
//       // if (file_exists("upload/" . $_FILES["photo"]["name"])) {
//       if (file_exists($target)) {
//         echo $_FILES["photo"]["name"] . " already exists. ";
//       } else {
//         move_uploaded_file($_FILES["photo"]["tmp_name"],$target);

//         //Save into database
//         $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
//         $query = mysqli_query($servr,$sql);
//         if(!$query)
//         {
//           echo "Values Not added";
//         }
//         else
//         {
//           echo "Values added";
//         }

//         //Responses after saving
//         echo "<br><img src='".$target."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'> ";
//         echo "Stored in: " . $target;
//         // move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
//         // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];

//       }
//     }
//   } else {
//     echo "Invalid file";
//   }
// }

////////////////////////

// Check if image file is a actual image or fake image
if(isset($_POST["add"])) {
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$content = $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $name=$_POST['username']; 
  $email=$_POST['email']; 
  $phone=$_POST['phone']; 
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
        $sql = "INSERT INTO `employees`(name,email,phone,filename,fileType,fileSize,content) VALUES ('$name', '$email', '$phone', '$fname','$fileType','$fileSize','$content')";
        $query = mysqli_query($servr,$sql);
        if(!$query)
        {
          echo "Values Not added <br>";
        }
        else
        {
          echo "Values added <br>";
        }
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded. <br>";
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been saved. <br>";
        echo "<br><img src='".$target_file."' height='100' width='100' style='border-radius:50%;padding:15px;border:2px solid white;'>  <br>";
        echo "Stored in: " . $target_file.' <br>';
    } else {
        echo "Sorry, there was an error uploading your file. <br>";
    }
}
?> 

<script>
   function previewFile(){
       var preview = document.querySelector('img'); //selects the query named img
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


      <form enctype="multipart/form-data" action="simple.php" method="POST"> 
      Name: <input type="text" name="username"><br> 
      E-mail: <input type="text" name = "email"><br> 
      Phone: <input type="text" name = "phone"><br> 
      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
      Photo: <input type="file" name="photo" onchange="previewFile()"><br>
      <img src="" height="100" width="100" alt="Image preview..." style="border-radius:50%;">
      <input type="submit" value="Add" name="add" >
       
      </form>




