<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѧ��ʵϰƽ̨</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="css/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="css/SpryAccordion.js" type="text/javascript"></script>
<link href="css/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="css/SpryAccordion.css" rel="stylesheet" type="text/css" />
<?php include("jspscpljdt.php"); ?>
<table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><div id="TabbedPanels1" class="TabbedPanels" align="center">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">�������� </li>
      <li class="TabbedPanelsTab" tabindex="0">����</li>
      <li class="TabbedPanelsTab" tabindex="0">��̳</li>
      <li class="TabbedPanelsTab" tabindex="0">��������</li>
      <li class="TabbedPanelsTab" tabindex="0">��ҵ��Ѷ</li>
      </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
  <p>����ְҵ�滮��</p>
  <p>һ������ʢ����ҵ�˲�����һ����δ��������ݷݷѧ�ӡ�һ���Ǽ���Ҵ�������ս����һ���ǿ����߸߷������ã��������Ҫר��ָ���Խ򣬷���Ǳ������λȥ��������Ҫʦ����·����ȡ���飬����ʵ�����롣��ҵҲ�ã���ҵҲ�գ������Ͷ���Ȩ�������Ρ���������δ����δ���������ǣ����ǰ����趯�����ǽ�Ϊ���ṩ��ѵ�ְҵ�滮ר�⽲�á������ע�����Ѷ������</p>
  <p>�����˲���ɫ</p>
  <p>���������з���Ŀ�ĸ�λ���󣬽�����ߵ�ԺУ������ǰ�ڵ�ְҵ�滮������������ѧ����Ӣ��ҵ�ʹ��´�ҵ��־Ȥ����ɫ��Ӣ�ʹ�ҵ�˲š�������ɫ�˲ŵı�׼ֻ���ĸ���־��Ǳ�����˸�ͻ������ܡ���ϸ��Ŀ��λ�˲����󣬲μ���Ƹ��Ϣ������</p>
  <a href="##" class="nikon_link">##�������޹�˾</a></div>
      <div class="TabbedPanelsContent">
        <div id=marquees >
        
          <?php
					  $sql=mysql_query("select id,title,createtime,content from tb_tell order by createtime desc limit 0,9",$conn);
					  $info=mysql_fetch_array($sql);
					  if($info==false){
					 ?>
          <p align="left"><a href="#" class="a4">��վ���޹��淢��! </a></p>
          
          <?php
					  }else{ 
					   $i=1;
					    do{
					  ?>
          
          <p align="left"><a href="tellinfo.php?id=<?php echo $info[id];?>" class="a1">
            <?php
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
				      echo $i.".&nbsp;";
					  echo unhtml(msubstr($info[title],0,50));
			          if(strlen($info[title])>50)
			           {
			             echo " ...";
			           }				  
					  echo "[".str_replace("-","/",$info[createtime])."].......�������ݣ�".str_replace("-","/",$info[content]).".";
				    if($i==1)
				    {
					  echo "</font>";
					} 	  				  
					?>
            </a>  
            <?php
					   $i++;
					     }while($info=mysql_fetch_array($sql));
					   }
				?>
  </p>
          </div>        
        </div>
      <div class="TabbedPanelsContent">
        <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 0,3",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
  <p align="left">&nbsp;�����˷�����</p>
        
        <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
        <p align="left"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
          <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["title"],0,40));		
						 if(strlen($infouwz["title"])>40)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]........�������ݣ�".substr(str_replace("-","/",$infouwz[content]),0,30)."</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 

					  ?>
          </a> </p>
        <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
        <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 3,6",$conn);
				while($infouwz=mysql_fetch_array($sqluwz)){
				 ?>
  <p align="left"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
    <?php 
				     
			
						
						echo unhtml(msubstr($infouwz["title"],0,40));
						
						 if(strlen($infouwz["title"])>40)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]........�������ݣ�".substr(str_replace("-","/",$infouwz[content]),0,30)."</font>";	
					  ?>
    </a> </p>            
        <?php
				  }
				 ?>
        </div>
      <div class="TabbedPanelsContent">
        <p><img src="images/image016.png" width="20" height="20" alt="##�������޹�˾" title="##�������޹�˾" /><a href="##" class="nikon_link">##�������޹�˾1</a>&nbsp;|&nbsp; <img src="images/image016.png" width="20" height="20" alt="##�������޹�˾" title="##�������޹�˾" /><a href="##" class="nikon_link">##�������޹�˾1</a>&nbsp;|&nbsp; <img src="images/image016.png" width="20" height="20" alt="##�������޹�˾" title="##�������޹�˾" /><a href="##" class="nikon_link">##�������޹�˾1</a>
        </p>
        </div>
       <div class="TabbedPanelsContent">
		 <div id="Accordion1" class="Accordion" tabindex="0">
   			<div class="AccordionPanel">
     		<div class="AccordionPanelTab">������Ѷ</div>
     	<div class="AccordionPanelContent">
<p align="left"><a href="http://hb.qq.com/a/20120616/000598.htm">����ʦ����������̳���人�ٰ칲�۽�ʦ����ģʽ[2012��06��16��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120530/000455.htm">���人һ��ѧ��ѡ��У�����Ծ�Ƹ���ݽ��Ӣ��[2012��05��30��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000438.htm">���人��ѧ������ʵ������У԰�����Ƭ��������[2012��05��30��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000340.htm">������������ӭʷ�����ϸ߿����ֻ�������������[2012��05��30��]</a> </p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000614.htm">���人�߿�62������"�ֲ�ͼ"��¯ ��ȥ�����1��[2012��05��29��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000540.htm">�����ԭУ��"����"��У�ĸ� "�ߵȽ��������겡"[2012��05��29��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000529.htm">�����4Ů�������ҵ�� ����ɫ��ɴ����ѧ����[2012��05��29��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120528/000420.htm">���人��ѧ��"������"������ӵ��������ů ����Į[2012��05��28��]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120528/000343.htm">�������߿�����"��ˮ"�¸߿� ����ֻ�ܴ�"��֤"[2012��05��28��]</a></p>
</div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">������Ѷ</div>
     <div class="AccordionPanelContent">
     <p align="left"><a href="http://finance.people.com.cn/GB/10338501.html">���й�¥������������� ���������Ż����߻�ֹͣ [11��08��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/164305/9961384.html">��"˫н"������Ϊ��н�Ƹ�˰ [09��01��]</a></p>
<p align="left"><a href="http://www.people.com.cn/GB/98384/99153/9961347.html">�����ݸ���������������������˰ [09��01��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/164305/9961243.html">����˰�ܾ֣����������췿����������������˰ [09��01��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/98384/99153/9941932.html">��������סլά���ʽ��������Ͷ�� [08��27��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/98384/99153/9941896.html">�������������ص��鱣�Ϸ����� [08��27��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940291.html">����󱱾���ҵ������ר��ά���ʽ�����շ� [08��27��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940128.html">������סլά�޽���ȷ�����¥��ɴ� [08��27��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940124.html">�������̳��շѹ����Ǹ߷������� ������������ͬ [08��27��]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9936030.html">��ס�������׶������޼۷������ⷿ��� [08��27��]</a></p>
</div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">��ҵ��Ѷ</div>
     <div class="AccordionPanelContent">
     <p align="center"><a href="http://##�������޹�˾">##�������޹�˾</a></p>
 <p align="left">���������з���Ŀ�ĸ�λ���󣬽�����ߵ�ԺУ������ǰ�ڵ�ְҵ�滮������������ѧ����Ӣ��ҵ�ʹ��´�ҵ��־Ȥ����ɫ��Ӣ�ʹ�ҵ�˲š�������ɫ�˲ŵı�׼ֻ���ĸ���־��Ǳ�����˸�ͻ������ܡ���ϸ��Ŀ��λ�˲����󣬲μ���Ƹ��Ϣ������</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201208/t20120809_53382.html">��������С�����Ųι���򺽿չ�˾��ѵ����</a></p>
<p align="left">��Ϊ"��һ"��ͯ�ڵ��ر�����,"��������С������"��6��3������ι�����򺽿չ�˾��ѵ����,��ʼ������С����ѵ��Ӫ��ĵ�һվ��...</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201207/t20120724_41656.html">Ŧ����"�����ʡ�������"���콡��������</a></p>
<p align="left">æµ�ĳ�������������������ʽ��������ͻ��æӦ�����������д������ڡ� ���ڲ�����ͣ������彡������ɺܴ��Σ��������...</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201207/t20120704_27247.html">ȫ����������TM ϵ����ҫ���� ����������ʿ������������</a></p>
<p align="left">���գ�������������ߵ����ݻ�ױƷƷ�����ˣ�������綥��Ƥ��ר���о��ɹ��������Ƴ���������TM����ϵ�У�Ϊ�������Զ�������Ƥ��������...</p>
     </div>
   </div>
 </div>
  </div>
      </div>
  </div>
  <script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script></tr>

</table> 
<table width="870"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr width="870" align="center">
<td width="870" align="center">&nbsp;</td>
</tr>
<tr width="870" align="center">
<td width="870" align="center">&nbsp;</td>
</tr>
<tr>
<td width="870" align="center"><font color="#000000"><a href="index.php"><font color="#000000">��վ��ҳ</font></a>|<a href="morebccd.php"><font color="#000000">��λ���</font></a>|<a href="morebccd.php"><font color="#000000">��λ����</font></a>|<a href="bbs_index.php"><font color="#000000">��̳</font></a>|<a href="jszc.php?jszc=�ͻ�����"><font color="#000000">�ͻ�����</font></a>|<a href="jszc.php"><font color="#000000">��������</font></a></font></td></tr>
<tr>
<tr>
<td width="870" align="center"><font color="#000000">Copyright &copy; 2012-2020 &nbsp;##�������޹�˾��Ȩ����</font></td></tr>
<tr>
<td width="870" align="center">&nbsp;</td></tr>
</table> 
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
