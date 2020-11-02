<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Profile</title>
  <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/profileMe.css"> 
	<!--using FontAwesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
  foreach($AM as $row){
  ?>
    <div class="container">
    <center><h2>ข้อมูลส่วนตัว</h2></center>
      <tr>
        <td>
            <th>
              <a class="title">รหัสนักศึกษา 
                <a class="input">: &nbsp; <?=$row->Std_ID;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อ - นามสกุล 
                <a class="input">: &nbsp; <?=$row->Name_LastName;?></a>
              </a>
            </th>
            <br><br>
          
            <th>
              <a class="title">รหัสประจำตัวประชาชน 
                <a class="input">: &nbsp; <?=$row->ID_Card;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">วันเดือนปีเกิด 
                <a class="input">: &nbsp; <?=$row->Date_Of_Birth;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ที่อยู่ 
                <a class="input">: &nbsp; <?=$row->Address;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เบอร์โทรศัพท์ 
                <a class="input">: &nbsp; <?=$row->Tel;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">E-mail 
                <a class="input">: &nbsp; <?=$row->E_mail;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">Facebook 
                <a class="input">: &nbsp; <?=$row->Facebook;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">Instagran 
                <a class="input">: &nbsp; <?=$row->Instagram;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ปีที่จบ 
                <a class="input">: &nbsp; <?=$row->End_Year;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ชื่อบริษัท 
                <a class="input">: &nbsp; <?=$row->Company_Name;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ที่อยู่บริษัท 
                <a class="input">: &nbsp; <?=$row->Company_Address;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">อาชีพ 
                <a class="input">: &nbsp; <?=$row->Profession;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">ตำแหน่ง 
                <a class="input">: &nbsp; <?=$row->Rank;?></a>
              </a>
            </th>
            <br><br>

            <th>
              <a class="title">เบอร์โทรศัพัท์ 
                <a class="input">: &nbsp; <?=$row->Company_Tel;?></a>
              </a>
            </th>
            <br><br><br><br>
        </td>
      </tr>
      <center><a class="button" href="../Alumni/Edit">เเก้ไขข้อมูลส่วนตัว</a></center>
      <br><br>
      <center><a class="button" href="../Alumni/Home">ย้อนกลับ</a></center>
    </div>
  <?php
  }
  ?>
</body>
</html>