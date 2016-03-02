<?php
		session_start();
		
			
		echo "<div class='form'  style='line-height:120%; position:absolute; right:4%; top:4%;'> Welcome <br/>";
		echo  $_SESSION['name'];
		echo "<script><div style='color:black'><strong>Logout</strong></div></script>";
		echo	"</div>";
?>
<html>
<style>
.sandi select{
   background: opaque;
   font-color:black;
   font-family:times new roman;
   background-color:white;
   width: 90px;
   padding:0px;
   font-size: 15px;
   line-height: 1;
   border: 1;
   border-radius:2px;
   height: 25px;
   }
</style>
<body>
<?php
include("layout2.html");
?>
<div id="m_form_bg" style="width:60%; height:auto; margin-left:0px;margin-top:7%; position:absolute; top:20%; left:20%;">
<div class="sandi" style="text-align:center;">
<div class="form">
<form action="compose_proc.php" method="post"><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Subject:<input type='text' name='subject'/><br/>
Type Your Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea rows="5" cols="25" name="msg"></textarea><br/>
<?php

$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{
			die(mysql_error());
			}
			  else
			  {
			   mysql_select_db("anomoly_report",$con);
			   $name=$_SESSION['name'];
			   $q1=mysql_query("select * from login where name!='$name'");
			   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send To: ';
			   echo '<select name="t_user">';
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['name']."'>".$r['name']."</option>"; 
			   }
			   echo "</select><br/><br/>";
}
?>



<input type="submit" name="submit" value="send" style="margin-bottom:20px; height: 40px; width: 100px;color:#080808;font-family:arial"/>
</form>
</div>
</div>
</div>
</body>
</html>