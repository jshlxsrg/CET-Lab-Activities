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
define('LABTITLE', 'Laboratory Acvtivity No. 9');
define('DESCRIPTION', 'Handling User Input - User Registration');
?>	

<?php
function generate_textbox($name, $value) {
return '<input type="text" name="' . $name . '" value="' . $value . '">';
}
function generate_password($name, $value) {
return '<input type="password" name="' . $name . '" value="' . $value . '">';
}
function generate_textarea($name, $value) {
return '<textarea name="' . $name . '">' . $value . '</textarea>';
}
function generate_checkbox($name) {
return '<input type="checkbox" name="' . $name . '">';
}
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
    $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
    $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
    $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
    $emailaddress = isset($_POST['txtEmailaddress']) ? $_POST['txtEmailaddress'] : '';
    $username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
    $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
    $confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';
    $comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : '';
    $agree = isset($_POST['txtAgree']) ? $_POST['txtAgree'] : '';

    if (count($_POST) == 0) 
    {
        echo '<form method="post" action="lab9.php">';
        echo '<table>';
        echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';

        echo '<tr><td>Firstname</td><td>',generate_textbox('txtFirstname', $firstname),'</td></tr>';
        echo '<tr><td>Middlename</td><td>',generate_textbox('txtMiddlename', $middlename),'</td></tr>';
        echo '<tr><td>Lastname</td><td>',generate_textbox('txtLastname', $lastname),'</td></tr>';
        echo '<tr><td>Emailaddress</td><td>',generate_textbox('txtEmailaddress', $emailaddress),'</td></tr>';
        echo '<tr><td>Username</td><td>',generate_textbox('txtUsername', $username),'</td></tr>';
        echo '<tr><td>Password</td><td>',generate_textbox('txtPassword', $password),'</td></tr>';
        echo '<tr><td>ConfirmPassword</td><td>',generate_textbox('txtConfirmPassword', $confirmpassword),'</td></tr>';
        echo '<tr><td>Comments</td><td>',generate_textarea('txtComments', $comments),'</td></tr>';
        echo '<tr><td>Agree</td><td>',generate_checkbox('txtLastname', $lastname),'</td></tr>';

        echo '<tr><td colspan=2>';
        echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
        echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
        echo '</td></tr>';
        echo '</table>';
        echo '</form>';
    }else 
    {
        echo '<table border=1 style="width:500px">';
        echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
        echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';
        echo '<tr><td>Firstname</td><td>', $firstname, '</td></tr>';
        echo '<tr><td>Middlename</td><td>', $middlename, '</td></tr>';
        echo '<tr><td>Lastname</td><td>', $lastname, '</td></tr>';
        echo '<tr><td>Emailaddress</td><td>', $emailaddress, '</td></tr>';
        echo '<tr><td>Username</td><td>', $username, '</td></tr>';
        echo '<tr><td>Password</td><td>', $password, '</td></tr>';
        echo '<tr><td>ConfirmPassword</td><td>', $confirmpassword, '</td></tr>';
        echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
        echo '<tr><td>Agree</td><td>', $agree, '</td></tr>';
        echo '</table>';
}

?>

    </div>

<footer>
  <?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?>
</footer>

</body>
</html>
