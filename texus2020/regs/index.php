<!DOCTYPE html>  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Desk | Texus 2020</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="login-page">
  <div class="form">
  <!--
  <form class="register-form">
      <p>Event Name<input type="text"/></p>
      <p>Quantity<input type="text"/></p>
	  <p>Thank you</p>
	  <button>Thank You Have Fun!</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    -->
	<form class="login-form" method="post">
	   <fieldset> 
      <input type="text" id="data" name="email" placeholder="Enter Email Address"/>
	  <input type="text" id="data" name="phone" placeholder="Enter Phone Number"/>
      <button type="submit" name="submit">Make Entry</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      </fieldset>
    </form>
     <?php


DEFINE ('DB_USER', 'texus123');
DEFINE ('DB_PASSWORD', '/$pgv0XR<');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','texusdb');

$dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die('wrong password' . mysql_error());
mysql_select_db(DB_NAME) OR die("Database Error");

echo "<p>DONEEEEE</p>";
/*
$msg=""; 
if ( isset( $_POST['submit'] ) ) { 
      $email = $_POST['email']; 
	  $phone = $_POST['phone']; 
	 
	  $sql = "SELECT * FROM regs WHERE Email='$email' OR Phone=$phone";
        $cout=mysql_num_rows($sql);
        if($cout>0){
            $row=mysql_fetch_array($sql);
                if($row['type']=='admin')
                    $msg="Failed";
                else {
                    echo "<p>Success</p>";
                }
                }
}
else
    $msg="Login Failed......";
*/

?>
  
  </div>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
