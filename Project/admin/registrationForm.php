<!DOCTYPE html>
<html lang="">
    <head>
         <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form</title>

         <!-- Materialize css. Compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    </head>
    <body>
    <?php
      include "header.php";
    ?>
<div class="alert alert-info" role="alert" style="text-align: center">PATIENT REGISTRATION</div>

<div class="container col-md-12">
<div class="row">

    <!-- Patient information -->
    <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Patient Information</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">First Name</span>
                  <input type="email" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Second Name</span>
                  <input type="email" class="form-control" placeholder="Second Name" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Date of Birth</span>
                  <input type="date" class="form-control" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Gender</span>
                        <select class="form-control" id="sel1">
                          <option>Male</option>
                          <option>Female</option>
                          <option>Other</option>
                        </select>              
                </div><br>
                </form>
          </span>
        </div>
      </div>

      <!-- Physical Information -->
          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Physical Information</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Height</span>
                  <input type="number" min = "0" class="form-control" placeholder="height(cm)" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Weight</span>
                  <input type="number" min= "0" class="form-control" placeholder="Weight(kg)" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Blood Pressure</span>
                  <input type="text" class="form-control" placeholder="Weight(kg)" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">BMI</span>
                  <input type="text" class="form-control" placeholder="BMI" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                </div>
                </form>
          </span>
        </div>
      </div>

        <!-- Screening Tests column -->
          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Screeening Tests</div>
              <form action="" method="post" accept-charset="utf-8">
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Blood Level</span>
                  <input type="text" class="form-control" placeholder="Blood level" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Malaria Results</span>
                  <input type="text" class="form-control" placeholder="Malaria Results" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Typhoid Results</span>
                  <input type="text" class="form-control" placeholder="Typhoid results" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">OtherBlood Results</span>
                  <input type="text" class="form-control" placeholder="Blood results" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Other Results</span>
                  <textarea class="form-control" placeholder="Describe other results" aria-describedby="sizing-addon1"></textarea>
                </div><br>
                <div class="input-group input-group-sm">
                </div>
                </form>
          </span>
        </div>
      </div>
    
    </div>
</div>

<!-- Submission button -->
  <center>
    <div><button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 20%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Submit Form</button></div>
  </center><p>
<?php
      include "footer.php";
    ?>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
        <!-- Materialize JavaScript. Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
</html>