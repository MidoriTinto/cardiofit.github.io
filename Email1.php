

<!--PHP -->
<?php 
 //header("Location: MedEnterNewThesis.html");//redirects user to Login page after registration
 
session_start();


if (isset($_SESSION['user_id'])) {


  $id=$_SESSION['user_id'];
//   echo $id;
//           
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


$servername = "";
$username = "root";
$password = "";
$dbname = "thesis_db";


$conn = new mysqli ($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)//if connection error
         {

    die ("Connection failed: " . $conn->connect_error);//then drop connection

         }  else  

         {

    echo "Hooray!!";//display "Great work"

          }

if ($submit){}
  $email_check=mysql_query("SELECT * FROM users WHERE email='".$email."'");
  $count = mysqli_num_rows($email_check);

 if ($count !=0)  {

    $random = rand(72891, 91729);
    $new_password = $random;
    $email_password = $new_password;
    $new_password=md5($new_password);

    mysql_query("update users set password='".$new_password."' WHERE email='".$email."'");

$subject = "New Password";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
mail($email, $subject,$txt,$headers);
echo "Your password has been emailed to you";
}
else {
  echo"Email does not exist!";

}
}
?>
