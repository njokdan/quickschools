<!-- <!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<title>Report | Page</title>
		<link rel="stylesheet" href="report.css">
	</head>
	<body> -->

		
	<?php if(!empty($termResult)){?>		
	<div class="container">	 
		<div class="report">
			<!-- <div class="part" id="head">
				
			</div> -->
			<!-- <div class="part" id="logo">
				<img src="images/mobile.png">
			</div> -->
			<div class="part" id="school_detail">
				<?php if(isset($_SESSION['s_sid'])){ ?>

			
					<img src="<?php echo getSchoolLogo($_SESSION['s_sid']);?>">
					<p><h3><span class="info"><?php echo getSchoolName($_SESSION['s_sid']); ?></span></h3></p>
					<p><strong><span class="info"><?php echo getSchoolAddress($_SESSION['s_sid']); ?></span></strong></p>
					<p><strong><span class="info"><?php echo getSchoolWebsite($_SESSION['s_sid']); ?></span><span class="info"><?php echo getSchoolEmail($_SESSION['s_sid']); ?></span></strong></p>
					<p><strong><span class="info"><?php echo getSchoolContact($_SESSION['s_sid']); ?></span></strong></p>

				<?php	} ?>
			</div>
			<!-- <div class="ruler"></div> -->
			<div class="part" id="student_bio">
				<table class="biodata">
					<tr>
						<td>Full Name:</td>
						<td><?php echo $termResult[0]['firstname'].' '.$termResult[0]['lastname'];  ?></td>
						<td rowspan="5" class="pics"> <img src="images/ceo.jpg"></td>
						<!-- <td></td>
						<td></td> -->
					</tr>
					<tr>
						<td>Reg. No:</td>
						<td><?php echo $termResult[0]['regno'];  ?></td>
					</tr>
					<tr>
						<td>Class:</td>
						<td><?php echo $termResult[0]['class'];  ?></td>
						<!-- <td></td> -->
						<!-- <td></td>
						<td></td> -->
					</tr>
					<tr>
						<td>Term:</td>
						<td><?php echo $termResult[0]['term'];  ?></td>
						<!-- <td></td> -->
						<!-- <td></td>
						<td></td> -->
					</tr>
					<tr>
						<td>Session:</td>
						<td><?php echo $termResult[0]['session'] ; ?></td>
						<!-- <td></td> -->
						<!-- <td></td>
						<td></td> -->
					</tr>
				</table>
				
			</div>
			<div class="part" id="result_info">
				<table class="result_data">
					<!-- <caption><h3>Performance Report</h3></caption> -->
					<thead>
						<tr><th colspan="8">Results</th></tr>
						<tr>
							<th>S/No.</th>
							<th>Subjects</th>
							<th>1st Test</th>
							<th>2nd Test</th>
							<th>Exam</th>
							<th>Average</th>
							<th>Grade</th>
							<th>Position</th>
						</tr>
					</thead>
					<tbody>
                    <?php $tg=$sn=1; foreach ($termResult as $result ) {?>
                        <tr>
                          <td><?php echo $sn; ?></td>
                          <td><?php echo $result['subject']; ?></td>
                          <td><?php echo $result['test1']; ?></td>
                          <td><?php echo $result['test2']; ?></td>
                          <td><?php echo $result['exam']; ?></td>
                          <td><?php echo $result['average'];$tg+=$result['average']; ?></td>
                          <td><?php echo $result['grade']; ?></td>
                          <td><?php echo $result['position']; ?></td>
                        </tr>

                    <?php $sn++;}?>
                    </tbody>

				</table>
				
			</div>
			<div class="part" id="remark">
					<table class="rem">
						<tr>
							<td>Total Average:</td>
							<td><?php echo $tg;?></td>
							<td>Position in Class:</td>
							<td><?php echo $grader;//echo getStudentRankingInClassByTerm(getStudentId($termResult[0]['regno']),$termResult[0]['class'],$termResult[0]['session'],$termResult[0]['term']); ?></td>
						</tr>
					</table>

			</div>
			<!-- <h3 class="com">Comments</h3> -->
			<div class="part" id="comment_area">
				<table class="comments">
					<tr>
						<td>Class Teacher's Comment:</td>
						<td> <?php echo $termResult[0]['comment1']; ?></td>
						<td>Date: <?php echo $termResult[0]['created1']; ?></td>
					</tr>
					<tr>
						<td>Principal's Comment:</td>
						<td> Sati<?php echo $termResult[0]['comment2']; ?></td>
						<td>Date: <?php echo $termResult[0]['created2']; ?></td>
					</tr>
				</table>
				<p><strong><span class="info">Status: </span></strong><span class="info">Promoted</span>
				<strong><span class="info">Signed:</span></strong><span class="info">_____________</span></p>
			</div>
			<div class="part" id="benchmark">
				<table class="bench">
					<tr>
						<th colspan="3">Benchmarks</th>
					</tr>
					<tr>
						<th>Grade</th>
						<th>Range</th>
						<th>Remarks</th>
					</tr>
					<tr>
						<td>A</td>
						<td>80 - 100</td>
						<td>Excellent</td>
					</tr>
					<tr>
						<td>B</td>
						<td>70 - 79</td>
						<td>Very Good</td>
					</tr>
					<tr>
						<td>C</td>
						<td>60 - 69</td>
						<td>Good</td>
					</tr>
					<tr>
						<td>D</td>
						<td>50 - 59</td>
						<td>Average</td>
					</tr>
					<tr>
						<td>E</td>
						<td>40 - 49</td>
						<td>Pass</td>
					</tr>
					<tr>
						<td>F</td>
						<td>0 - 39</td>
						<td>Fail</td>
					</tr>
				</table>
			</div>
			<!-- <div class="part" id="foot">
				
			</div> -->
		</div>
	</div>
	<?php } ?>
	<!-- </body>
</html>