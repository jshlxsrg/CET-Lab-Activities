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
define('LABTITLE', 'Laboratory Acvtivity No. 8');
define('DESCRIPTION', 'Array Manipulations - Word Counter');
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
  $text = (isset($_POST['text'])) ? $_POST['text'] : '';
  echo '<form method="post">';
  echo 'Enter text:<br />';
  echo '<textarea name="text" style="width:500px">';
  echo $text;
  echo '</textarea><br />';
  echo '<input type=submit value="Process">&nbsp;';
  echo '<input type=reset>&nbsp;';
  echo '</form>';
  $text = preg_replace('/[^a-zA-Z0-9 ]/','',trim($text));
  
  // No 1. Add at least 10 color values to array $colors
  $colors =['#00CCFF','#5F9EA0','#DEB887','#FFE4C4','#7FFFD4','#8A2BE2', '#696969','#9400D3','#DAA520','#ADD8E6','#FFFACD']; 
  if ($text <> '') {
  // No. 2. Convert the $text to lowercase and assign to $text
  $text = strtolower($text);
  // No. 3. Explode $text into array and assign to $allwords
  $allwords = explode(' ', $text);
  // No. 4. Remove duplicate items and assign to $uniquewordlist
  $uniquewordlist = array_unique($allwords);
  // No. 5. sort the array $uniquewordlist
  asort($uniquewordlist);
  // No. 6. Check the first element of $uniquewordlist if equal to space
  if ($uniquewordlist[0] == '') {
  // No. 7. Remove the first element from $uniquewordlist
  $deleteditem = array_shift($uniquewordlist);
  }
  foreach ($uniquewordlist as $word)
  $counter[$word] = 0;
  $totalwords = 0;
  foreach ($allwords as $word) {
  if ($word != '') {
  $counter[$word]++;
  $totalwords++;
  }
  }
  echo '<table border=1 style="width:500px">';
  echo '<tr><td colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
  echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
  $i=1;
  foreach ($uniquewordlist as $word) {
  // No. 8. Get the current element of array $colors (IAP function)
  $color = current($colors);
  $length = number_format($counter[$word] / $totalwords * 100.00,2);
  echo '<tr>';
  echo '<td>',$i, '.</td>';
  echo '<td>', $word, '</td>';
  echo '<td>', $counter[$word],'</td>';
  echo '<td style="background:',$color,'">',$length,'%</td>';
  echo '</tr>';
  // No. 9. Move the internal array pointer of $colors to next element
  next($colors);
  if (current($colors) == false) {
  // No. 10. Reset internal array pointer of $colors
  reset($colors);
  }
  $i++;
  }
  echo '</table>';
  }
?>

    </div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
