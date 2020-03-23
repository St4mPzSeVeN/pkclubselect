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
?>

<nav class="navbar navbar-expand-xl bg-primary navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php" ><i class="fas fa-home"></i> หน้าหลัก</a>
    </li>
  </ul>
</nav>
<div class="container pt-3 my-5 border" style="text-align: center;">
  <h4>
    โปรดกรอกชื่อจริง และ อีเมลของท่าน เพื่อรับรหัสผ่านใหม่ในการเข้าใช้งาน
  </h4>
  &nbsp;
  <form action="checkforgot.php" method="post">
  ชื่อ : <input name="name" placeholder="กรอกชื่อของท่าน" type="text" /><br><br>
  ชื่อผู้ใช้ : <input name="email_address" placeholder="กรอกชื่อผู้ใช้ของท่าน" type="text" /><br><br>
  <input name="submit" type="submit" class="btn btn-primary" value="ตกลง" />
  </form>
  &nbsp;
</div>
</body>
</html>