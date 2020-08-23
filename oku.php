<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>İletişim Formu Gelenler</title>
<style type="text/css">
  table.customTable {
  width: 100%;
  background-color: #FFFFFF;
  border-collapse: collapse;
  border-width: 1px;
  border-color: #0C7BB3;
  border-style: solid;
  color: #000000;
}
 
table.customTable td, table.customTable th {
  border-width: 1px;
  border-color: #d1d1d2;
  border-style: solid;
  padding: 12px;
}
 
table.customTable thead {
  background-color: #86DE95;
}
</style>
</head>
<body>
<?php 
 
$dosya = fopen('table.txt', 'r');
$icerik = fread($dosya, filesize('table.txt'));
 
        
$degis = array(
"d"  => "c",
"e"  => "ç",
"f"  => "d",
"g"  => "e",
"ğ"  => "f",
"h"  => "g",
"ı"  => "ğ",
"i"  => "h",
"j"  => "ı",
"k"  => "i",
"l"  => "j",
"m"  => "k",
"n"  => "l",
"o"  => "m",
"ö"  => "n",
"p"  => "o",
"r"  => "ö",
"s"  => "p",
"ş"  => "r",
"t"  => "s",
"u"  => "ş",
"ü"  => "t",
"v"  => "u",
"y"  => "ü",
"z"  => "v",
"a"  => "y",
"b"  => "z",
"c"  => "a",
"ç"  => "b",
        );
    
    $sonhal = strtr($icerik,$degis);
echo "<table class='customTable'><thead><tr><th>İsim</th><th>E-posta</th><th>Tarih</th><th>Mesaj</th></tr></thead><tbody>".$sonhal." </tbody></table>";
fclose($dosya);
?>
 
 
</body>
</html>
