<?php
session_start();
if($_SESSION[unc]==""){
	echo "<script>alert('对不起，本网站需要进行用户登录来验证您的真实身份!如果还没有注册，请先注册！');window.location.href='registerbegin.php';</script>";
	exit();
}
?>

