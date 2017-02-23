<!DOCTYPE html>
<html lang="">
	<head>
	 	<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login-MEDY</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="login" style="width: 50%; margin-left: 25%; margin-top: 10%">
		<form action="admin/dashboard.php" method="post" accept-charset="utf-8">
            <table class="table table-bordered">
                <thead><h2>Login in seconds</h2></thead>
            	<tbody>
            		<tr>
            			<td> <input type="text" name="username" value="" placeholder="Username..." class="form-control" style="text-align: center"> </td>
            		</tr>
            		<tr>
            		    <td><input type="password" name="password" value="" placeholder="Password..." class="form-control" style="text-align: center"> </td>
            		</tr>
            		<tr> 
            		    <td><input type="checkbox" name="rem" value="rem">&nbsp;Remember me </td>
            		</tr>
            		<tr>
            			<td> <input type="submit" name="submit" value="Login" class="btn btn-success" style="width: 100%;"></td>
            		</tr>
            	</tbody>
            </table>
            </form>
		</div>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	</body>
</html>