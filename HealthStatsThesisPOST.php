<!--PHP -->
<?php 
 
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

         }  
else  

         {

            echo "Great work!!";//display "Great work"

          }


    if(isset($_POST['submit'])){//submit form only after all fields have been entered

            //variables - registration i.e $name (column in table users) and $POST['name'] (name of variable in the actual form)
               $id=$_SESSION['user_id'];
              $date_taken = $_POST['date'];
              $weight=$_POST['weight'];
              $BMI=$_POST['bmi'];
              $blood_pressure=$_POST['blood_pressure'];
              $blood_glucose=$_POST['blood_glucose'];
              $waist=$_POST['waist'];

        
             

          $sql = "INSERT INTO healthstats (id, date_taken, weight, BMI, blood_pressure, blood_glucose, waist) VALUES('$id', '$date_taken', '$weight', '$BMI', '$blood_pressure', '$blood_glucose', '$waist')";
        
          //if connection works
                if ($conn->multi_query($sql) === TRUE) {

                  header("Location:HealthStatsThesis.php");
                   //echo "New records created successfully";//display this message

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