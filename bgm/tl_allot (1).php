<?php
include("tl.php");
?>
<style>
.drpdown{
   background:none;
   opacity:0.8;
   font-color:black;
   font-family:times new roman;
   
   height:25px;
   font-size: 15px;
   border:1px solid white;
   border-radius: 4px; }
	</style>	
	</head>';
<div class="form " style="position:absolute; top:65%; left:40%;">
				


				
			
			<form method="post" action="tl_newproj1.php">				
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allot Modules of :
		<?php 
			$con=mysql_connect("localhost","root","4244");
			if(!$con)
			{die(mysql_error());}
			  
			   mysql_select_db("anomoly_report",$con);
			   $n=$_SESSION['name'];
			   
			   $q1=mysql_query("select * from project where tl_name='$n'");
			   echo "<select class='drpdown' style='opacity:0.8' name='selproj'>";
			   while($r=mysql_fetch_array($q1))
			   {
			     echo "<option value'".$r['pname']."'>".$r['pname']."</option>"; 
			   }
			   echo "</select>";
			
			
	   ?>
	   <input type="submit" name="submit" value="Go" style="margin-top:5%;text-align:center;height: 30px; width: 60px;color:#080808;font-family:arial"/><br/><br/><br/>
			
	   

	</form>
</div>
?>