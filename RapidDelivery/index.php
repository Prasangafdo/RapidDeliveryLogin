<?php
/*include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}*/
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rapid Delivery Login</title>
  
  
  
<link rel="stylesheet" href="css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Rapid<span>Delivery</span></div>
		</div>
		<br>
		<div class="login">
        <form action="login.php" method="post">
        		<input id="username" name="username" placeholder="username" type="text"><br>
				<input id="password" name="password" placeholder="**********" type="password"><br>
				<input name="submit" type="submit" value="Login">
				</form>
		</div>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  
</body>
</html>
