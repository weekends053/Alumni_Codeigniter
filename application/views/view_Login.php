<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>กรุณาเข้าสู่ระบบห</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="container">
		<div class="box">
			<h1>LOG-IN</h1>
			<h2 class="logSE">Software Engineer</h2>

			<form name="form1" method="post" action="../Alumni/Check_Login">
				<input name="Username" type="text" placeholder="กรุณากรอกรหัสนักศึกษา"><br>
				<input name="Password" type="password" placeholder="กรุณากรอกรหัสผ่าน">
				<br>
				<div class="login_button">
					<a href="../Alumni/index">ย้อนกลับ</a>
					<input class="button" type="submit" name="login"  value="Login" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>