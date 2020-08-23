<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
</head>
<body>
<?php

     function cryp14($degisken){
$degis = array(
"a"  => "c",
"b"  => "ç",
"c"  => "d",
"ç"  => "e",
"d"  => "f",
"e"  => "g",
"f"  => "ğ",
"g"  => "h",
"ğ"  => "ı",
"h"  => "i",
"ı"  => "j",
"i"  => "k",
"j"  => "l",
"k"  => "m",
"l"  => "n",
"m"  => "o",
"n"  => "ö",
"o"  => "p",
"ö"  => "r",
"p"  => "s",
"r"  => "ş",
"s"  => "t",
"ş"  => "u",
"t"  => "ü",
"u"  => "v",
"ü"  => "y",
"v"  => "z",
"y"  => "a",
"z"  => "b", 
        );
        global $sifrelenmis;
    $sifrelenmis = strtr($degisken, $degis);
        }
        
        ?>
        </body>
        </html>
