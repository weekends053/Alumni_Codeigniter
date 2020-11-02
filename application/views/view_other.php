<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/showsearh.css">
         <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/editProfileMe.css">
</head>
<body>
    <div class="container">
      <h1>รายชื่อศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
      <table style="width:100%" border="1">
        <tr>
          <th>รหัสนักศึกษา</th>
          <th>ชื่อ</th>
          <th>บัตรประชาชน</th>
          
          <th>เพศ</th>
          <th>ที่อยู่</th>
          <th>เบอร์โทร</th>
          <th>E-mail</th>
          <th>Facebook</th>
          <th>Instagram</th>
        </tr>
        <?php
          foreach($AM->result_array() as $row){
        ?>
        <tr>
        <td><?=$row['Std_ID']?></td>
          <td><?=$row['Name_LastName']?></td>
          <td><?=$row['ID_Card']?></td>
         
          <td><?=$row['Sex']?></td>
          <td><?=$row['Address']?></td>
          <td><?=$row['Tel']?></td>
          <td><?=$row['E_mail']?></td>
          <td><?=$row['Facebook']?></td>
          <td><?=$row['Instagram']?></td>
        </tr>
        <?php
          }
        ?>
      </table>
    </div>
    <center><a class="button" href="../Alumni/Home">ย้อนกลับ</a></center>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>
</body>
</html>