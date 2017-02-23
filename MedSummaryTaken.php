<?php

  session_start();


  if (!isset($_SESSION['user_id'])) {
      header("Location:NotLoggedIn.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CardioFit - Enter New Med</title>
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
  width:100%;  
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
                      <li class="active" style:"color:#ffffff"><a href="/OptionThesis2.html">Home</a></li><!--home: takes me to a screen with options-->
                      <li><a href="/DiaryUnderConstruction.html">Diary</a></li><!--Diary will take me to the diet section-->
                      <li class="dropdown"><!--dropdown menu corresponding to the MEDS sections-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">MEDS<span class="caret"></span></a>
                        <ul class="dropdown-menu"><!--dropdown will show me 2 options:enter new, and my meds-->
                           <li><a style="color: #000000" href="/MedSummaryTaken.php">Today</a></li>
                           <li><a style="color: #000000" href="/MedEnterNewThesis.html">Enter New</a></li>
                           <li><a style="color: #000000" href="/MedTakenPOSTonly.php">My Meds</a></li>
                        </ul><!--end of list-->
                      </li>
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Health Stats<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a style="color: #000000" href="/HealthStatsThesis.html">Enter new</a></li>
                              <li><a style="color: #000000" href="/HealthStatsThesis.php">My Health Stats</a></li>
                              <li><a style="color: #000000" href="/ReportOptions.html">Progress</a></li>
                          </ul> 
                      </li>  
                     <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notifications<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                             <li> <a style="color: #000000" href="#">Reminders</a></li>
                             <li><a style="color: #000000" href="/ContactsAddNewThesis1.html">Contacts - Enter New</a></li>
                             <li><a style="color: #000000" href="/ContactsSummaryThesis.php">MyContacts</a></li>
                          </ul>  
                     </li>   
                     <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">General Info<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                             <li> <a  style="color: #000000" href="/GeneralInfo.html">NHS choices</a></li>
                        </ul> 
                     </li>  
                    
                    </ul>
                      <ul class="nav navbar-nav navbar-right"> <!--navigation bar on the right which shows sign up and login-->
                          <li><a href="/LogoutPOST.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                      </ul><!--ends navigation bar on the right which shows sign up and login-->
              </div><!--ends collapse navbar-->
         </div><!--ends navbar-->
      </nav><!--end of bar navigation-->

 <div class="container">
<br>
</div>
     <!--Jumbotron-->
<div class="container">
<br>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="jumbotron">
               <img class="jumbotronwidth " align="center" width="200" height="136" alt="img-responsive" src="/Heart-Healthy.png">
                 <h2 align="center">My Meds</h2>
                <p></p>
                <div></div>
                <!--<p><a href="/Welcome.html" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-plus"></i>Add New</a>
                </p>-->
              <!--</p>-->
            </div><!--ends jumbotron-->
        </div><!--ends col-->
        <!--starts col 2-->
        <div class="col-md-6">
                          <h2> Today </h2>
                          <hr>
                <form class="form-horizontal" role="form" name="entermed" id="entermed" action="/MedSummaryTakenPOST.php" method="POST">
                      

                      <div class="form-group">
                           <label class="control-label col-sm-2" for="name">Meds:</label>
                               <div class="col-sm-10" style = "margin-bottom:70px">
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

                                    $sql = "SELECT medsID, name, dosage, units, time, notes FROM meds WHERE id=$id";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result-> num_rows > 0) {
                                        // output data of each row
                                    echo"<select name = 'meds'>"; 

                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                    echo "<option value=" . $row["name"]. " > ". $row["name"]. "</option> " ;

                                     } echo"</select>";
                                     }
                                     else {
                                      echo "0 results";
                                    }

                                          mysqli_close($conn);
                                    ?> 
                                </div>
                        </div>
      
                        
                                <label class="control-label col-sm-2" for="taken">Did you take your meds today?</label>
                                <div class="col-sm-10" style="margin-top: 25px">
                                         <label class="radio-inline">
                                          <input type="radio" name="optradio"> Yes
                                          </label>
                                         <label class="radio-inline">
                                          <input type="radio" name="optradio"> NO
                                         </label>
                                </div>
                     
          
                        <div class="form-group" >        
                              <div class="col-md-12 "style="margin-top: 100px">
                                        <button id="submit" name="submit" type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-save"></span>Submit</button>
                                        <button id="delete" name="delete" type="delete" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-remove-sign"></span>Delete</button> 
                              </div>
                        </div>
                  </div> 
                </form>
          </div>
      </div>
  </div>

  <div class="container-fluid"style="margin-top:25px; margin-left:25px; margin-right:25px">
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
      
      
      $sql = "SELECT name, taken  FROM notifications WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      if ($result-> num_rows > 0) {
          // output data of each row
      echo"<table><tr><th>Name</th><th>Taken</th></tr>";

      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["name"]. " " . "</td><td>" . $row["taken"]. " " . " </td></tr>";
        } echo"</table>";
        } else {
          echo "0 results";
        }

          mysqli_close($conn);
      ?> 
    </div>

</div>
</div>
 


    
<div class="container-fluid" style="margin-top:120px">
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
</div>


   <!--form validation javascript-->
        <script>

        function validateText(id)

          {

            if ($("#" + id).val() ==null || $("#"+id).val()=="")

              {
                /* to show an alert text that information is missing alert(id + "Validation Error!"); */

                var div = $("#" + id).closest("div");//this chooses the specific div where username is
                  div.addClass("has-error");//this highlights the box if NO info is enter or has an error

                  return false;
              }

                 else 
              {

                var div = $("#" + id).closest("div");//if info has been entered then
                  div.removeClass("has-error");// the box will not be highlighted as having an error 

                  return true;
              }
              
          }

            $(document).ready(

                function()

                { $("#submit").click(function()

                    {
                      /*use (!) if boolean is false, if boolean
                      is true then no need for (!)*/
                      if(!validateText("name"))//if there is no value then it will return false (see above"has error")
                      {
                        return false;
                      }

                      if(!validateText("dosage"))
                      {

                        return false;
                      }

                      if(!validateText("date"))
                      {

                        return false;
                      }
                       if(!validateText("days"))
                      {

                        return false;
                      }
                      
                      $("form#entermed").submit();// when all fields has been filled in then form will be submitted 

                   });
                });

         $(document).ready(function(){

                  $("button").click(function()//#delete

                  {

                    $("input").remove();

                  });
            });
        </script>
        
    
  </body>
</html>