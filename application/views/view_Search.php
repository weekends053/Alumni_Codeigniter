<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ค้นหานักศึกษา</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="h1search">Software Engineer</h1>
<h2>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h2>
	<div class="container">
		<div class="box">
			<center>
			<a class="search" href="../Alumni/Enter_ID ">ค้นหาจากรหัสนักศึกษา</a>
			<br><br>
			<a class="search" href="../Alumni/Enter_Name">ค้นหาจากชื่อนักศึกษา</a>
			<br><br>
			<a class="search" href="../Alumni/Enter_Year">ค้นหาจากปีที่จบ</a>
			<br><br>
			<a class="search" href="../Alumni/Home">ย้อนกลับ</a>
			</center>
		</div>
	</div>
</body>
</html>