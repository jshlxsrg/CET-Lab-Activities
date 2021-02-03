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
define('LABTITLE', 'Laboratory Acvtivity No. 6');
define('DESCRIPTION', 'String Functions in PHP');
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
     $string = isset($_POST['string']) ? $_POST['string'] : ' ';
     function convert($string){
       $split = explode(" ", $string);
       foreach($split as $key => $like){
         echo '*';
         echo $like, '*<br>';
       }
     };
     echo '<form method=post action="">';
     echo '<h1>String Functions in PHP</h2>';
     echo '<input type="text" name="string" value="', $string, '" size=100><br /><br />';
     echo '<input type="submit" value="Apply Functions">&nbsp;';
     echo '<input type="reset" value="Reset"><br />';
     echo '</form>';

        echo '<table border=2 align = center>';
        echo '<tr><td>1.</td><td>Original Value of String</td>';
        echo '<td>*', $string, '*</td></tr>';
        echo '<tr><td>2.</td><td>Number of characters</td>';
        echo '<td>*', strlen($string), '*</td></tr>';
        echo '<tr><td>3.</td><td>Number of words</td>';
        echo '<td>*', str_word_count($string), '*</td></tr>';
        echo '<tr><td>4.</td><td>First character to uppercase </td>';
        echo '<td>*', ucfirst($string), '*</td></tr>';
        echo '<tr><td>5.</td><td>First character of each word to uppercase </td>';
        echo '<td>*', ucwords($string), '*</td></tr>';
        echo '<tr><td>6.</td><td>To lowercase </td>';
        echo '<td>*', strtolower($string), '*</td></tr>';
        echo '<tr><td>7.</td><td>To uppercase </td>';
        echo '<td>*', strtoupper($string), '*</td></tr>';
        echo '<tr><td>8.</td><td>Without leading spaces </td>';
        echo '<td>*', ltrim($string), '*</td></tr>';
        echo '<tr><td>9.</td><td>Without trailing spaces </td>';
        echo '<td>*', rtrim($string), '*</td></tr>';
        echo '<tr><td>10.</td><td>Without leading and trailing spaces </td>';
        echo '<td>*', trim($string), '*</td></tr>';
        echo '<tr><td>11.</td><td>MD5 Value of string</td>';
        echo '<td>*', md5($string), '*</td></tr>';
        echo '<tr><td>12.</td><td>Base64 Value of string</td>';
        echo '<td>*', base64_encode($string), '*</td></tr>';
        echo '<tr><td>13.</td><td>First 16 characters</td>';
        echo '<td>*', substr($string, 0, 16), '*</td></tr>';
        echo '<tr><td>14.</td><td>Last 4 characters</td>';
        echo '<td>*', substr($string, -4), '*</td></tr>';
        echo '<tr><td>15.</td><td>4 characters starting from the 20th position</td>';
        echo '<td>*', substr($string, 20, 4), '*</td></tr>';
        echo '<tr><td>16.</td><td>Postion of the word "guide"</td>';
        echo '<td>*', var_dump(strpos($string,'guide')), '*</td></tr>';
        echo '<tr><td>17.</td><td>Position of the word "UE"</td>';
        echo '<td>*', var_dump(strpos($string, 'ue')), '*</td></tr>';
        echo '<tr><td>18.</td><td>"HTML" word in uppercase</td>';
        echo '<td>*',strtoupper(substr($string, 20, 4)), '*</td></tr>';
        echo '<tr><td>19.</td><td>"INPUT" word in uppercase </td>';
        echo '<td>*',strtoupper(substr($string, 30, 6)), '*</td></tr>';
        echo '<tr><td>20.</td><td>Strings converted to array </td>';
        echo'<td>*',convert($string), '*</td></tr>';
       

        
        
        echo '</table>';
?>

    </div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
