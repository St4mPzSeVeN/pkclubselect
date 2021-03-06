<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phunphin</title>
</head>

<body>
<style>
  body{
    font-family: 'Prompt', sans-serif;
  }
</style>
<?php
include('connect.php');
	$sql = "SELECT * FROM teach_data";
	$query = mysqli_query($e,$sql);
?>
<nav class="navbar navbar-expand-xl bg-primary navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="info.php" ><i class="fas fa-home"></i> หน้าหลัก</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stdinfo.php"><i class="fas fa-address-card"></i> ข้อมูลนักเรียน</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="infoteach.php"><i class="far fa-address-card"></i> ข้อมูลครู</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class="fas fa-door-open"></i> ออกจากระบบ</a>
    </li>
  </ul>
</nav>
&nbsp;
<h2 style="text-align: center;">
ระบบสมัครชุมนุม<br>โรงเรียนพุนพินพิทยาคม
</h2>
&nbsp;
<center>
  <table width="1028" border="2" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <center>
        <td width="343"><center>
          <a href="addclub.php">เพิ่ม ชุมนุม</a>
        </center></td>
        <td width="342"><center>
          <a href="addteach.php">เพิ่ม ข้อมูลครู</a>
        </center></td>
        <td width="343"><center>
          <a href="register.php">เพิ่ม ข้อมูลนักเรียน</a>
        </center></td>
      </center>
    </tr>
    <tr>
      <td align="center"><a href="info.php">รายชื่อชุมนุม</a></td>
      <td align="center"><a href="infoteach.php">รายชื่อครู</a></td>
      <td align="center"><a href="stdinfo.php">รายชื่อนักเรียน</a></td>
    </tr>
  </table>
  <p>&nbsp;
  </p>
  <p><center>
  ข้อมูลครู
  </center></p>
<center>
<table width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อ</th>
    <th scope="col">สกุล</th>
    <th scope="col">ประจำชุมนุม</th>
    <th scope="col">รหัส</th>
    <th scope="col">เพิ่ม</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">ลบ</th>
  </tr>
  <?php
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><?php echo $result["teach_name"] ?></td>
    <td><?php echo $result["teach_lname"] ?></td>
    <td><?php echo $result["teach_club"] ?></td>
    <td><?php echo $result["teach_id"] ?></td>
	<td align="center"><a href="addteach.php">เพิ่ม</a></td>
	<td align="center"><a href="updateteach.php?teachid=<?php echo $result["teach_id"]?>">แก้ไข</a></td>
    <td align="center"><a href="delteach.php?teachid=<?php echo $result["teach_id"]?>">ลบ</a></td>

  </tr><?php } ?>
</table>


</center>

</center>
</body>
</html>