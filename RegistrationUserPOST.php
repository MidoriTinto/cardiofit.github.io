
<!--PHP -->
<?php 



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

    echo "Great work!!";//display "Great work"

          }


    if(isset($_POST['submit'])){//submit form only after all fields have been entered

            //variables - registration i.e $name (column in table users) and $POST['name'] (name of variable in the actual form)
              $name=$_POST['name'];
              $surname=$_POST['surname'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              $confirmed_pass=$_POST['cpassword'];
               


              $sql = "INSERT INTO Users (name, surname, email, password, confirmed_pass) VALUES('$name', '$surname', '$email', '$password','$confirmed_pass'); ";
        
              //if connection works
          if ($conn->multi_query($sql) === TRUE) {
           echo "New records created successfully";//display this message
            } else {//otherwise, display message below
          echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $conn->close();//close connection
           }

           header("Location: Welcome.html");//redirects user to Login page after registration
        ?>