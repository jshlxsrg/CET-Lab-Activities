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
define('LABTITLE', 'Laboratory Acvtivity No. 10');
define('DESCRIPTION', 'Handling User Input - Dyanamic Page');
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
$links['lab10_home.php'] = 'Home';
$links['lab10_vision.php'] = 'Vision';
$links['lab10_mission.php'] = 'Mission';
$links['lab10_history.php'] = 'History';
echo '<table width=80% border=1>';
// navigation section
echo '<tr><td>';
foreach ($links as $key => $value)
echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
echo '</td></tr>';
// dynamic content
echo '<tr><td><br />';
if ( isset($_GET['page']) ) {
$page = $_GET['page'];
if (is_readable($page))
include_once($page);
else
echo 'File <strong>', $page, '</strong> not found!';
}
else {
reset($links);
include_once(key($links));
}
echo '<br /><br />';
echo '</td></tr>';
echo '</table>';

?>

    </div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
