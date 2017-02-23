<?php

  session_start();


  if (!isset($_SESSION['user_id'])) {
      header("Location:NotLoggedIn.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CardioFit - My Contacts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="loginThesis1.css" rel="stylesheet" type="text/css">-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
  <!-- Bootstrap -->
   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/css/loginThesis1.css" type = "text/css">

  <!-- Optional theme 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
  <style>

table{
  font-family: "Courier";
  font-size: 14px;   
  width: 98%;
}


table, th, td {
     border: 1px solid black;
     text-align: center;
}

th{
background-color: #4f909e;
color:white;
padding:5px;
}
td{
  padding:2px;

}

</style>


    </head>

    <body>
      <!--collapsable navigation bar-->
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
          <a class="navbar-brand" href="#">CardioFit</a></div><!--set up brand on one side-->
            <div class="collapse navbar-collapse" id="myNavbar">
                 <ul class="nav navbar-nav">
                      <li class="active" style:"color:#ffffff"><a href="OptionThesis2.html">Home</a></li><!--home: takes me to a screen with options-->
                      <li><a href="DiaryUnderConstruction.html">Diary</a></li><!--Diary will take me to the diet section-->
                      <li class="dropdown"><!--dropdown menu corresponding to the MEDS sections-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">MEDS<span class="caret"></span></a>
                        <ul class="dropdown-menu"><!--dropdown will show me 2 options:enter new, and my meds-->
                           <li><a style="color: #000000" href="MedSummaryTaken.php">Today</a></li>
                           <li><a style="color: #000000" href="MedEnterNewThesis.html">Enter New</a></li>
                           <li><a style="color: #000000" href="MedTakenPOSTonly.php">My Meds</a></li>
                        </ul><!--end of list-->
                      </li>
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Health Stats<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a style="color: #000000" href="HealthStatsThesis.html">Enter new</a></li>
                              <li><a style="color: #000000" href="HealthStatsThesis.php">My Health Stats</a></li>
                              <li><a style="color: #000000" href="ReportOptions.html">Progress</a></li>
                          </ul> 
                      </li>  
                     <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notifications<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                             <li> <a style="color: #000000" href="#">Reminders</a></li>
                             <li><a style="color: #000000" href="ContactsAddNewThesis1.html">Contacts - Enter New</a></li>
                             <li><a style="color: #000000" href="ContactsSummaryThesis.php">MyContacts</a></li>
                          </ul>  
                     </li>   
                     <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">General Info<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                             <li> <a  style="color: #000000" href="GeneralInfo.html">NHS choices</a></li>
                        </ul> 
                     </li>  
                    
                    </ul>
                      <ul class="nav navbar-nav navbar-right"> <!--navigation bar on the right which shows sign up and login-->
                          <li><a href="LogoutPOST.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                      </ul><!--ends navigation bar on the right which shows sign up and login-->
              </div><!--ends collapse navbar-->
         </div><!--ends navbar-->
      </nav><!--end of bar navigation-->

 
     <div class="container-fluid">
          <div class="row" style="background-color: #EEFAFB;">                              
                <ul class="pager"><!--set up pager buttons-->
                  <div class="col-xs-6 col-md-6">
                      <h2 class="pull-left"> My Contacts </h2>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <div class="pull-right">
                      
                  </div>
                </div>              
                </ul><!--Add will be going to the next page - will take me to EnterNEW-->
          </div><!--ends orange block-->
      </div><!-- ends orange container-->
      <div class="container">
        <br>
      </div>
<div class="container-fluid" style="margin-left:30px">
   <div class="row">
    <div class="table-responsive">
    
    
     <?php

      $id=$_SESSION['user_id'];
      $servername = "";
      $username = "root";
      $password = "";
      $dbname = "thesis_db";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }

      $sql = "SELECT contactID, name, surname, tel, email FROM my_contacts WHERE id= $id";
      $result = mysqli_query($conn, $sql);

      if ($result-> num_rows > 0) {
          // output data of each row
      echo"<table><tr><th>ID</th><th>Name</th><th>Surname</th><th>Telephone</th><th>Email</th></th>";

      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["contactID"]. " </td><td>" . $row["name"]. " " . " </td><td>" . $row["surname"]. " " . " </td><td> " . $row["tel"]. " " .  " </td><td>" . $row["email"]. " " ."</td></tr>";
        } echo"</table>";
        } else {
          echo "0 results";
        }

          mysqli_close($conn);
      ?> 
    </div>
  </div>
</div>

  <ul class="pager"><!--set up pager buttons-->
                                        <li class="previous"><a href="OptionsThesis1.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                                        <li class="next"><a href="ContactsAddNewThesis1.html"><span class="glyphicon glyphicon-plus"></span>Add New</a></li>
                      </ul><!--Add will be going to the next page - will take me to EnterNEW-->
              </div>
          </div>
        </div>
          
        </div>
      <!--starts orange block-->

      <!--starts footer within a container-->
        <!--start container-fluid 2-->      
<div class="container-fluid" style:"margin-top:300px">
       <div class="row" style="background-color:#eee;" >
            <footer class="footer pull-right">
                <p class"pull-left"> Created by DdeStegmann</p>
            </footer>
        </div>
</div><!--ends container-fluid 2-->
    
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>    
    </div>
    
  </body>
</html>