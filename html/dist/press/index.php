<?php include('inc/global.php'); 

// si no recibo los parametros lo reenvio al pulldown
if (   (($_REQUEST['n']=='') or ($_REQUEST['r']=='')) and (!($_REQUEST['select']=='1'))   ) { ?>

<SCRIPT LANGUAGE="JavaScript">
window.location='<?=$global_path?>/?select=1';
// -->
</script>

<? }

// TRAIGO INFO DEL NEWS

$regid = $_REQUEST['r'];
$sql3 = "SELECT * from regions WHERE reg_id= $regid";
$result3 = mysql_query($sql3, $link);

$regname= mysql_result($result3, 0, "reg_slug");
$reglang= mysql_result($result3, 0, "reg_language");
$regtitle= mysql_result($result3, 0, "reg_name");

///-----------

$newsid = $_REQUEST['n'];
$sql = "SELECT * from newsletters WHERE news_id= $newsid";
$result = mysql_query($sql, $link);

$title= mysql_result($result, 0, "news_title");

if ($reglang=='ES') {
	$titletext= mysql_result($result, 0, "news_titletext_es");
} else {
	$titletext= mysql_result($result, 0, "news_titletext_en");
}

// si no recibo el titulo, lo reenvio con el titulo
if ( ($_REQUEST['t']=='') and (!($_REQUEST['select']=='1')) )  { ?>

<SCRIPT LANGUAGE="JavaScript">
window.location='<?=$global_path?>/?r=<?=$_REQUEST['r']?>&n=<?=$_REQUEST['n']?>&t=<?=$title?>';
// -->
</script>

<? } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/front.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newsletter <?=$regtitle?> <?=$titletext?> : BridgerConway</title>

<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/animatedcollapse.js"></script>

<Script Languaje="JAVASCRIPT">
<!--
	
<?
$resultverarc = mysql_query("SELECT * FROM newsletters where news_pub!='N'", $link);
while ($rowverarc = mysql_fetch_array($resultverarc)){  ?>

animatedcollapse.addDiv('moduloN<?=$rowverarc[0]?>', 'fade=1,speed=400,group=N1,hide=1')

<? } ?>

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	
}

animatedcollapse.init()
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}


	
//-->
</SCRIPT>

</head>

<body>
<? include('inc/header.php'); ?>
<? if ($_REQUEST['select']=='1') { ?>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="42" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="200" valign="top">
      
      
      <form>
        <select name="select" id="select" onChange="SendInfo();" class="inputselect" style="width:190px">
          <option value="#">--</option>
          
          <?
                
$resultselect = mysql_query("SELECT * FROM newsletters where news_pub!='N'", $link);
while ($row = mysql_fetch_array($resultselect)){ ?>
          
          <option value="<?=$global_path?>/?r=<?=$row[4]?>&n=<?=$row[0]?>&t=<?=$row[1]?>">Newsletter <?=$row[1]?></option>
          
          <? } ?>       
          
        </select>
      </form>
      
      
    </td>
  </tr>
</table>
<? } else { ?>
<table width="100" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38">&nbsp;</td>
  </tr>
</table>
<table width="1010" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table border="0" cellpadding="0" cellspacing="0">
      <?php 
$regid = $_REQUEST['r'];
$result2 = mysql_query("SELECT * from articles WHERE art_idnews = $newsid and art_idregion= $regid and art_publanding !='N' order by art_order asc", $link);
$max=mysql_num_rows($result2);

$x=0;
//$xm=1;

while ($x < $max){ 

?>
      <tr>
        <?php 
$y=0;
while ($y < 4){
if ($x < $max){ 

?>
        <td width="15">&nbsp;</td>
        <td width="205" valign="top"><table width="205" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#f3f3f3"><a href="<?=$global_path?>/article/?aid=<?=mysql_result($result2,$x,"art_id")?>&n=<?=$newsid?>&amp;r=<?=$regid?>&amp;t=<?=$regname?>/<?=mysql_result($result2,$x,"art_slug")?>"><img src="<?=$global_pathupload?>/images/<?=mysql_result($result2,$x,"art_image")?>" width="225" border="0" /></a></td>
            </tr>
          <tr>
            <td height="14"></td>
            </tr>
          <tr>
            <td style="line-height:15px"><a href="<?=$global_path?>/article/?aid=<?=mysql_result($result2,$x,"art_id")?>&n=<?=$newsid?>&amp;r=<?=$regid?>&amp;t=<?=$regname?>/<?=mysql_result($result2,$x,"art_slug")?>" class="link1"><strong><?=utf8_encode(mysql_result($result2,$x,"art_title"))?></strong></a></td>
            </tr>
          <tr>
            <td height="4"></td>
            </tr>
          <tr>
            <td class="textart"><?=utf8_encode(mysql_result($result2,$x,"art_summary"))?></td>
            </tr>
          <tr>
            <td height="42">
            
            
            <table border="0" cellpadding="0" cellspacing="0" style="background-color:#dbdbdb">
              <tr>
                <td style="background-color:#dbdbdb; padding-bottom:1px; padding-left:5px; padding-right:5px"><a href="<?=$global_path?>/article/?aid=<?=mysql_result($result2,$x,"art_id")?>&n=<?=$newsid?>&r=<?=$regid?>&t=<?=$regname?>/<?=mysql_result($result2,$x,"art_slug")?>" style="font-family:Arial; font-size:9px; color:#333333; text-decoration:none"><? if ($reglang=='ES') { echo 'VER&nbsp;MAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+'; } else if ($reglang=='EN') { echo 'VIEW&nbsp;MORE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+'; } ?></a></td>
              </tr>
            </table>
            
            
            
            
         </td>
            </tr>
          <tr>
            <td height="10"></td>
            </tr>
          </table></td>
        <td width="15">&nbsp;</td>
        <? }
	$y++;
	$x++;
	//$xm++;
}
?>
        </tr>
      <?php 

} 

?>
    </table></td>
  </tr>
</table>
<? } ?>
<? include('inc/footer.php'); ?>
<script language="javascript">
function SendInfo()
{
 window.location = document.getElementById("select").value
}
</script>
</body>
</html>
