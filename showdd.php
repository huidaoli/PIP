<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��λ���뵥</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style5 {
	color: #000000;
	font-weight: bold;
}
.style6 {color: #000000}
.style7 {color: #990000}
-->
</style>
</head>
<?php
  include("conn/conn.php");
  $dingdanhao=$_GET[dd];
  $sql=mysql_query("select * from tb_dingdan where dingdanhao='".$dingdanhao."'",$conn);
  $info=mysql_fetch_array($sql);
  $spc=$info[spc];
  $slc=$info[slc];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);
?>
<body topmargin="0" leftmargin="0" bottommargin="0" class="scrollbar">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="306" bgcolor="#FFFFFF"><table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#FFEDBF"><div align="center" class="style7">��ϲ<?php echo $_SESSION[unc];?>�����ѳɹ����ύ�˴����뵥!��ϸ��Ϣ����:</div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left"><span class="style5">&nbsp;���뵥�ţ�</span><?php echo $dingdanhao;?></div>������£��Ա��´β�ѯ���ã�</td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left" class="style5">&nbsp;��λ�б�(����)��</div></td>
      </tr>
    </table>
      <table width="592" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="574" bgcolor="#666666"><table width="593" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr bgcolor="#FFEDBF">
                <td width="215" height="20"><div align="center" class="style7">��λ����</div></td>
                <td width="112"><div align="center" class="style7">���뿪ʼʱ��</div></td>
                <td width="235"><div align="center" class="style7">�����ֹʱ��</div></td>
               
              </tr>
     <?php
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
 		if($arraysp[$i]!=""){
	     $sql1=mysql_query("select * from tb_gouwu where id='".$arraysp[$i]."'",$conn);
	     $info1=mysql_fetch_array($sql1);
		 $total=$total+=$arraysl[$i]*$info1[huiyuanjia];
	  ?>
              <tr bgcolor="#FFFFFF">
                <td height="20"><div align="center"><?php echo $info1[mingcheng];?></div></td>
                <td height="20"><div align="center"><?php echo $info1[shichangjia];?></div></td>
                <td height="20"><div align="center"><?php echo $info1[huiyuanjia];?></div></td>      
               
              </tr>
              <?php
	   }
	   }
	 ?>
              <tr bgcolor="#FFFFFF">
                <td height="20" colspan="5">
                  <div align="right"></div></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="599" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF">
          <td width="89" height="20" align="center"><div align="left" class="style6">&nbsp;�����ˣ�</div></td>
          <td colspan="3"><div align="left"><?php echo $_SESSION[unc];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;������</div></td>
          <td height="20" colspan="3"><div align="left"><?php echo $info[shouhuoren];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;�����˵�ַ��</div></td>
          <td height="20" colspan="3"><div align="left"><?php echo $info[dizhi];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;��&nbsp;&nbsp;�ࣺ</div></td>
          <td width="153" height="20"><div align="left"><?php echo $info[youbian];?></div></td>
          <td width="69"><div align="left" class="style6">&nbsp;��&nbsp;&nbsp;����</div></td>
          <td width="240"><div align="left"><?php echo $info[tel];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;E-mail:</div></td>
          <td height="20"><div align="left"><?php echo $info[email];?></div></td>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20">&nbsp;</td>
          <td height="20"><div align="center">
              <input name="button" type="button" class="buttoncss" onClick="window.close()" value="�رմ���">
          </div></td>
          <td height="20"><div align="center" class="style6">����ʱ�䣺</div></td>
          <td height="20"><div align="left"><?php echo $info[time];?></div></td>
        </tr>
      </table>
<?php
$_SESSION[producelist]="";
$_SESSION[quatity]=""; 
?></td>
  </tr>
</table>
</body>
</html>