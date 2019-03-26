<?php
session_start();
if (!isset($_SESSION['s_id'])){
	header('location:index.php');
}
?>