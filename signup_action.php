<?php $name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['num'];
$con = mysqli_connect("엔드포인트","유저아이디","비밀번호","데이터베이스명") or die ("Can't access DB");
$query = "insert into student (name,email,num) values('".$name."','".$email."','".$num."')";
$resut=mysqli_query($con,$query);
if(!$result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href=".."; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href=".."; </script>
<?php } ?>
