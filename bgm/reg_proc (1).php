
		<?php
			include("layout_login.html");
			
			$uid=$_POST["uname"];
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$pwd=$_POST["pwd"];
			$repwd=$_POST["pwd1"];
			$dsg=$_POST["dsgn"];
			$email=$_POST["email"];
			
			$name=$fname." ".$lname;
			
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die("Failed:".mysql_error());
			}
			
			mysql_select_db("anomoly_report",$con);
			
			if($uid=="" || $pwd=="" || $fname=="" || $repwd=="" || $dsg=="")
			{ if($uid=="")
				{echo "<script> alert('Username cannot be empty')</script>";}
			  else if($pwd=="")
				{echo "<script> alert('Password field cannot be empty')</script>";}
			  else if($repwd=="")
				{echo "<script> alert('Retype Password field cannot be empty')</script>";}
			  else if($fname=="" || $lname=="")
				{echo "<script> alert('Names cannot be empty')</script>";}
			  else if($email=="")	
				{echo "<script> alert('e-mail cannot be empty')</script>";}
			 
			echo
			"<div id='m_form_bg' style='width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;'>
			<p style='line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;'>Sorry!! Registration Failed
			<br/><a href='reg.php' style='font-size:15px;'>Go Back</a></p>
			<br/>
			<div style='position:absolute; top:140px; left:38%;'>
			</div>
			<div id='anim'  style='z-index:20;' >
			<p style='font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;'>.....</p>
			</div>
			</div>";				 
			}
			else if($pwd!=$repwd)
			{echo "<script>alert('Passwords should match')</script>";
			 echo "<div id='m_form_bg' style='width:28%; height:39%; border-radius:4px; background-color: rgba(150,150,150,0.1); position:absolute; top:30%; left:14%; z-index:10;'>
			<p style='line-height:40px; margin-top:10px; text-align:center; font-size:22px; font-family:Century Gothic; color:red;'>Sorry!! Registration Failed
			<br/><a href='reg.php' style='font-size:15px;'>Go Back</a></p>
			<br/>
			<div style='position:absolute; top:140px; left:38%;'>
			</div>
			<div id='anim'  style='z-index:20;' >
			<p style='font-size:50px; font-family:Trebuchet MS; opacity:0.4; z-index:0;'>.....</p>
			</div>
			</div>";				 
			
			}
			else
			{$ql="insert into login values('$uid','$pwd','$name','$dsg','$email')";
			
			 
			 if(!(mysql_query($ql,$con)))
			 {if(mysql_error()=="Duplicate entry '".$uid."' for key 'PRIMARY'")
			  echo '<script> alert("Username already taken")</script>';
			  include("reg.php");
			 }
			 else
			 {	
				?> 
				<html>
				<body>
				<script> alert('Successfully Registered');</script>
				</body>
				</html>
				<?php
				
				include("login.php");
			 }
			}
			
		?>
		