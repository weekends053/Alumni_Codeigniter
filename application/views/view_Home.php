<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>หน้าหลัก</title>
	<link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/style.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<h1>Software Engineer</h1>
	<div class="container">
		<div class="box">
			<a class="search" href="../Alumni/Search">ค้นหาศิษย์เก่า</a>
			<br>
			<a class="search" href="../Alumni/view_other">ศิษย์เก่าทั้งหมด</a>
			<br><br><br>
			<a class="profile" href="../Alumni/Profile">ดูโปรไฟล์</a>
			<br><br><br><br>
			<a class="checkout" href="../Alumni/Logout">ออกจากระบบ</a>
		</div>
	</div>
</body>
</html>