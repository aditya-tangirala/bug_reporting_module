
<html>
<head>
<style>
.sandi select{
   background: opaque;
   font-color:black;
   font-family:Trebuchet MS;
   background-color:white;
   width: 150px;
   padding:3px;
   font-size: 15px;
   line-height: 1;
   border: 1;
   border-radius: 0.5;
   height: 25px;
   }
   </style>
 
</head>
<body>
<?php
include("layout_login.html");
?>

<div id="m_form_bg">
	<div style="text-align:center;font-size:25px; font-family:Century Gothic; line-height:80px;";>
	REGISTRATION
	</div>
		<div class="form" style="line-height:250%">
				<form action="reg_proc.php" method="post">
				First Name:  <input type="text" name="fname" /><br/>
				Last Name:   <input type="text" name="lname" />
				<br/>
				
				<div class="sandi">
			Designation:<select name="dsgn" width="30px">
				<option value="divhead">Divisional Head</option>
				<option value="testlead">Test Lead</option>
				<option value="testeng">Test Engineer</option>
				</select>
				</div>
				
				Username :<input type="text" name="uname" /><br/>
				Password :<input type="password" name="pwd" /><br/>
				Re-Enter Password : <input type="password" name="pwd1" /><br/>
				e-mail ID:<input type="Text" name="email" /><br/>
				</div> 
		   
			<div class="form";style="margin-left:25%";>
			<input type="submit" value="REGISTER"  style="margin-bottom:20px; height: 40px; width: 100px;color:#080808;font-family:arial">
			</div>
		</form>
	
	</div>
</body>
</html>
