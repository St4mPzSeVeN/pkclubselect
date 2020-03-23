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
<?php
include("connect.php");
$k = $_GET["stdid"];
$sql = "SELECT * FROM stu_data Where std_id = '$k'";
$query = mysqli_query($e,$sql);
$result = mysqli_fetch_array($query);
?>
<center>
  <form id="form1" name="form1" method="post" action="stdinfo.php">

    <input name="stdupdate" type="hidden" id="stdupdate" value="<?php echo $result["std_id"] ?>" />
  </form>
</center>
<div style="text-align: center;">
  &nbsp;
  <h2>
    ระบบสมัครชุมนุม<br>โรงเรียนพุนพินพิทยาคม
  </h2>
</div>
<center><form action="updatestd2.php" method="post"><table width="270" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td width="126">ชื่อ</td>

    <td width="144"><input name="std_name" type="text" value="<?php echo $result["std_name"] ?>" /></td>

  </tr>

  <tr>

    <td>สกุล</td>

    <td><input name="std_lname" type="text" value="<?php echo $result["std_lname"] ?>" /></td>

  </tr>

  <tr>

    <td>เพศ</td>

    <td>

    <?php if($result["std_gen"] == 1)

	{

		?><input name="std_gen" type="radio" value="1" checked="checked" />ชาย

		<input name="std_gen" type="radio" value="2" />หญิง

		<?php

	}

	else

	{

		?><input name="std_gen" type="radio" value="1" />ชาย

        <input name="std_gen" type="radio" value="2" checked="checked" />หญิง

		<?php

	}

	 ?>

    

    </td>

  </tr>

  <tr>

    <td>ระดับชั้น</td>

    <td><select name="std_level" >

      <option value="m1" <?php if($result["std_level"] == "m1") { echo "selected=selected"; } ?> >ม.1</option>

      <option value="m2"<?php if($result["std_level"] == "m2") { echo "selected=selected"; } ?>  >ม.2</option>

      <option value="m3" <?php if($result["std_level"] == "m3") { echo "selected=selected"; } ?> >ม.3</option>

      <option value="m4" <?php if($result["std_level"] == "m4") { echo "selected=selected"; } ?> >ม.4</option>

      <option value="m5" <?php if($result["std_level"] == "m5") { echo "selected=selected"; } ?> >ม.5</option>

      <option value="m6" <?php if($result["std_level"] == "m6") { echo "selected=selected"; } ?> >ม.6</option>

    </select></td>

  </tr>

  <tr>

    <td>ห้อง</td>

    <td><input name="std_room" type="text" value="<?php echo $result["std_room"] ?>" /></td>

  </tr>

  <tr>

    <td>รหัสนักเรียน</td>

    <td><input name="std_id" type="text" value="<?php echo $result["std_id"] ?>" readonly="readonly" /></td>

  </tr>

  <tr>

    <td>Username</td>

    <td><input name="std_user" type="text" value="<?php echo $result["std_user"] ?>" /></td>

  </tr>

  <tr>

    <td>Password</td>

    <td><input name="std_pass" type="password" value="<?php echo $result["std_pass"] ?>" /></td>

  </tr>

</table>

    <p>

      <input name="submit" type="submit" value="ตกลง" />

    </p>

</form></center>



</body>

</html>