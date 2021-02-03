<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
define('NAME', 'JOSHUA ALEXIS URAG');
define('STUDENTNUMBER', '2018-01629-MN-0');
define('ADDRESS', 'LUZON AVENUE QUEZON CITY');
define('EMAILADDRESS', 'joshuaurag13@gmail.com');
define('CONTACTNUMBER', '09957425276');
define('WEBADDRESS', 'abcd' );
define('LABTITLE', 'Laboratory Acvtivity No. 2');
define('DESCRIPTION', 'Creating Basic PHP Script');
$school = 'POLYTECHNIC UNIVERISTY OF THE PHILIPPINES';
$course = 'BACHELOR OF SCIENCE IN COMPUTER ENGINEERING';
$yearlevel = '3RD YEAR';
$dateofbirth = 'JANUARY 9, 2000';
$gender = 'MALE';
?>	
<title><?php echo LABTITLE; ?> </title>
<header>
  <?php echo NAME;?>
</header>
<div class = "container">
  <div class = "section">
    <nav>
      <ul>
        <li><a href="lab1.php">Hello World</a></li>
        <li><a href="lab2.php">Creating Basic PHP Script</a></li>
        <li><a href="lab3.php">Working with Data Types and Operators</a></li>
        <li><a href="lab4.php">Functions and Control Structures - Number to words</a></li>
        <li><a href="lab5.php">Functions and Control Structures - Magic Square</a></li>
        <li><a href="lab6.php">String Functions in PHP</a></li>
        <li><a href="lab7.php">Regular Expression</a></li>
        <li><a href="lab8.php">Array Manipulations - Word Counter</a></li>
        <li><a href="lab9.php">Lab 9</a></li>
        <li><a href="lab10.php">Lab 10</a></li>
        <li><a href="lab11.php">Lab 11</a></li>
        <li><a href="lab12.php">Lab 12</a></li>
        <li><a href="lab13.php">Lab 13</a></li>
        <li><a href="lab14.php">Lab 14</a></li>
        <li><a href="lab15.php">Lab 15</a></li>
        <li><a href="lab16.php">Lab 16</a></li>
      </ul>
    </nav>
  </div>
</div>
  
  <div class = "content">
    <?php
      echo '<table width="80%" border=1 style="border-collapse: collapse;">';
      echo '<tr><td colspan=2><strong>My Academic Information</strong></td></tr>';
      echo '<tr><td>School</td><td>', $school, '</td></tr>';
      echo '<tr><td>Course</td><td>', $course, '</td></tr>';
      echo '<tr><td>Year Level</td><td>', $yearlevel, '</td></tr>';
      echo '<tr><td>Date of Birth</td><td>', $dateofbirth, '</td></tr>';
      echo '<tr><td>Sex</td><td>', $gender, '</td></tr>';
      echo '</table>'
      ?>
  </div>


<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
