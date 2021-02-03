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
define('LABTITLE', 'Laboratory Acvtivity No. 5');
define('DESCRIPTION', 'Functions and Control Structures - Magic Square');
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
      // CONTENT SECTION
      echo '<form action="" method="post">';
      echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
      echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
      echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
      echo '<input type="submit" value="Generate Magic Square"></td></tr>';
      echo '</table>';
      echo '</form>';
      if (count($_POST) > 0) {
      $n = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
      print_magicsquare($n);
      }
      function print_magicsquare($n) 
  {
    if ($n <= 3 and $n!= null){
        $n = 3;
    }elseif ($n%2 == 0 and $n!= 0){
        $n = $n + 1;
    }else{
        $n = $n;
    }
     
      $magicSquare;
      for ($i = 0; $i < $n; $i++)
          for ($j = 0; $j < $n; $j++)
              $magicSquare[$i][$j] = 0;
   
     
      $i = (int)$n - $n;
      $j = (int)$n / 2;
   
      for ($num = 1; $num <= $n * $n;)
      {
              
          if ($i == -1 && $j == $n) 
          {
              $j = $n-2;
              $i = 0;
          }
          else
          {

              if ($j >= $n)
                  $j = 0;
              if ($i >= $n)
                  $i = 0;
   
              if ($i < 0)
                  $i = $n-1;
              if ($j < 0)
                  $j = $n-1;
          }
          if ($magicSquare[$i][$j]) 
          {
              $i--;
              $j++;
              continue;
          }
          else
              $magicSquare[$i][$j] = $num++; 

          $j--; $i--; 
      }
      echo nl2br("The Magic Square for n = " . $n
          . ":\n    Sum of each row or column "
          . $n * ($n * $n + 1) / 2);

      echo '<table border=2 align = center>';
        for ($r=0, $i=0; $r<$n; $r++) {
        echo '<tr>';
        for ($c=0; $c<$n; $c++, $i++)
        echo '<td>' . $magicSquare[$r][$c] . '</td>';
        echo '</tr>';
        }
    echo '</table>';
   
      /* Print magic square
      echo nl2br("The Magic Square for n = " . $n
          . ":\n    Sum of each row or column "
          . $n * ($n * $n + 1) / 2);
           
      echo nl2br("\n\n");
      for ($i = 0; $i < $n; $i++)
      {
          for ($j = 0; $j < $n; $j++)
              echo $magicSquare[$i][$j] . " ";
          echo nl2br("\n");
      }*/
  }
?>

    </div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
