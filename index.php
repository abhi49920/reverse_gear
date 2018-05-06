<?php
session_start();
?>

<!DOCTYPE html>
<!--
Author : Optimist Society
Designed and Edited By: Aishwary Sinha
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
        <title>Reverse Gear</title>
    </head>
    <body background="back.jpg" style="background-repeat: no-repeat; background-position: cover;">
        <div class="container-fluid" style="background: rgba(0, 0, 0, 0.2);">
            <center><h1 class="display-4"><font face="Pasajero" color="white">REVERSE GEAR</font></h1></center>
        </div>
        <br/>
        <br/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="height: 500px; padding: 90px;">
                    <h1 class="display-4"><font color="white">Instructions</font></h1>
                    <ul style="list-style-type:disc; color: white;">
                       <li>Enter yourself using the form on the right hand side.</li>
                       <li>Complete the quiz within the given time limit</li>
                       <li>Submit Quiz and Wait for the result.</li>
                    </ul>
                    <br/>
                    <br/>
                    <br/>
                    <h4 class="display-5"><font color="white">Note</font></h4>
                    <p><font color="white">There is not negative marking so try to answer all the questions.</font></p>
                    <br/>
                    <center>
                    <h4 class="display-4"><font color="white">GOOD LUCK!</font></h4>
                    </center>
                </div>
        <!--   Here is the left side -->
        <div class="col-sm-6" style="background: rgba(0, 0, 0, 0.5); padding: 80px;">
            <div class="card">
  <div class="card-body">
      <center><h4 class="card-title">Enter yourself here</h4></center>
      <hr/>
      <form action="quiz.php" method="post">
  <div class="form-group">
      <input type="text" class="form-control" name="cname" id="name" placeholder="Name Here" required/>
  </div>
          <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Enter Email" required/>
  </div>
          <div class="form-group">
              <input type="text" class="form-control" name="phonenumber" placeholder="Enter Phone Number" maxlength="10" size="10" required/>
  </div>
          <div class="form-group">
      <input type="text" class="form-control" id="adno" placeholder="Enter Admission Number" required/>
  </div>
          <div class="form-group">
  <select class="form-control" id="branch" name="branch">
    <option>Select Branch</option>
    <option>M.C.A 1st Year</option>
    <option>M.C.A 2nd Year</option>
    <option>M.C.A 3rd Year</option>
    <option>M.B.A 1st Year</option>
    <option>M.B.A 2nd Year</option>
    <option>B.Tech CSE 1st Year</option>
    <option>B.Tech CSE 2nd Year</option>
    <option>B.Tech CSE 3rd Year</option>
    <option>B.Tech CSE 4th Year</option>
    <option>B.Tech I.T. 1st Year</option>
    <option>B.Tech I.T. 2nd Year</option>
    <option>B.Tech I.T. 3rd Year</option>
    <option>B.Tech I.T. 4th Year</option>
    <option>B.Tech ECE 1st Year</option>
    <option>B.Tech ECE 2nd Year</option>
    <option>B.Tech ECE 3rd Year</option>
    <option>B.Tech ECE 4th Year</option>
    <option>B.Tech ME 1st Year</option>
    <option>B.Tech ME 2nd Year</option>
    <option>B.Tech ME 3rd Year</option>
    <option>B.Tech ME 4th Year</option>
    <option>B.Tech EE 1st Year</option>
    <option>B.Tech EE 2nd Year</option>
    <option>B.Tech EE 3rd Year</option>
    <option>B.Tech EE 4th Year</option>
    <option>B.Tech EEE 1st Year</option>
    <option>B.Tech EEE 2nd Year</option>
    <option>B.Tech EEE 3rd Year</option>
    <option>B.Tech EEE 4th Year</option>
    <option>B.Tech CE 1st Year</option>
    <option>B.Tech CE 2nd Year</option>
    <option>B.Tech CE 3rd Year</option>
    <option>B.Tech CE 4th Year</option>
    <option>B.Tech IC 1st Year</option>
    <option>B.Tech IC 2nd Year</option>
    <option>B.Tech IC 3rd Year</option>
    <option>B.Tech IC 4th Year</option>
  </select>
</div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
  </div>
</div>
        </div>
        </div>
        </div>
    </body>
</html>
