<?php
		 session_start();
		
		
		if($_SESSION['dsgn']!="divhead")
			{header("Location:login.php");
			}
	
		
?>			
<html>
<head>
    <link rel="shortcut icon" href="titicon.gif" />
</head>
<style>
.sandi select{
   background: opaque;
   font-color:black;
   font-family:times new roman;
   background-color:white;
   width: 150px;
   padding:0px;
   font-size: 15px;
   line-height: 1;
   border: 1;
   border-radius: 0.5;
   height: 25px;
   }
	body
				{color:white;
							background: url('4.jpg') no-repeat center center fixed; 
							
					-webkit-background-size: cover;
						-moz-background-size: cover;
					-o-background-size: cover;
						background-size: cover;
				}	
				


</style>

	<script language="javascript" type="text/javascript" src="datetimepicker.js">
	</script>
<body>
	<?php
	include("layout1.html");
	?>


	<div id="m_form_bg" style="width:60%; margin-top:3%; margin-left:20%;  z-index:10;">
	
	
	<div class="form">
	<u><h3>PROJECT EDIT PANEL</h3></u>
	Project Selected:<strong> <?php  echo $_POST["proj"]; ?></strong><br/>
	
	<?php
 echo '<form action="dh_editpro_proc.php" method="post">';	
	echo '<div>';
	$_SESSION['pname']=$_POST["proj"];
		$pname=$_SESSION['pname'];	
	$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());
			}
			  
			   mysql_select_db("anomoly_report",$con);
			   
			   $q1=mysql_query("select * from project where pname='$pname'");
			   $q2=mysql_fetch_array($q1);
				
		
	echo '&nbsp;&nbsp;&nbsp;Client name:&nbsp;';			
	echo "<input type='text' name='cname' value='$q2[cname]' />";
	
	echo '<br/>';
	
	echo "Client Details:
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea rows='5' cols='25' name='cdet'>$q2[cdetails]</textarea>";
	echo "&nbsp;&nbsp;<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	echo "
	Project Details:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	";
	echo "	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<textarea rows='6' cols='35' name='pdet'>$q2[pdesc]</textarea>&nbsp;&nbsp;
	<div style='margin-left:60%'>
	</div>
	";
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;
	Start Date:
	<input type='text' name='sdate' id='demo1' size='15' value='$q2[s_date]'><a href='javascript:NewCal('demo1','ddmmmyyyy')'><img src='cal.gif' width='16' height='16' border='0' alt='Pick a date'></a>&nbsp;&nbsp;<br/>&nbsp;&nbsp;
	&nbsp;
	Due Date:
	<input type='text' name='ddate' id='demo2' size='15' value='$q2[d_date]'><a href='javascript:NewCal('demo2','ddmmmyyyy')'><img src='cal.gif' width='16' height='16' border='0' alt='Pick a date'></a>
	
	<div class='sandi'>&nbsp;&nbsp;&nbsp;<br/>";
	
	echo "Project previously assigned To: <strong>$q2[tl_name]</strong><br/>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;Reassign To :&nbsp;";
	
			   $q3=mysql_query("select * from login where dsgn='testlead'");
			   echo "<select name='assgn' width='20px' >";
			   while($r=mysql_fetch_array($q3))
			   {
				echo "<option value'".$r['name']."'>".$r['name']."</option>"; 
			   }
				  
			   echo "</select><br/><br/>&nbsp;&nbsp;&nbsp;";
	
	echo "Change Round:";
	echo "<select name='round'>";
		echo "<option value='1'>1</option>";
		echo "<option value='2'>2</option>";
		echo "<option value='3'>3</option>";
		echo "<option value='4'>4</option>";
		echo "<option value='5'>5</option>";
	echo "</select><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";	
	
	echo "Status:";
	echo "<select name='stts'>";
		echo "<option value='live'>Live</option>";
		echo "<option value='closed'>Closed</option>";
	echo "</select><br/>";	
	
	  echo '<br/>
	   <input type="submit" name="submit" value="UPDATE" style="margin-left:2%;margin-top:5%;text-align:center;height: 30px; width: 105px;color:#080808;font-family:arial"/>
			';
	echo '</div>';

	echo "</div>";
	echo'</form>';
	
?>			     
			   
	
		
	   <br/>
	   
	   </div>
	</div>
</body>	
</html>