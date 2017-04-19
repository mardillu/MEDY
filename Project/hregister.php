
<!DOCTYPE html>
<html lang="">
    <head>
         <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hospital Registration</title>

         <!-- Materialize css. Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

    <script src="js/script.js" type="text/javascript" charset="utf-8" async defer></script>
    </head>
    <body>
    <?php
      include "header2.php";
    ?>
<div class="alert alert-info" role="alert" style="text-align: center">Hospital Registeration</div>

<div class="container col-md-12" style="background-color: white">
<div class="row">
    
    <div class="col-md-6">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Contact Information</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">First Name</span>
                  <input type="text" class="form-control" placeholder="First Name" aria-describedby="sizing-addon1" name="fname" id="fname">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Last Name</span>
                  <input type="text" class="form-control" placeholder="Second Name" aria-describedby="sizing-addon1" name="lname" id="lname">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Email</span>
                  <input type="email" class="form-control" placeholder="Last Name" aria-describedby="sizing-addon1" name="uemail" id="uemail">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Username</span>
                  <input type="text" class="form-control" placeholder="Username..." aria-describedby="sizing-addon1" name="uname" id="uname">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Password</span>
                  <input type="password" class="form-control" placeholder="Password..." aria-describedby="sizing-addon1" name="pass" id="pass">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Hospital</span>
                  <input type="text" class="form-control" placeholder="Name of hospital..." aria-describedby="sizing-addon1" name="hos" id="hos">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Specialization</span>
                  <input type="text" class="form-control" placeholder="E.g Dentistry..." aria-describedby="sizing-addon1" name="spec" id="spec" spellcheck="true">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Adrress</span>
                  <input type="text" class="form-control" placeholder="Address line 1..." aria-describedby="sizing-addon1" name="adr" id="adr">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Address</span>
                  <input type="text" class="form-control" placeholder="Address line 2..." aria-describedby="sizing-addon1" name="adr2" id="adr2">
                </div><br>
              </form>
          </span>
        </div>
      </div>

          <div class="col-md-6">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Hospital Information</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Hospital name</span>
                  <input type="text" class="form-control" placeholder="Name of your hospital" aria-describedby="sizing-addon1" name="hname" id="hname">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Address</span>
                  <input type="text" class="form-control" placeholder="Address line 1" aria-describedby="sizing-addon1" name="addr" id="addr">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Address</span>
                  <input type="text" class="form-control" placeholder="Address line 2" aria-describedby="sizing-addon1" name="addr2" id="addr2">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Certification No</span>
                  <input type="number" class="form-control"  aria-describedby="sizing-addon1" >
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Email</span>
                  <input type="email" class="form-control" placeholder="Contact email..." aria-describedby="sizing-addon1" name="email" id="email">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Phone</span>
                  <input type="tel" class="form-control" placeholder="Contact phone number..." aria-describedby="sizing-addon1" name="phone" id="phone">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Website</span>
                  <input type="text" class="form-control" placeholder="https://www.example.com" aria-describedby="sizing-addon1" value="https://www" name="web" id="web">
                </div>
                </form>
          </span>
        </div>
      </div>    
    </div>
      <center>
    <div><button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 20%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Submit Form</button>

      <a href="./" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 20%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Cancel</a>
    </div>
  </center><p>
</div>


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