<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ค้นหาจากปีที่จบ</title>
  <link rel = "stylesheet" type = "text/css" 
     href = "<?php echo base_url(); ?>css/style.css"> 
     <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/editProfileMe.css">
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body><br><br><br>
  <h2 class="result-search">ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h2>
  <div class="container">
    <table>
      <tr class="tr-th">
        <th class="result-th">รหัสนักศึกษา</th>
        <th class="result-th">ชื่อ - นามสกุล</th>
        <th class="result-th">ปีที่จบ</th>
      </tr>
      <?php
        foreach($AM->result() as $row){
      ?>
      <tr class="tr-td">
        <td class="result-td"><center><?php echo $row->Std_ID ?></center></td>
        <td class="result-td"><center><?php echo $row->Name_LastName?></center></td>
        <td class="result-td"><center><?php echo $row->End_Year ?></center></td>
      </tr>
      <?php
       }
      ?>
    </table>
  </div>
  <center><a class="button" href="../Alumni/Search">ย้อนกลับ</a></center>
</body>
</html>