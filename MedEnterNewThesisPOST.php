
<!--PHP -->
<?php 
 //header("Location: http://localhost/CardioTool/MedEnterNewThesis.html");//redirects user to Login page after registration
 
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

             if(isset($_POST['submit'])){//submit form only after all fields have been entered   

            //variables - registration i.e $name (column in table users) and $POST['name'] (name of variable in the actual form)
              $id=$_SESSION['user_id'];
              $name=$_POST['name'];
              $dosage=$_POST['dosage'];
              $units=$_POST['units'];
              $start_date=$_POST['start_date'];
              $days=$_POST['days'];
              $time=$_POST['time_taken'];
              $notes=$_POST['notes'];

        
//
              $sql = "INSERT INTO meds (id, name, dosage, units, start_date, days, time, notes) VALUES ('$id', '$name', '$dosage', '$units', '$start_date','$days', '$time', '$notes')";
        
              //if connection works
                if ($conn->multi_query($sql) === TRUE) {

                   header("Location:MedSummaryThesis1.php");
                  // echo "New records created successfully";//display this message

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