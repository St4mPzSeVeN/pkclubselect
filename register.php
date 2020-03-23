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
  .container-sm {
    width: 45%;
  }
  body{
    font-family: 'Prompt', sans-serif;
  }

  .carousel-inner img {
      width: 700px;
      height: 430px;
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
    <li class="nav-item ">
      <a class="nav-link" href="login.php"><i class="fas fa-key"></i> เข้าสู่ระบบ</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="register.php"><i class="fas fa-address-book"></i> สมัครสมาชิค</a>
    </li>
     
  </ul>
  </div>
</nav>
</div>
      &nbsp;
  <div class="container-sm border"><center>
    <h1 style="text-align: all;">สมัครสมาชิก</h1>
    <form action="checkregis.php" method="post"><table width="40%" border="0" cellspacing="5" cellpadding="2">
  <tr align="center">
    <td width="30%" align="center">ชื่อ&nbsp;</td>
    <td  width="10%"><input name="std_name" type="text" required="required"/></td>
  </tr>
  <tr align="center" align="center">
    <td width="30%" align="center">สกุล&nbsp;</td>
    <td><input name="std_lname" type="text" required="required"/></td>
  </tr>
  <tr align="center" align="center" align="center">
    <td width="30%" align="center">เพศ&nbsp;</td>
    <td><input name="std_gen" type="radio" value="1" required="required"/>ชาย<input name="std_gen" type="radio" value="2" required="required"/>หญิง</td>
  </tr>
  <tr align="center">
    <td width="30%" align="center">ระดับชั้น</td>
    <td><select name="std_level" required="required">
      <option value="m1">ม.1</option>
      <option value="m2">ม.2</option>
      <option value="m3">ม.3</option>
      <option value="m4">ม.4</option>
      <option value="m5">ม.5</option>
      <option value="m6">ม.6</option>
    </select></td>
  </tr>
  <tr align="center">
    <td width="30%" align="center">ห้อง&nbsp;</td>
    <td><input name="std_room" type="text" required="required"/></td>
  </tr>
  <tr align="center">
    <td width="30%" align="center">รหัสนักเรียน&nbsp;</td>
    <td><input name="std_id" type="text" required="required"/></td>
  </tr>
  <tr align="center">
    <td width="30%" align="center">Username&nbsp;</td>
    <td><input name="std_user" type="text" required="required"/></td>
  </tr>
  <tr align="center">
    <td width="30%" align="center">Password&nbsp;</td>
    <td><input name="std_pass" type="password" required="required"/></td>
  </tr>
</table>
&nbsp;
    <p>
      <input name="submit" type="submit" class="btn btn-success" value="ตกลง" />
    </p>
</form>
  </center></div>
</body>
</html>