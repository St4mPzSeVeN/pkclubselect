<?php
include('connect.php');
$name = $_POST["name"];
$email = $_POST["email_address"];
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$password = substr(str_shuffle($chars), 0, 4);
$to = $email;
$subject = 'การเปลี่ยนรหัสผ่านของคุณเสร็จสิ้นแล้ว!';
$message = 'สวัสดี คุณ' . $name . ''
            . 'อีเมล และ รหัสผ่านหใหม่ที่ระบบได้สุ่มให้คือ '
            . 'อีเมล :' . $email . ''
            . 'รหัสผ่านใหม่ : ' . $password . ''
            . 'ตอนนี้คุณสามารถใช้อีเมลและรหัสผ่านใหม่ของคุณได้แล้ว และโปรดเปลี่ยนรหัสผ่านของคุณใหม่เพื่อความปลอดภัยด้วย';
$headers = 'From: Webmaster@pkclubselect.com';
mail($to, $subject, $message, $headers);
echo $sql = "UPDATE stu_data SET std_pass = '$password' WHERE stu_data.std_user = '$email'";
$query = mysqli_query($e,$sql);
if($query)
	{
		header('Location:login.php');
		}
else
	{
		header('Location:forgotpassword.php');
		}
	
?>