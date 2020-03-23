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
#parent {
   display: table;
   width: 100%;
}
#form_login {
    display: table-cell;
   text-align: center;
   vertical-align: middle;
}
</style>
<div >

<nav class="navbar navbar-expand-xl bg-dark navbar-dark">
<div class="col-sm-9 col-md-9 col-lg-9 col-xs-9">
  <ul class="navbar-nav">
    <li class="nav-item ">
      <a class="nav-link" href="/index.php" ><i class="fas fa-home"></i> หน้าหลัก</a>
    </li>
  </ul>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3">
    <ul class="navbar-nav ">
    <li class="nav-item active">
      <a class="nav-link" href="login.php"><i class="fas fa-key"></i> เข้าสู่ระบบ</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="register.php"><i class="fas fa-address-book"></i> สมัครสมาชิค</a>
    </li>
     
  </ul>
  </div>
</nav>
</div>
<div>
<center>
	&nbsp;
  <h2 style="text-align: center;">ล็อกอินเข้าสู่ระบบ</h2>
  <div class="container pt-3 my-1 text-dark" id="parent">
  <form action="checklog.php" method="get" id="form_login">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input name="usern"class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>
<br>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input name="passw" class="input-field" type="password" placeholder="Password" name="psw">
  </div>
<br>
  <input name="submit" type="submit" class="btn btn-primary" value="ตกลง" />
  </form>
</div>
</center>
</div>
</body>
</html>