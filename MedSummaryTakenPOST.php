
<!--PHP -->
<?php 
 //header("Location: http://localhost/CardioTool/Welcome.html");//redirects user to Login page after registration
session_start();//starts the session 


 if(isset(($_SESSION['user_id'])){//submit form only after all fields have been entered

$id=$_SESSION['user_id'];

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

/*sql to create table
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(20) NOT NULL,
surname VARCHAR(30) NOT NULL,
email VARCHAR(15),
password VARCHAR(50),
confirmed_pass VARCHAR(50),
weight INT (4),
height INT (4),
BMI INT(4),
waist INT (4)
)";*/

    if(isset($_POST['submit'])){//submit form only after all fields have been entered

            //variables - registration i.e $name (column in table users) and $POST['name'] (name of variable in the actual form)
              
              $id=$_SESSION['user_id'];
              $medsID="SELECT medsID FROM meds WHERE id=$id";
              $name=$_POST['name'];
              $taken=$_POST['optradio'];
           
               


              $sql = "INSERT INTO notifications (medsID, name, taken, id) VALUES($medsID, $name, $taken, $id)"; 
        
              //if connection works
          if ($conn->multi_query($sql) === TRUE) {
           echo "New records created successfully";//display this message
            } else {//otherwise, display message below
          echo "Error: " . $sql . "<br>" . $conn->error;
          }

           $conn->close();//close connection
           }

        }
          else {
            header("Location:NotLoggedIn.html");
        }
        ?>