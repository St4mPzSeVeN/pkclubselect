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

<style>
	body{
		background-color: white;
		font-family: 'Prompt';
		margin:0;
     	padding:0;
   }

   section{
     	height:40vh;
		background-image: url('img/header3.png');
     	overflow:hidden;
     	background-size: cover;
   }
	.carousel-inner img {
      max-width: 80%;
      background-size: auto;
      background-color: white;
  	}
</style>
<body >
<div>
<nav class="navbar navbar-expand-xl bg-dark navbar-dark">
<div class="col-sm-2 col-md-2 col-lg-9 col-xs-2">
  <ul class="navbar-nav">
    <li class="nav-item active" class="col-lg-">
      <a class="nav-link " href="/index.php" ><i class="fas fa-home"></i> หน้าหลัก</a>
    </li>
  </ul>
  </div>
  <div class="col-sm-2 col-md-2 col-lg-3 col-xs-2">
    <ul class="navbar-nav ">
    <li class="nav-item ">
      <a class="nav-link" href="login.php"><i class="fas fa-key"></i> เข้าสู่ระบบ</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="register.php"><i class="fas fa-address-book"></i> สมัครสมาชิค</a>
    </li>
  </ul>
</div>
  </nav>
</div>
<section>
</section>

<div class="container-fluid" style="background-color: #343a40; height: 5vh">
</div>

<center>
<div class="container-fluid text-dark" style="background-image: url('img/home-4.jpg'); background-repeat: no-repeat; background-size: cover; padding-top: 20vh; padding-bottom: 20vh">

		<h4 style="background-color: hsla(0, 0%, 100%, 0.5); "><br>สามารถสมัครสมาชิคได้ที่ปุ่มสมัครสมาชิค <br>และควร Logout ทุกครั้งหลังใช้งานเสร็จแล้ว<br>
			ระบบอยู่ในช่วงทดลอง หากมีข้อผิดพลาด<br>ให้ติดต่อผู้พัฒนาเว็บไซต์ที่อีเมล <br>jiwjirawat@gmail.com<br>
			หรือติดต่ออาจารย์ อรจิรา มีศรี<br><br>
		</h4>

</div>
</center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">

        $('section').mousemove(function(e){

          var moveX = (e.pageX * -0.5 / 45);
          var moveY = (e.pageY * -0.5 / 45);
          $(this).css('background-position', moveX + 'px ' + moveY + 'px')
          
        });
    
    </script>

</body>
</html>