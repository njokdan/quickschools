<?php

//Format bytes with PHP – B, KB, MB, GB, TB, PB, EB, ZB, YB converter
/*Simple PHP function that formats the bytes to the desired form. Possible unit options are:

    Byte (B)
    Kilobyte (KB)
    Megabyte (MB)
    Gigabyte (GB)
    Terabyte (TB)
    Petabyte (PB)
    Exabyte (EB)
    Zettabyte (ZB)
    Yottabyte (YB)
Function takes three parameter: (bytes mandatory, unit optional, decimals optional)

  */

function byteFormat($bytes, $unit = "", $decimals = 2) {
	$units = array('B' => 0, 'KB' => 1, 'MB' => 2, 'GB' => 3, 'TB' => 4, 
			'PB' => 5, 'EB' => 6, 'ZB' => 7, 'YB' => 8);

	$value = 0;
	if ($bytes > 0) {
		// Generate automatic prefix by bytes 
		// If wrong prefix given
		if (!array_key_exists($unit, $units)) {
			$pow = floor(log($bytes)/log(1024));
			$unit = array_search($pow, $units);
		}
	
		// Calculate byte value by prefix
		$value = ($bytes/pow(1024,floor($units[$unit])));
	}

	// If decimals is not numeric or decimals is less than 0 
	// then set default value
	if (!is_numeric($decimals) || $decimals < 0) {
		$decimals = 2;
	}

	// Format output
	return sprintf('%.' . $decimals . 'f '.$unit, $value);
  }

///////////////////////////////////////////////////////////////////////////

echo byteFormat(4096, "B").'<br>';
echo byteFormat(8, "B", 2).'<br>';
echo byteFormat(1, "KB", 5).'<br>';
echo byteFormat(1073741824, "B", 0).'<br>';
echo byteFormat(1073741824, "KB", 0).'<br>';
echo byteFormat(1073741824, "MB").'<br>';
echo byteFormat(1073741824).'<br>';
echo byteFormat(1073741824, "TB", 10).'<br>';
echo byteFormat(1099511627776, "PB", 6).'<br>';

//////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////
/*
PHP: Calculate Real Differences Between Two Dates or Timestamps
I was using simple function to calculate difference between two dates and timestamps until I noticed, it’s not working correctly in long intervals. It’s very easy to calculate difference between two timestamps in seconds, but it’s much more complicated print difference in human readable format. The Internet can be found in a wide range of ways to do this thing, but as a rule they use a fixed amount of seconds for the year and the month. So if we calculate year with using 365 or 365.25 days and month using 30 or 31 then the difference is not accurate, because of leap years, DST (Daylight Saving Time) and so on.

Because of this problem, I decided to make a function (at least in the short testing) to return the right kind of differences between the UNIX timestamps and dates in human readable format. This function uses PHP strtotime function to calculate real differences and can handle leap years and DST. This function can also return Twitter like about texts with precision parameter.
PHP dateDiff function for calculating real differences between dates and UNIX timestamps

*/
///////////////////////////////////////////////////
// Set timezone
  date_default_timezone_set("UTC");

  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }

    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }

    // Set up intervals and diffs arrays
    $intervals = array('year','month','day','hour','minute','second');
    $diffs = array();

    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }
 
      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }
    
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
        break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
        // Add s if value is not 1
        if ($value != 1) {
          $interval .= "s";
        }
        // Add value and interval to times array
        $times[] = $value . " " . $interval;
        $count++;
      }
    }

    // Return string with times
    return implode(", ", $times);
  }





//////////////////////////////////////////////////////

echo dateDiff("2010-01-26", "2004-01-26") . "\n <br>";
echo dateDiff("2006-04-12 12:30:00", "1987-04-12 12:30:01") . "\n <br>";
echo dateDiff("now", "now +2 months") . "\n";
echo dateDiff("now", "now -6 year -2 months -10 days") . "\n <br>";
echo dateDiff("2009-01-26", "2004-01-26 15:38:11") . "\n <br>";



//UNIX
echo dateDiff(time(), time()-1000000, 1) . "\n";
echo dateDiff(time(), time()-1000000, 3) . "\n";
echo dateDiff(time(), time()-1000000, 6) . "\n";


//Converting text format back to UNIX timestamp example
$time1 = time();
$time2 = $time1-10000000;
echo $diff = dateDiff($time1, $time2) . "\n";
echo $time1 . "\n";
echo strtotime(" +".$diff, $time2) . "\n";




//////////////////////////////////////////////////////

//function addOrdinalNumberSuffix($num)

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


$students = array(1201=>94, 1203=>94, 1200=>91, 1205=>89, 1209=>83, 1206=>65, 1202=>41, 1207=>38,1208=>37, 1204=>37,1210=>94, 1211=>55, 1212=>77, 1213=>99, 1214=>88, 1215=>97);
arsort($students);// It orders high to low by value. You could avoid this with a simple ORDER BY clause in SQL.

$result = array();
$rating ='';
$pos = $real_pos = 0;
$prev_score = -1;
foreach ($students as $exam_n => $score) {
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

//$desired = 1207;
//print_r($result);

?>
<?php
$rank_for='';
$students = array(1201=>94, 1203=>94, 1200=>91, 1205=>89, 1209=>83, 1206=>65, 1202=>41, 1207=>38,1208=>37, 1204=>37,1210=>94, 1211=>55, 1212=>77, 1213=>99, 1214=>88, 1215=>97);
$arrayt = $students;
$rank_for = 1202;
echo "<br>";
echo "me";
echo getrank($arrayt,$rank_for);
echo "me";

function getrank($arrayed,$rank_for){
  arsort($arrayed);// It orders high to low by value. You could avoid this with a simple ORDER BY clause in SQL.

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

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// foreach ($result as $rk) {
// echo "Student " . $result[$desired]["exam_no"] . ", position: " . $result[$desired]["position"] . " and score: ". $result[$desired]["score"].'<br>';

// 	echo "Student " . $rk["exam_no"] . ", position: " . $rk["position"] . " and score: ". $rk["score"].'<br>';

// }

?>
<table>
	<thead>
		<th>Student[Reg No.]</th>
		<th>Score</th>
		<th>Position</th>
	</thead>
	<tbody>
	<?php foreach ($result as $rk) {?>
		<tr>
			<td><?php echo $rk["exam_no"];?></td>
			<td><?php echo $rk["score"];?></td>
			<td><?php echo $rk["position"];?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

</body>
</html>

<?php

for ($i = 1; $i <= 10000; $i++){
  echo OrdinalNumberSuffix($i) . "\t";
  if ($i % 25 == 0) {
    echo "\n <br>";
  }
}



?>