<!DOCTYPE html>
<html lang="">
    <head>
         <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>

         <!-- Materialize css. Compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    </head>
    <body>
    <ul id="dropdown1" class="dropdown-content" style="width: 200px">
      <li><a href="#!">Add patient</a></li>
      <li><a href="users.php">View registered patients</a></li>
      <li><a href="#!">Find a patient</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
     <div class="navbar-fixed"> 
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="dashboard.php">Home</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-constrainWidth="false">Patient<i class="material-icons right"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></i></a></li>
        <li><a href="collapsible.html">Something</a></li>
      </ul>
    </div>
  </nav>
  </div>
<div class="alert alert-info" role="alert" style="text-align: center">Today's appointments</div>

<div class="container col-md-12">
<div class="row">
    
    <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Quick mail</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">To</span>
                  <input type="email" class="form-control" placeholder="Recipeint(s) email" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Subject</span>
                  <input type="text" class="form-control" placeholder="Subject" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Message</span>
                  <textarea class="form-control" placeholder="Type your message" aria-describedby="sizing-addon1"></textarea>
                </div><br>
                <div class="input-group input-group-sm">
                  <button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 100%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Send</button>
                </div>
                </form>
          </span>
        </div>
      </div>

          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Quick mail</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">To</span>
                  <input type="email" class="form-control" placeholder="Recipeint(s) email" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Subject</span>
                  <input type="text" class="form-control" placeholder="Subject" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Message</span>
                  <textarea class="form-control" placeholder="Type your message" aria-describedby="sizing-addon1"></textarea>
                </div><br>
                <div class="input-group input-group-sm">
                  <button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 100%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Send</button>
                </div>
                </form>
          </span>
        </div>
      </div>

          <div class="col-md-4">
        <div class="card-panel">
          <span class="white-text">
              <div class="alert alert-info" role="alert" style="text-align: center;">Quick mail</div>
              <form action="" method="post" accept-charset="utf-8">
                  <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">To</span>
                  <input type="email" class="form-control" placeholder="Recipeint(s) email" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Subject</span>
                  <input type="text" class="form-control" placeholder="Subject" aria-describedby="sizing-addon1">
                </div><br>
                <div class="input-group input-group-sm">
                  <span class="input-group-addon" id="sizing-addon1">Message</span>
                  <textarea class="form-control" placeholder="Type your message" aria-describedby="sizing-addon1"></textarea>
                </div><br>
                <div class="input-group input-group-sm">
                  <button type="submit" class="btn btn-info" aria-describedby="sizing-addon1" style="width: 100%"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Send</button>
                </div>
                </form>
          </span>
        </div>
      </div>
    
    </div>
</div>











        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
        <!-- Materialize JavaScript. Compiled and minified JavaScript -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
</html>