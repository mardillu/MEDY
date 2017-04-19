<div class="navbar-fixed"> 
  <nav>
    <div class="nav-wrapper">
      <a href="dashboard.php"
      <img src="../images/logo.PNG" class="brand-logo center" height="120" width="120" alt="Logo" style="margin-top: -30px"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="dashboard.php" style="text-decoration: none; font-size: 20px">Home</a></li>
        <li><a href="registrationForm.php" style="text-decoration: none; font-size: 20px">Add patient</a></li>
        <li><a href="users.php" style="text-decoration: none; font-size: 20px">View patients</a></li>
		<li>
			<div class="row" style="margin-left: 10px">
			    <form class="col s12">
			      <div class="row">
			        <div class="input-field col s12" style="background-color: white;color: black">
			          <input id="text" type="text" class="validate">
			          <label for="text" data-error="wrong" data-success="right"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Find a patient by ID or Name... </label>
			          
			        </div>
			      </div>
			    </form>
			 </div>
  </li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../" style="text-decoration: none; font-size: 20px">Logout</a></li>
      </ul>
      <ul id="slide-out" class="side-nav">
        <li><a href="dashboard.php">Home</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-constrainWidth="false">Patient<i class="material-icons right"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></i></a></li>
        <li><a href="collapsible.html">Something</a></li>
        <li>
	      <form>
	        <div class="input-field">
	          <input id="search" type="search" required>
	          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
	          <i class="material-icons">close</i>
	        </div>
	      </form>
        </li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">Menu</i></a>
    </div>
  </nav>
  </div>