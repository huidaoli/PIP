<?php
include("conn/conn.php");
$title=$_POST[title];
$content=$_POST[content];
$spid=$_GET[id];
$time=date("Y-m-j");
session_start();
$sql=mysql_query("select * from tb_user where usernc='".$_SESSION[unc]."'",$conn);
$info=mysql_fetch_array($sql);
$userid=$info[id];
mysql_query("insert into tb_pingjia (userid,spid,title,content,time) values ('$userid','$spid','$title','$content','$time') ",$conn);
echo "<script>alert('评论发表成功!');history.back();</script>";
?>