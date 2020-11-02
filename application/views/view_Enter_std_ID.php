<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ค้นหานักศึกษา</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
		 <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/editProfileMe.css">
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="h1search">Software Engineer</h1>
<h2>ค้นหาศิษย์ด้วยรหัสนักศึกษา</h2>
	<div class="container">
		<div class="boxid">
			<center>
				<div class="searchid">
					<form method="get" action="../Alumni/search_StdID">
						<td>รหัสนักศึกษา :
							<input name="Std_ID" type="text" size="30" maxlength="9" placeholder="กรุณากรอกรหัสนักศึกษา" />
						</td>
						&nbsp;<button type="submit">ค้นหา</button>	
					</form>
				</div>
			</center>
		  </div>
		  
	</div>
		</div>
		<center><a class="button" href="../Alumni/Search">ย้อนกลับ</a></center>
</body>
</html>



