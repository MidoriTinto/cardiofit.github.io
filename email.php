  <?php
     
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

   if(isset($_POST['submit'])){   

              $name=$_POST['name'];
              $surname=$_POST['surname'];
              $email=$_POST['email'];
              $password=$_POST['password'];
              $confirmed_pass=$_POST['cpassword'];
               
              $sql = "INSERT INTO Users (name, surname, email, password, confirmed_pass) VALUES('$name', '$surname', '$email', '$password','$confirmed_pass') ";
              //$result = mysqli_query($conn, $sql);

              //if connection works
        if ($conn->multi_query($sql) === TRUE) 
             
                      {
                          $to = '';
                          $subject = "Confirmation from TutsforWeb to $username";
                          $header = "Your Account with CardioFit";
                          $message .= "Hello! You have created an account with CardioFit";

                          $sentmail = mail($to,$subject,$message,$header);

                          echo 'great'

                  if($sentmail)
                    {
                        echo "Your Confirmation link Has Been Sent To Your Email Address.";
                      }
                         else
                               {
                                    echo "Cannot send Confirmation link to your e-mail address";
                                }
                      }
                    }

          mysqli_close($conn);
      ?> 


