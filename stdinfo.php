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

  .carousel-inner img {
      width: 700px;
      height: 430px;
    }
</style>
<?php
include('connect.php');
	$sql = "SELECT * FROM stu_data";
	$query = mysqli_query($e,$sql);
?>
<nav class="navbar navbar-expand-xl bg-primary navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="info.php" ><i class="fas fa-home"></i> หน้าหลัก</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="stdinfo.php"><i class="fas fa-address-card"></i> ข้อมูลนักเรียน</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="infoteach.php"><i class="far fa-address-card"></i> ข้อมูลครู</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class="fas fa-door-open"></i> ออกจากระบบ</a>
    </li>
  </ul>
</nav>
&nbsp;
<div style="text-align: center;">
  <h2>
    ระบบสมัครชุมนุม<br>โรงเรียนพุนพินพิทยาคม
  </h2>
</div>
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
  ข้อมูลนักเรียน
  </center></p>
<center>
<table style="text-align: center;" width="1024" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">ชื่อ</th>
    <th scope="col">สกุล</th>
    <th scope="col">เพศ</th>
    <th scope="col">ชั้น</th>
    <th scope="col">ห้อง</th>
    <th scope="col">รหัสนักเรียน</th>
    <th scope="col">Username</th>
    <th scope="col">เพิ่มรายชื่อ</th>
    <th scope="col">ลบรายชื่อ</th>
    <th scope="col">แก้ไขรายชื่อ</th>
  </tr>
  <?php
  while($result=mysqli_fetch_array($query)){
  ?>
  <tr>
    <td><center><?php echo $result["std_name"] ?></center></td>
    <td><center><?php echo $result["std_lname"] ?></center></td>
    <td><center><?php if($result["std_gen"] == 1)
    {
      echo "เพศชาย";
    }
    else
    {
      echo "เพศหญิง";
    }
     ?><center/>

    </td>
    <td><center><?php if($result["std_level"] == "m1")
	{
		echo "ม.1";
		}
	elseif($result["std_level"] == "m2")
	{
		echo "ม.2";
		}
	elseif($result["std_level"] == "m3")
	{
		echo "ม.3";
		}
	elseif($result["std_level"] == "m4")
	{
		echo "ม.4";
		}
	elseif($result["std_level"] == "m5")
	{
		echo "ม.5";
		}
	elseif($result["std_level"] == "m6")
	{
		echo "ม.6";
		}
	 ?></center></td>
    <td><center><?php echo $result["std_room"] ?></center></td>
    <td><center><?php echo $result["std_id"] ?></center></td>
    <td><center><?php echo $result["std_user"] ?></center></td>
    <td><center>
      <a href="register.php">เพิ่ม</a>
    </center></td>
    <td><center>
      <a href="del.php?stdid=<?php echo $result["std_id"] ?>">ลบ</a>
    </center></td>
    <td><center>
      <a href="updatestd.php?stdid=<?php echo $result["std_id"] ?>">แก้ไข</a>
    </center></td>
  </tr><?php } ?>
</table>


</center>

</center>
</body>
</html>