<?php
 session_start();
 if(!isset($_SESSION['dsgn']))
 {setcookie("user", "", time()-3600);
 }
if(isset($_COOKIE['user']))
{ 	
			if($_SESSION['dsgn']=="divhead")
					 {header("Location:dh.php");
					 }
					 else if($_SESSION['dsgn']=="testlead")
					 {header("Location:tl.php");
					 }
					 else if($_SESSION['dsgn']=="testeng")
					 {header("Location:te.php");
					 }
}
?>

<html>
	<head>
		<?php
			include("layout_login.html");
		?>
	</head>
	
	<body>
		<div id="m_form_bg" style="width:30%; position:absolute; top:30%; left:13%;">
			<div class="form">
				Login Panel
				<form action="login_proc.php" method="post">
					Username:
					<input type="text" name="uid" style="opacity:0.7;"/>
					<br/>
					&nbsp;Password:
					<input type="password" name="pwd" style="opacity:0.7;"/>
					<br/>
					<input type="submit" name="submit" value="Login" style="opacity:0.7;"/>
					<br/>
					<a href="reg.php">Not a User? Register here</a>
				</form>
			<div>
	</div>
	</body>
</html>

