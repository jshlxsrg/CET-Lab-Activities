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
define('LABTITLE', 'Laboratory Acvtivity No. 3');
define('DESCRIPTION', 'Working with Data Types and Operators');
$myinteger = 10;
$myfloat = 10.57;
$mystring = '10 apples';
$myboolean = TRUE;
$mynull = NULL;
$myarray = array(1,2,3);
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
        <li><a href="lab9.php">Handling User Input - User Registration</a></li>
        <li><a href="lab10.php">Handling User Input - Dynamic Page</a></li>
      </ul>
    </nav>
  </div>
</div>
	<div class = "content">
		<?php
			echo '<table width="80%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>PHP Data Types</strong></td></tr>';
			echo '<tr><td>1a. $myinteger</td><td>',var_dump($myinteger),'</td></tr>';
			echo '<tr><td>1b. $myfloat</td><td>',  var_dump($myfloat),'</td></tr>';
			echo '<tr><td>1c. $mystring</td><td>', var_dump($mystring),'</td></tr>';
			echo '<tr><td>1d. $myboolean</td><td>',var_dump($myboolean),'</td></tr>';
			echo '<tr><td>1e. $mynull</td><td>',   var_dump($mynull),'</td></tr>';
			echo '<tr><td>1f. $myarray</td><td>',  var_dump($myarray),'</td></tr>';
			echo '</table>'
		?>
		<?php
			error_reporting(0);
			echo '<table width="80%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>PHP Arithmetic Operators</strong></td></tr>';
			echo '<tr><td>2a. $myinteger</td><td>', var_dump($myinteger + 10),'</td></tr>';
			echo '<tr><td>2b. $myinteger</td><td>', var_dump($myinteger - 5),'</td></tr>';
			echo '<tr><td>2c. $myinteger</td><td>', var_dump($myinteger * 2),'</td></tr>';
			echo '<tr><td>2d. $myinteger</td><td>', var_dump($myinteger / 3),'</td></tr>';
			echo '<tr><td>2e. $myboolean</td><td>', var_dump($myboolean + 1),'</td></tr>';
			echo '<tr><td>2f. $mystring</td><td>',  var_dump($mystring * 2),'</td></tr>';
			echo '</table>'	
		?>
		<?php
			echo '<table width="80%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>PHP Bitwise Operators</strong></td></tr>';
			echo '<tr><td>3a. $myinteger</td><td>', var_dump($myinteger & 8),'</td></tr>';
			echo '<tr><td>3b. $myinteger</td><td>', var_dump($myinteger | 8),'</td></tr>';
			echo '<tr><td>3c. $myinteger</td><td>', var_dump($myinteger << 1),'</td></tr>';
			echo '<tr><td>3d. $myinteger</td><td>', var_dump($myinteger >> 1),'</td></tr>';
			echo '</table>'
		?>
		<?php
			echo '<table width="80%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>PHP Comparison Operators</strong></td></tr>';
			echo '<tr><td>4a. $myinteger</td><td>', var_dump($myinteger == 10),'</td></tr>';
			echo '<tr><td>4b. $myinteger</td><td>', var_dump($myinteger > 10),'</td></tr>';
			echo '<tr><td>4c. $myinteger</td><td>', var_dump($myinteger >= 10),'</td></tr>';
			echo '<tr><td>4d. $myinteger</td><td>', var_dump($myinteger < 20),'</td></tr>';
			echo '<tr><td>4e. $myinteger</td><td>', var_dump($myinteger <= 20),'</td></tr>';
			echo '<tr><td>4f. $myinteger</td><td>', var_dump($myinteger == $mystring),'</td></tr>';
			echo '<tr><td>4g. $myinteger</td><td>', var_dump($myinteger === $mystring),'</td></tr>';
			echo '</table>'
		?>
		<?php
			echo '<table width="80%" border=1 style="border-collapse: collapse;">';
			echo '<tr><td colspan=2><strong>PHP Logical Operators</strong></td></tr>';
			echo '<tr><td>5a. $myinteger</td><td>', var_dump($myinteger >= 10 and $myinteger <= 20), '</td></tr>';
			echo '<tr><td>5b. $myinteger</td><td>', var_dump($myinteger == 10 or $myinteger == 20), '</td></tr>';
			echo '<tr><td>5c. $myinteger</td><td>', var_dump($myinteger == 10 xor $myinteger == 20), '</td></tr>';
			echo '</table>'
		?>

	</div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
