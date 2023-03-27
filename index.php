<?php ini_set("display_errors","1"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Report Cards</title>
  <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>THE AMERICAN SCHOOL OF TAMPICO</h1>
<h2>Report Cards Early Childhood</h2>
<hr size="6" color="#0A7ABD" />
<div class="container">
	<section id="content">
		<form action="validar.php" method="POST" autocomplete="off">
			<h1>Log in</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="password" />
			</div>
			<div align="center">
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
        <?   if ($existe=="no"){
                  echo "User or password invalid!";
             }
        ?>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
