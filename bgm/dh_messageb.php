<html>
	<head>
		
	<style>
.sandi {
   background:none;

   font-color:black;
   font-family:times new roman;
   width: 150px;
   height:50px;
   font-size: 20px;
   border-radius: 4px;
  
   }	
	</style>	
	</head>

	<body>
		
		
		<?php
			include("dh.php");
		?>
			<div class="form" style="position:absolute; top:20%; left:25%;">
			<a href="compose.php"><input type="submit" value="Compose" class="sandi" /></a>
			<a href="dh_inboxb.php"><input type='text' value="inbox" name='mission' style='width:0;height:0;border:none' /><input type="submit" value="Inbox" class="sandi" /></a>
			<a href="dh_sentb.php"><input type="button" value="Sent" class="sandi" /></a>
			<br/>
			</div>
	</body>
</html>