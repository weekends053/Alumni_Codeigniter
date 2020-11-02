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
<center><h1 class="regh1">ข้อมูลส่วนตัว</h1></center>
<center><form method="post" action="../Alumni/insert_Register">
    <table class="data">
    <tr>
    <td>รหัสนักศึกษา</td>
    <td><input name="Std_ID" type="text" id="ID_Card" size="30" maxlength="9"/></td>
  </tr>
  <tr>
    <td>ชื่อ-นามสกุล</td>
    <td><input name="Name_LastName" type="text" maxlength="100"/></td>
  </tr>
  <tr>
    <td>เลขบัตรประจำตัวประชาชน</td>
    <td><input name="ID_Card" type="text" id="ID_Card" size="30" maxlength="13"/></td>
  </tr>
  <tr>
    <td>วัน/เดือน/ปีเกิด</td>
    <td><label for="Date_Of_Birth"></label><input type="date" name="Date_Of_Birth"  /></td>
  </tr>
  <tr>
    <td>เพศ</td>
    <td class="sex"><input type="radio" name="Sex" value="ชาย" />
    <label for="radio">ชาย</label>
    <input type="radio" name="Sex" value="หญิง" />
    <label for="radio2">หญิง</label></td>
  </tr>
  <tr>
    <td>ที่อยู่</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์</td>
    <td><label for="Tel"></label>
    <input name="Tel" type="text" maxlength="10" /></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><label for="textarea"></label>
    <label for="E_mail"></label>
    <input name="E_mail" type="text" id="E-mail" size="40" maxlength="50" /></td>
  </tr>
  <tr>
    <td>Facebook</td>
    <td><label for="textfield"></label>
    <input name="Facebook" type="text" maxlength="50"  /></td>
  </tr>
  <tr>
    <td>Instagram</td>
    <td><input name="Instagram" type="text" maxlength="50" id="Instagram"  /></td>
  </tr>
</table>
<br><br>
<center><h1 class="regh1">ข้อมูลการศึกษา</h1></center>
<center>
    <table class="data2">
  <tr>
    <td>ปีที่จบการศึกษา</td>
    <td><label for="End_Year"></label><input type="text" name="End_Year"  /></td>
  </tr>
    </table>
</center>
<br><br>
<center><h1 class="regh1">ข้อมูลการทำงาน</h1></center>
<center>
    <table>
    <tr>
    <td>ชื่อบริษัท</td>
    <td><input name="Company_Name" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ที่อยู่บริษัท</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Company_Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>อาชีพ</td>
    <td><input name="Profession" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ตำแหน่ง</td>
    <td><input name="Rank" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์บริษัท</td>
    <td><label for="Company_Tel"></label>
    <input name="Company_Tel" type="text" maxlength="10" /></td>
  </tr>
    </table>
</center>
<br><br>
<center><h1 class="regh1">สมัครสมาชิกเข้าสู่ระบบ</h1></center>
<center>
<table class="username">
  <tr>
    <td>รหัสนักศึกษา</td>
    <td><input name="Username" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>รหัสผ่าน</td>
    <td><input name="Password" type="password" maxlength="50" /></td>
  </tr>
  <tr>
    <td>ยืนยันรหัสผ่าน</td>
    <td><input name="Re_Password" type="password" maxlength="50" /></td>
  </tr>
</table>
  <div class="reg_button">
		<a href="../Alumni/index">ย้อนกลับ</a>
	  <input class="button" name="submit" type="submit" value="สมัครสมาชิก" />
	</div>
</form></center>
<br>
</body>
</html>