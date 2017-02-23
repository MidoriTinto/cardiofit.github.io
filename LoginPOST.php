
<!--PHP -->
<?php 
// header("Location: OptionThesis2.html");//redirects user to options page after registration
 

session_start();//starts the session



error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


$servername = "localhost";
$username = "root";
$password = "Nadia1976";
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


    if(isset($_POST['submit'])){//checking that submit button is clicked

            //variables - login i.e $email (column in table users) and $POST['name'] (name of variable in the actual form)
            //mysqli_real_escape_string prevents someone attacking the database
              $email = mysqli_real_escape_string($conn,$_POST['email']);
              $password = mysqli_real_escape_string($conn,$_POST['password']);
              $confirmed_pass=mysqli_real_escape_string($conn,$_POST['confirmed_pass']);

              $sel_user = "SELECT users.id from users where email='$email' AND password='$password' AND confirmed_pass='$confirmed_pass'";
              $run_user = mysqli_query($conn, $sel_user);
              $check_user = mysqli_num_rows($run_user);



              if($check_user>0){

                $row = $run_user->fetch_assoc();


             // $_SESSION['user_email']=$email;
                $_SESSION['user_id']=$row["id"];
                header("Location: OptionThesis2.html");//redirects user to options page after registration
                //echo "You're logged in !";
              }
                else {
                        header("Location:WelcomeTryAgain.html");
                      //echo "<script>alert('Email or password is not correct, try again!')</script>";

                      }

        }

                //
 
        
        ?>