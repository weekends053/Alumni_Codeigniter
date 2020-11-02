<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าแรก</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="box">
			<h1>Software Engineer</h1>
			<h2>ระบบสมัครศิษย์เก่า</h2>
			<a class="login" href="../Alumni/Login">เข้าสู่ระบบ</a><br><br>
			<a class="register" href="../Alumni/Register">สมัครสมาชิก</a>
		</div>
	</div>
</body>
</html>