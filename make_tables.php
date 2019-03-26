<?php
include('connect.php');


///CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS mark(
      markid bigint(4) NOT NULL AUTO_INCREMENT,
      studentid bigint(4) NOT NULL,
      fullname varchar(40) NOT NULL,
      class varchar(11) NOT NULL,
      subject varchar(30) NOT NULL,
      session varchar(9) NOT NULL,
      term varchar(3) NOT NULL,
      type varchar(6) NOT NULL,
      score varchar(3) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (markid))";
// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table mark created successfully<br>";
} else {
  echo "Error creating mark table: " . mysqli_error($servr).'<br>';
}

///CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS school(
      schoolid bigint(4) NOT NULL AUTO_INCREMENT,
      uid bigint(4) NOT NULL,
      schoolname varchar(50) NOT NULL,
      address varchar(50) NOT NULL,
      website varchar(50) NOT NULL,
      email varchar(50) NOT NULL,
      contact varchar(11) NOT NULL,
      current_year varchar(11) NOT NULL,
      current_term varchar(7) NOT NULL,
      logo varchar(6) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (schoolid))";
// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table school created successfully<br>";
} else {
  echo "Error creating school table: " . mysqli_error($servr).'<br>';
}


///CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS assignschool(
      assignid bigint(4) NOT NULL AUTO_INCREMENT,
      sid bigint(4) NOT NULL,
      toid bigint(4) NOT NULL,
      status varchar(10) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (assignid))";
// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table assignschool created successfully<br>";
} else {
  echo "Error creating assignschool table: " . mysqli_error($servr).'<br>';
}

///CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS student(
      studentid bigint(4) NOT NULL AUTO_INCREMENT,
      uid bigint(4) NOT NULL,
      sid bigint(4) NOT NULL,
      firstname varchar(40) NOT NULL,
      middlename varchar(40) NOT NULL,
      lastname varchar(40) NOT NULL,
      gender varchar(7) NOT NULL,
      dateofbirth varchar(10) NOT NULL,
      class varchar(11) NOT NULL,
      session varchar(9) NOT NULL,
      term varchar(3) NOT NULL,
      regno varchar(6) NOT NULL,
      username varchar(16) NOT NULL,
      password varchar(255) NOT NULL,
      email varchar(64) NOT NULL,
      phone varchar(32) NULL,
      degree varchar(32) NOT NULL,
      salary varchar(64) NOT NULL,
      address text NOT NULL,
      type varchar(15) NOT NULL,
      role varchar(15) NOT NULL,
      status varchar(15) NOT NULL,
      reason varchar(15) NOT NULL,
      enrolled varchar(10) NOT NULL,
      PRIMARY KEY (studentid))";
// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table student created successfully<br>";
} else {
  echo "Error creating student table: " . mysqli_error($servr).'<br>';
}
//photo(uid,location,created)
$sql = "CREATE TABLE IF NOT EXISTS photo(
      phid bigint(4) NOT NULL AUTO_INCREMENT,
      uid bigint(4) NOT NULL,
      location varchar(50) NOT NULL,
      created varchar(10) NOT NULL,
      PRIMARY KEY (phid))";

// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table photo created successfully<br>";
} else {
  echo "Error creating photo table: " . mysqli_error($servr).'<br>';
}
////////////////////////////////////////////////////////
$sql = "CREATE TABLE IF NOT EXISTS subject (
      subjectid bigint(4) NOT NULL AUTO_INCREMENT,
      -- uid
      uid bigint(4) NOT NULL,
      subject varchar(40) NOT NULL,
      PRIMARY KEY (subjectid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table subject created successfully<br>";
} else {
  echo "Error creating subject table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS assign_subject_to_student(
      subjectid bigint(4) NOT NULL AUTO_INCREMENT,
      -- uid
      uid bigint(4) NOT NULL,
      studentid bigint(4) NOT NULL,
      subject varchar(40) NOT NULL,
      classx varchar(15) NOT NULL,
      term varchar(10) NOT NULL,
      PRIMARY KEY (subjectid))";

// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table assign_subject_to_student created successfully<br>";
} else {
  echo "Error creating assign_subject_to_student table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS pick_subject_for_student (
      subjectid bigint(4) NOT NULL AUTO_INCREMENT,
      staffid bigint(4) NOT NULL,
      studentid bigint(4) NOT NULL,
      subject varchar(40) NOT NULL,
      classx varchar(15) NOT NULL,
      term varchar(10) NOT NULL,
      sessionx varchar(10) NOT NULL,
      PRIMARY KEY (subjectid))";

// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table assign_subject_to_student created successfully<br>";
} else {
  echo "Error creating assign_subject_to_student table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS staff_comment(
      staff_commentid bigint(4) NOT NULL AUTO_INCREMENT,
      studentid bigint(4) NOT NULL,
      staffid bigint(4) NOT NULL ,
      staff_comment varchar(40) NOT NULL,
      classx varchar(15) NOT NULL,
      term varchar(10) NOT NULL,
      sessionx varchar(10) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (staff_commentid))";

// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table staff_comment created successfully<br>";
} else {
  echo "Error creating staff_comment table: " . mysqli_error($servr).'<br>';
}

///CREATE TABLE-Used
$sql = "CREATE TABLE IF NOT EXISTS comment(
      commentid bigint(4) NOT NULL AUTO_INCREMENT,
      staffid bigint(4) NOT NULL,
      studentid bigint(4) NOT NULL,
      classid varchar(11) NOT NULL,
      termid varchar(3) NOT NULL,
      sessionid varchar(9) NOT NULL,
      comments varchar(200) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (commentid))";
// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table comment created successfully<br>";
} else {
  echo "Error creating comment table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS sessionx(
      sessionxid bigint(4) NOT NULL AUTO_INCREMENT,
      uid bigint(4) NOT NULL,
      sessionx varchar(9) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (sessionxid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table sessionx created successfully<br>";
} else {
  echo "Error creating sessionx table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS term(
      termid bigint(4) NOT NULL AUTO_INCREMENT,
      -- uid
      uid bigint(4) NOT NULL,
      term varchar(40) NOT NULL,
      period varchar(10) NOT NULL,
      PRIMARY KEY (termid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table term created successfully<br>";
} else {
  echo "Error creating term table: " . mysqli_error($servr).'<br>';
}

$sql = "CREATE TABLE IF NOT EXISTS classx(
      classxid bigint(4) NOT NULL AUTO_INCREMENT,
      -- uid
      uid bigint(4) NOT NULL,
      classx varchar(40) NOT NULL,
      -- date
      period varchar(10) NOT NULL,
      PRIMARY KEY (classxid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table classx created successfully<br>";
} else {
  echo "Error creating classx table: " . mysqli_error($servr).'<br>';
}

//security(id,username,password,type)
$sql = "CREATE TABLE IF NOT EXISTS security(
      securityid bigint(4) NOT NULL AUTO_INCREMENT,
      id bigint(4) NOT NULL,
      username varchar(40) NOT NULL,
      password varchar(256) NOT NULL,
      type varchar(40) NOT NULL,
      PRIMARY KEY (securityid))";


// Execute query
if (mysqli_query($servr,$sql)) {
  echo "Table security created successfully<br>";
} else {
  echo "Error creating security table: " . mysqli_error($servr).'<br>';
}

?>