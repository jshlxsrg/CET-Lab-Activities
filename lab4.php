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
define('LABTITLE', 'Laboratory Acvtivity No. 4');
define('DESCRIPTION', 'Functions and Control Structures - Number to words');
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
            $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
            if (($number < 1) or ($number > 999)) {
            if (count($_POST) > 0) {
            $words = 'Sorry, I can process 1 to 999 only!';
            }
            else {
            $words = '&nbsp;';
            }
            }
            else {
            $words = $number . ' in words is ' . ConvertToWords($number);
            }
            echo '<form action="" method="post">';
            echo '<table cellpadding=10 align= center border=3 style="border-collapse:collapse">';
            echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
            echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
            echo '<input type="submit" value="Convert to words"></td></tr>';
            echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
            echo '</table>';
            echo '</form>';

            

            function NumberToWords($number, $s) {
                $hundreds = array('hundred ', 'thousand ');
                $tens = array('','', 'twenty ','thirty ','forty ', 'fifty ', 'sixty ', 'seventy ', 'eighty ', 'ninety ');
                $ones = array(' ','one ','two ','three ', 'four ', 'five ', 'six ', 'seven ', 'eight ', 'nine ', 'ten ', 
                'eleven ', 'twelve ','thirteen ', ' fourteen ', 'fifteen ', 'sixteen ', ' seventeen ', 'eighteen ', 'nineteen ');
                $word = '';

                // complete the code here...
                if ($number > 19) 
                    { 
                        $word .= $tens[(int)($number / 10)]; 
                        $word .= $ones[$number % 10]; 
                    } 
                else
                    $word .= $ones[$number]; 
            
               
                if ($number != 0 ) 
                    $word .= $s; 
                
                return $word;
                
            }
            function ConvertToWords($number){
                $words = '';
                $words .= NumberToWords(((int)($number / 1000) % 100), "thousand "); 
                $words .= NumberToWords(((int)($number / 100) % 10), "hundred ");

                if ($number > 100 && $number % 100) 
                    $words .= "and "; 
            
    
                $words .= NumberToWords(($number % 100), ""); 
                return $words;
                
            }
        
 
		?>

	</div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
