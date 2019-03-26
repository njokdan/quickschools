<?php
$localhost = 'localhost';
$username = 'root';
$password = '';

$servr = mysqli_connect($localhost,$username,$password);
if($servr){
	echo "";
}
//Create database
$db_create = "CREATE DATABASE IF NOT EXISTS qschool";
$create_query = mysqli_query($servr,$db_create);
//test the query
if(!$create_query){
  echo "Error Creating database<br>";
}else{
  echo "";//"Database Created sucessfully<br>";
}
//select the database
$db_select = mysqli_select_db($servr,'qschool');
//test the database selection
if(!$db_select){
  echo "Error Selecting database<br>";
}else{
  echo "";//"Database Selected sucessfully<br>";
}






?>