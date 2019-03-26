<?php
include('check_login.php');
include('connect.php');
include("RandomStringGenerator.php");
include('function.php');
include('process.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p><?php $dt = date("d-m-Y"); echo $msg." ".$dt; ?></p>

<div class="input_score" id="input_score1">
<p>Add Student[REGISTRATION]</p>
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td>First Name</td>
			<td>
				<input type="text" name="firstname" placeholder="First Name">
			</td>
		</tr>
		<tr>
			<td>Middle Name</td>
			<td>
				<input type="text" name="middlename" placeholder="Middle Name">
			</td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>
				<input type="text" name="lastname" placeholder="Last Name">
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<select name="sex">
					<option value=""></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Date Of Birth</td>
			<td>
				<input type="date" name="dob" placeholder="Date of Birth">
			</td>
		</tr>
		<tr>
			<td>Class</td>
			<td>
				<input type="text" name="class" placeholder="Current Class">
			</td>
		</tr>
		<tr>
			<td>Session</td>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
		</tr>
		<tr>
			<td>Term</td>
			<td>
				<input type="text" name="term" placeholder="Term e.g 1st/2nd/3rd">
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username" placeholder="username">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" >
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" name="email" placeholder="email e.g abc@abc.com">
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input type="text" name="phone" placeholder="Phone number">
			</td>
		</tr>
		<tr>
			<td>Degree</td>
			<td>
				<input type="text" name="degree" placeholder="Degree">
			</td>
		</tr>
		<tr>
			<td>Salary</td>
			<td>
				<input type="text" name="salary" placeholder="Salary e.g 50000">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<input type="text" name="address" placeholder="Address">
			</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>
				<select name="type">
					<option>Staff</option>
					<option>Non-Staff</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>role</td>
			<td>
				<select name="role">
					<option>Admin</option>
					<option>Super-Admin</option>
					<option>Admin-Principal</option>
					<option>Admin-Proprietor</option>
					<option>Admin-Head</option>
					<option>Teacher</option>
					<option>Accountant</option>
					<option>Security</option>
					<option>cheff</option>
					<option>Student</option>
				</select>
			</td>
		</tr>
		 
		<tr>
			<td colspan="2">
				<input type="submit" name="Register" value="Save" style="margin-left:90px;">
			</td>
		</tr>
	</table>
	
</form>
</div>

<div class="input_score" id="input_score1">
<p>Add Scores to student</p>
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td>
				<input type="text" name="name" placeholder="Full Name">
			</td>
		</tr>
		<tr>
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
		</tr>
		<tr>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="score" placeholder="Score">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="Save" value="Save">
			</td>
		</tr>
	</table>
	
</form>
</div>


<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td><input type="text" name="class" placeholder="Class"> </td>
			<td>
				<input type="submit" name="addclass" value="Save">
			</td>
		</tr>
		<tr>
			<td>
				<select name="cvalue">
					<option></option>
				</select>
			</td>
		</tr>
	</table>
	
</form>
</div>

<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td><input type="text" name="term" placeholder="Term"> </td>
			<td>
				<input type="submit" name="addterm" value="Save">
			</td>
		</tr>
		<tr>
			<td>
				<select name="cvalue">
					<option></option>
				</select>
			</td>
		</tr>
	</table>
	
</form>
</div>

<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td><input type="text" name="session" placeholder="Session"> </td>
			<td>
				<input type="submit" name="addsession" value="Save">
			</td>
		</tr>
		<tr>
			<td>
				<select name="cvalue">
					<option></option>
				</select>
			</td>
		</tr>
	</table>
	
</form>
</div>

<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td><input type="text" name="subject" placeholder="Subject"> </td>
			<td>
				<input type="submit" name="addsubject" value="Save">
			</td>
		</tr>
		<tr>
			<td>
				<select name="cvalue">
					<option></option>
				</select>
			</td>
		</tr>
	</table>
	
</form>
</div>

<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td>
				<select name="class">
					<option>Get Student By class</option>
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<input type="submit" name="getstudent" value="Fetch">
			</td>
		</tr>
		
	</table>
	
</form>

<?php if(!empty($Stud)) {?>
	<?php foreach ($Stud as $result ) {
		$fullname = $result['firstname']." ".$result['lastname'];
		$class = $result['class'];
		$session = $result['session'];
		$term = $result['term'];
		$studentid = $result['id'];
		?>
<div class="stscore">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<table>
			<tr>
				<td><label><?php echo $fullname; ?></label></td>
				<td>
					<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
					<input type="hidden" name="name" value="<?php echo $fullname; ?>">
					<input type="hidden" name="class" value="<?php echo $class; ?>">
					<input type="text" name="subject" placeholder="subject">
					<input type="hidden" name="session" value="<?php echo $session; ?>">
					<input type="hidden" name="term" value="<?php echo $term; ?>">
					<input type="text" name="type"  placeholder="type">
					<input type="text" name="score" size="3" placeholder="score">
				</td>
				<td>
					<input type="submit" name="Save_score" value="Save">
				</td>
			</tr>
		</table>
	</form>
	
</div>
<?php }

}  ?>
</div>

<div class="input_score" id="input_score1">
<!-- <p>Add Class</p> -->
<form  method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<table>
		<tr>
			<td>
				<select name="class">
					<option>Get Student By class</option>
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>
			<td>
				<input type="submit" name="getclass" value="Fetchclass">
			</td>
		</tr>
		
	</table>
	
</form>

<?php if(!empty($Studs)) {?>
	
<div class="stscore">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<table>
			<tr>
				<!-- <td><label><?php // echo $fullname; ?></label></td> -->
				<td>
					<!-- <input type="hidden" name="studentid" value="<?php // echo $studentid; ?>">
					<input type="hidden" name="name" value="<?php // echo $fullname; ?>"> -->
					<select name="studentid">
					<?php foreach ($Studs as $result ) {
					$fullname = $result['firstname']." ".$result['lastname'];
					$class = $result['class'];
					$session = $result['session'];
					$term = $result['term'];
					$studentid = $result['id'];
					$status = $result['status'];
					$score = $result['score'];
					?>	
					<option value="<?php echo $studentid; ?>"><?php echo $fullname.' '.$status.' '.$score; ?></option>
					
					<!-- <input type="text" name="status" value="<?php // echo $status; ?>"> -->
					<?php } ?>
					</select>
					<input type="hidden" name="class" value="<?php echo $class; ?>">
					<input type="hidden" name="session" value="<?php echo $session; ?>">
					<input type="hidden" name="term" value="<?php echo $term; ?>">
					<input type="text" name="type"  placeholder="type">
					<input type="text" name="subject" placeholder="subject">
					
				</td>
				<td>
					<input type="text" name="score" size="3" placeholder="score">
				</td>
				<td>
					<input type="submit" name="Save_score" value="Save">
				</td>
			</tr>
		</table>
	</form>
	
</div>
<?php

}  ?>
</div>

<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by:All</p>
	<div>
		<table>
		<tr>
			<td>
				<input type="text" name="name" placeholder="Full Name">
			</td>
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>



		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="namer" value="Name">
				<input type="submit" name="classr" value="Class">
				<input type="submit" name="subjectr" value="Subject">
				<input type="submit" name="sessionr" value="Session">
				<input type="submit" name="termr" value="Term">
				<input type="submit" name="typer" value="Type">
				<input type="submit" name="results" value="Result">
			</td>
		</tr>
		</table>
	</div>

</form>

<p><?php 
		
		
				echo $Score; 

if(!empty($Result)){?>
	<table>
		<?php foreach ($Result as $result ) {?>
				<thead>
					<tr>
						<th>Full Name</th>
						<th>Class</th>
						<th>Subject</th>
						<th>Session</th>
						<th>term</th>
						<th>1st</th>
						<th>2nd</th>
						<th>Exam</th>
						<th>Average</th>
						<th>Grade</th>
					</tr>
				</thead>
				<tr>
					<td><?php echo $result['fullname']; ?></td>
					<td><?php echo $result['class']; ?></td>
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['session']; ?></td>
					<td><?php echo $result['term']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
				</tr>

		<?php }?>
	</table><?php
}

?></p>

</div>

<!-- ------------------------------------ -->
<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by:Term[Individual Student/Subject]</p>
	<div>
		<table>
		<tr>
			<td>
				<input type="text" name="regno" placeholder="Reg. No">
			</td>
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
			
		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="termer" value="fetch">
				
			</td>
		</tr>
		</table>
	</div>

</form>

<p>

<?php if(!empty($termResult)){?>
<table>
	<tr>
		<td>Reg No.:<?php echo $termResult[0]['regno']  ?></td>
		<td>Name:<?php echo $termResult[0]['firstname'].' '.$termResult[0]['lastname']  ?></td>
		<td>Class:<?php echo $termResult[0]['class']  ?></td>
		<td>Session:<?php echo $termResult[0]['session']  ?></td>
		<td>Term:<?php echo $termResult[0]['term']  ?></td>
	</tr>
</table>
	<table>
		
				<thead>
					<tr>
						<th>Subject</th>
						<th>1st</th>
						<th>2nd</th>
						<th>Exam</th>
						<th>Average</th>
						<th>Grade</th>
						<th>Position</th>
					</tr>
				</thead>
	
		<?php foreach ($termResult as $result ) {?>
				<tr>
					
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['position']; ?></td>
				</tr>

		<?php }?>
	</table><?php
}

?></p>

</div>


<!-- ------------------------------------ -->
<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by:Session[individual Student/Subject]</p>
	<div>
		<table>
		<tr>
			<td>
				<input type="text" name="regno" placeholder="Reg. No">
			</td>
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
					
		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="sesioner" value="fetch">
				
			</td>
		</tr>
		</table>
	</div>

</form>

<p>

<?php if(!empty($termResult)){?>
<table>
	<tr>
		<td>Reg No.:<?php echo $termResult[0]['regno']  ?></td>
		<td>Name:<?php echo $termResult[0]['firstname'].' '.$termResult[0]['lastname']  ?></td>
		<td>Class:<?php echo $termResult[0]['class']  ?></td>
		<td>Session:<?php echo $termResult[0]['session']  ?></td>
		<td>Term:<?php echo $termResult[0]['term']  ?></td>
	</tr>
</table>
	<table>
		
				<thead>
					<tr>
						<th>Subject</th>
						<th>1st</th>
						<th>2nd</th>
						<th>Exam</th>
						<th>Average</th>
						<th>Grade</th>
					</tr>
				</thead>
	
		<?php foreach ($termResult as $result ) {?>
				<tr>
					
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
				</tr>

		<?php }?>
	</table><?php
}

?></p>

</div>




<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by a whole Class/subject</p>
	<div>
		<table>
		<tr>
			
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>



		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="member" value="Class">
			</td>
		</tr>
		</table>
	</div>

</form>

<div class="detail">
<p><?php $Sno=1;if(!empty($classResult)){?>
	<table>
		
				<thead>
					<tr>
						<th>S. No.</th>
						<th>Reg No.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Class</th>
						<th>Subject</th>
						<th>Session</th>
						<th>term</th>
						<th>Test 1</th>
						<th>Test 2</th>
						<th>Exam</th>
						<th>Total</th>
						<th>Avr</th>
						<th>Grade</th>
					</tr>
				</thead>
		
			<?php foreach ($classResult as $result ) {?>
				<tr>
					<td><?php echo $result['Sno']; ?></td>
					<td><?php echo $result['regno']; ?></td>
					<td><?php echo $result['firstname']; ?></td>
					<td><?php echo $result['lastname']; ?></td>
					<td><?php echo $result['class']; ?></td>
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['session']; ?></td>
					<td><?php echo $result['term']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['total']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
				</tr>

		<?php $Sno++; }?>
	</table><?php
}

?></p>

</div>

</div>
<!-------------------------------------- -->

<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by a whole Class/All subject/Term</p>
	<div>
		<table>
		<tr>
			
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>



		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="member" value="Class">
			</td>
		</tr>
		</table>
	</div>

</form>
<!--    --------------------------- -->

<th>Session</th><th>term</th><th>Class</th>
<?php $Subject = getAllSubjects(); ?>
<?php if(!empty($Subject)){?>
<table cellpadding="0" cellspacing="0" align="center">
		<?php    ?>
		<tr>
			<td class="rotate">Reg_No.</td>
			<td class="rotate">First_Name</td>
			<td class="rotate">Last_Name</td>
			<?php foreach ($Subject as $subject ) {?>
			<td class="rotate" style="width:20px;"><?php echo $subject['subject']; ?></td>
			<?php }?>
			<td class="rotate">Average</td>
			<td class="rotate">Grade</td>
		</tr>
	<tr>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
	</tr>
	<tr>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
	</tr>
	<tr>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
		<td>AA</td>
	</tr>
</table>
<?php }?>

<div class="detail">
	
<p><?php if(!empty($classResult)){?>
	<table>
		
				<thead>
					<tr>
						<th>Reg No.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Class</th>
						<th>Subject</th>
						<th>Session</th>
						<th>term</th>
						<th>Test 1</th>
						<th>Test 2</th>
						<th>Exam</th>
						<th>Total</th>
						<th>Avr</th>
						<th>Grade</th>
					</tr>
				</thead>
		
			<?php foreach ($classResult as $result ) {?>
				<tr>
					<td><?php echo $result['regno']; ?></td>
					<td><?php echo $result['firstname']; ?></td>
					<td><?php echo $result['lastname']; ?></td>
					<td><?php echo $result['class']; ?></td>
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['session']; ?></td>
					<td><?php echo $result['term']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['total']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
				</tr>

		<?php }?>
	</table><?php
}

?></p>

</div>

</div>


<!-------------------------------------- -->

<div class="input_score" id="input_score2">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>Select by a whole Class/All subject/Term</p>
	<div>
		<table>
		<tr>
			
			<td>
				<select name="class">
					<option value="Primary 1">Primary 1</option>
					<option value="Primary 2">Primary 2</option>
					<option value="Primary 3">Primary 3</option>
					<option value="Primary 4">Primary 4</option>
					<option value="Primary 5">Primary 5</option>
					<option value="Primary 6">Primary 6</option>
				</select>
			</td>
			<td>
				<select name="subject">
					<option></option>
					<option value="English">English</option>
					<option value="Mathematics">Mathematics</option>
					<option value="Agriculture">Agriculture</option>
					
				</select>
			</td>
			<td>
				<input type="text" name="session" placeholder="Session e.g 1999/2000">
			</td>
			<td>
				<select name="term">
					<option value="1st">First</option>
					<option value="2nd">Second</option>
					<option value="3rd">Third</option>
				</select>
			</td>
			<td>
				<select name="type">
					<option></option>
					<option value="Test1">Test1</option>
					<option value="Test2">Test2</option>
					<option value="Exam">Exam</option>
					
				</select>
			</td>



		</tr>
		<tr>
			<td colspan="6" align="center">
				<input type="submit" name="rank" value="Class">
				<input type="submit" name="fetch_group" value="Term">
			</td>
		</tr>
		</table>
	</div>

</form>
<!--    --------------------------- -->

<th>Session</th><th>term</th><th>Class</th>
<?php if(!empty($ranker)){?>
<?php $Subject = getAllSubjects(); ?>
<?php if(!empty($Subject)){?>
<table cellpadding="0" cellspacing="0" align="center">
		<?php    ?>
		<tr>
			<td class="rotate">Reg_No.</td>
			<td class="rotate">First_Name</td>
			<td class="rotate">Last_Name</td>
			<?php foreach ($Subject as $subject ) {?>
			<td class="rotate" style="width:20px;"><?php echo $subject['subject']; ?></td>
			<?php }?>
			<td class="rotate">Average</td>
			<td class="rotate">Grade</td>
			<td class="rotate">Position</td>
		</tr>

		<?php 
		// $i=0;
		foreach ($ranker as $ko => $va) { ?>
			<tr>
				<td><?php echo $va['regno']; ?></td>
				<td><?php echo $va['firstname']; ?></td>
				<td><?php echo $va['lastname']; ?></td>
					<?php foreach (($va['subject']) as  $k => $v){  ?>
					<td><?php echo $v; ?></td>
					<?php	} ?>
				<td><?php echo $va['average']; ?></td>
				<td><?php echo $va['grade']; ?></td>
				<td><?php echo $va['position']; ?></td>
			</tr>
		<?php } ?>
	
</table>
<?php } 
}?>

<div class="detail">
	
<p><?php if(!empty($rank)){?>
	<table>
		
				<thead>
					<tr>
						<th>Reg No.</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Class</th>
						<th>Subject</th>
						<th>Session</th>
						<th>term</th>
						<th>Test 1</th>
						<th>Test 2</th>
						<th>Exam</th>
						<th>Total</th>
						<th>Avr</th>
						<th>Grade</th>
						<th>Position</th>
					</tr>
				</thead>
		
			<?php foreach ($rank as $sol => $result ) {?>

				
				<tr>
					<td><?php echo $result['regno']; ?></td>
					<td><?php echo $result['firstname']; ?></td>
					<td><?php echo $result['lastname']; ?></td>
					<td><?php echo $result['class']; ?></td>
					<td><?php echo $result['subject']; ?></td>
					<td><?php echo $result['session']; ?></td>
					<td><?php echo $result['term']; ?></td>
					<td><?php echo $result['test1']; ?></td>
					<td><?php echo $result['test2']; ?></td>
					<td><?php echo $result['exam']; ?></td>
					<td><?php echo $result['total']; ?></td>
					<td><?php echo $result['average']; ?></td>
					<td><?php echo $result['grade']; ?></td>
					<td><?php echo $result['position']; ?></td>
				</tr>

		<?php }?>
	</table><?php
}

?></p>

</div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
  //$('.rotate').css('width', $('.rotate').width());
  $('.rotate').css('height', $('.rotate').width());
});
</script>
</body>
</html>