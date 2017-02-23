
<!--PHP -->
<?php 
 //header("Location: MedEnterNewThesis.html");//redirects user to Login page after registration
 
session_start();


if (isset($_SESSION['user_id'])) {


  $id=$_SESSION['user_id'];
//   echo $id;

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
              $id=$_SESSION['user_id'];
              $name=$_POST['name'];
              $surname=$_POST['surname'];
              $tel=$_POST['phone'];
              $email=$_POST['email'];
              
              
              $sql = "INSERT INTO my_contacts (name, surname, tel, email, id) VALUES ('$name', '$surname', '$tel', '$email','$id')";

              //if connection works
          if ($conn->multi_query($sql) === TRUE) {

            header("Location:ContactsSummaryThesis.php");
           //echo "New records created successfully";//display this message
            } else 

            {//otherwise, display message below

            echo "Error: " . $sql . "<br>" . $conn->error;
            }

       $conn->close();//close connection
     }
      else 
          {

            header("Location:NotLoggedIn.html");
          }
        }
?>
    