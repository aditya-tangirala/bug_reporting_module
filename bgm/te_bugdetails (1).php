<?php
	if(!isset($_COOKIE["user"]))
	{header("Location:login.php");
	}
	else
	{
	
		session_start();
		
		if($_SESSION['dsgn']!="testeng")
			{header("Location:login.php");
			}
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style1.css" media="all">
		<style>
		.sandi {
   background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   width: 100px;
   height:25px;
   font-size: 15px;
   border:1px solid white;
   border-radius: 4px; }
		
							body
				{color:white;
							background: url('4.jpg') no-repeat center center fixed; 
							
					-webkit-background-size: cover;
						-moz-background-size: cover;
					-o-background-size: cover;
						background-size: cover;
				}	
		
	</style>
	</head>
	<body>
	
		<?php
		include("layout1.html");
		?>
<div id="m_form_bg" style="margin-top:0%; ">
	<?php $_SESSION['module']=$_POST['module']; ?>
		<div class="form"  style="line-height:3">
		<form action="te_bugdetails_proc.php" method="post">
		<h3 style="color:white; margin-top:4%"><strong style="color:black;">FORM FOR ANOMOLY REPORT GENERATION</strong></h3>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Project Selected:<?php echo $_SESSION['proj'];?>&nbsp;&nbsp;&nbsp;
		Module Selected:<?php echo $_POST['module'];?>
		<br/><br/>
		Test Case ID:
		<input type="text" name="tid" style="opacity:0.8;">
		
		<br/>
		
		Menu/Bar/Screen:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;<textarea name="mbs" rows=5 cols=40 class="txtarea" style="opacity:0.8;"></textarea>
		<br/>
		
		Compaint Description:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;<textarea name="complaint" rows=5 cols=40 class="txtarea" style="opacity:0.8;"></textarea>
		<br/>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Severity:
		<input type="radio" name="severity" value="Critical" style="opacity:0.7;">Critical
		<input type="radio" name="severity" value="High" style="opacity:0.7;">High
		<input type="radio" name="severity" value="Medium" style="opacity:0.7;">Normal
		<input type="radio" name="severity" value="Low" style="opacity:0.7;">Low
		<input type="radio" name="severity" value="TBD" style="opacity:0.7;" checked="checked">TBD
		<br/>

		Remarks:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="rmrk" rows=5 cols=40 class="txtarea" style="opacity:0.8;"></textarea>
		<br/>
		<br/>
		<input type="submit"  value="Submit Bug" style="width:auto;height:35;">
		</form>
		
		
		</div>

		</div>
		
	</body>
</html>