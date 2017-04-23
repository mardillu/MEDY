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
        <script type="text/javascript" src="../js/registrationValidation.js"></script>
    </head>
    <body>
    <?php
      include "../header.php";
    ?>
<div class="alert alert-info" role="alert" style="text-align: center">PATIENT REGISTRATION</div>
  <?php require_once ('/database/insertpatient.php'); ?>
<div class="container col-md-12">
<div class="row">
    <!-- Patient information -->
    <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Patient Information</div>
              <form action="" method="post" accept-charset="utf-8" onsubmit = "validRegistration()">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">First Name</span>
                  <input id = "fname" name = "fname" type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['fname']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Second Name</span>
                  <input id = "sname" name = "sname" type="text" class="form-control" placeholder="Second Name" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['sname']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Date of Birth</span>
                  <input id = "date" name = "date" type="date" class="form-control" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['date']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Age</span>
                  <input id = "age" name = "age" type="number" class="form-control" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['age']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Gender</span>
                        <select id = "gender" name = "gender" class="form-control" id="sel1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['gender']); ?>">
                          <option value ="">Gender</option>
                          <option value ="M">Male</option>
                          <option value ="F">Female</option>
                        </select>              
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Phone Number</span>
                  <input id = "phoneno" name = "phoneno" type="text" class="form-control" placeholder="Phone Number"  aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['phoneno']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Email</span>
                  <input id = "email" name = "email" type="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['email']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Physical Address</span>
                  <input id = "address" name = "address" type="text" class="form-control" placeholder="Address" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['address']); ?>">
                </div><br>
                <!-- </form> -->
          </span>
        </div>
      </div>

      <!-- Physical Information -->
          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Physical Information</div>
              <!-- <form action="" method="post" accept-charset="utf-8"> -->
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Height</span>
                  <input id = "height" name = "height" type="number" min = "0" class="form-control" placeholder="height(cm)" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['height']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Weight</span>
                  <input id = "weight" name = "weight" type="number" min= "0" class="form-control" placeholder="Weight(kg)" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['weight']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Blood Pressure</span>
                  <input id = "bp" name = "bp" type="text" class="form-control" placeholder="Weight(kg)" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['bp']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Genotype</span>
                  <input id = "gp" name = "gp" type="text" class="form-control" placeholder="genotype" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['gp']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Blood Group</span>
                  <input id = "bg" name = "bg" type="text" class="form-control" placeholder="blood group" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['bg']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">BMI</span>
                  <input id = "bmi" name = "bmi" type="text" class="form-control" placeholder="BMI" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['bmi']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                </div>
                <!-- </form> -->
          </span>
        </div>
      </div>

        <!-- Screening Tests column -->
          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Screeening Tests</div>
              <!-- <form action="" method="post" accept-charset="utf-8"> -->
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Blood Level</span>
                  <input id = "blevel" name = "blevel" type="text" class="form-control" placeholder="Blood level" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['blevel']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Malaria Results</span>
                  <input id = "mresults" name = "mresults" type="text" class="form-control" placeholder="Malaria Results" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['mresults']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Typhoid Results</span>
                  <input id = "tresults" name = "tresults" type="text" class="form-control" placeholder="Typhoid results" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['tresults']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">OtherBlood Results</span>
                  <input id = "otherbloodresults" name = "otherbloodresults" type="text" class="form-control" placeholder="Blood results" aria-describedby="sizing-addon1" required value = "<?php if(isset($_POST['submit'])) echo ($_POST['otherbloodresults']); ?>">
                </div><br>
                <div class="input-group input-group-sm">
                </div>
                <!-- </form> -->
          </span>
        </div>
      </div>
    
    </div>
</div>

<!-- Submission button -->
  <center>
    <div><button name = "submit" type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 20%" onclick= "validRegistration()"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Submit Form</button></div>
  </center><p>
  </p></form>
<?php
      include "../footer.php";
    ?>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
        <!-- Materialize JavaScript. Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
</html>