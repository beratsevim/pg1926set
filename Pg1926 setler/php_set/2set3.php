<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Asal Sayı Bulma -2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
<?php
$sayi=$_POST['sayi'];
 
$asal=0;
if($sayi == 2)
{
	$sonuc="Sayı Asal Değildir";
}
else{
for($i=2; $i < $sayi; $i++){
  if($sayi == 2){
    $asal=0;
  }
	else if ($sayi % $i == 0){
     $asal = 1;
	}
} 
if ($asal != 1)
{
	$sonuc="Sayı Asaldır";
}
else{
  $sonuc="Sayı Asal Değildir";
}
}
?>
 
<table width="435" border="5" bgcolor="#FFFF66" align="center"> 
  <tr bgcolor="#00FA9A">
    <td style="font-size:20px; font-weight:800;" colspan="2" align="center">PHP Asal Sayı Bulma</td>
  </tr>
  <tr bgcolor="#00FF00">
    <td width="206" style="text-align:center; font-size:20px; font-weight:500;">Girilen Sayı:</td>
    <td width="213" style= "font-size:19px;" ><?php echo $sayi; ?></td>
  </tr>
  <tr bgcolor="#00FA9A">
    <td colspan="2">
    
<h1 style="margin:15px 0px; text-align:center;"><?php echo $sonuc; ?>  </h1>
 
    
    </td>
  </tr>
</table>
<a HREF="javascript:javascript:history.go(-1)">Geri dön</a>
<br/>

</body>
</html>