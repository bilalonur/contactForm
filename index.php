<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>İletişim Formu</title>
<style type="text/css"> 
.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 10px 20px;
  border: 1px solid #b7b7b7;
  -webkit-border-radius: 7px;
  border-radius: 7px;
  font: normal 16px/normal "Times New Roman", Times, serif;
  color: rgba(0,0,0,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(252,252,252,1);
  -webkit-transition: all 200ms cubic-bezier(0.52, -0.005, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.52, -0.005, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.52, -0.005, 0.58, 1);
  transition: all 200ms cubic-bezier(0.52, -0.005, 0.58, 1);
}
.enjoy-css2 {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 9px;
  border-radius: 9px;
  font: normal 16px/normal "Lucida Sans Unicode", "Lucida Grande", sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #0199d9;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.715, 0.48, 0.255, 0.56) 1ms;
  -moz-transition: all 300ms cubic-bezier(0.715, 0.48, 0.255, 0.56) 1ms;
  -o-transition: all 300ms cubic-bezier(0.715, 0.48, 0.255, 0.56) 1ms;
  transition: all 300ms cubic-bezier(0.715, 0.48, 0.255, 0.56) 1ms;
}
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
  border-color: #0C7BB3;
  border-style: solid;
  padding: 12px;
}
 
table.customTable thead {
  background-color: #25CC41;
}
</style>
</head>
<body>
<form id="ilt" action="#" method="POST">
<p>İsim ve Soyisim: </p><input type="text" name="ad" class="enjoy-css"/>
<p>E-Posta: </p>    <input name="eposta" type="email" class="enjoy-css"/>
<p>Mesajınız: </p> <p> <textarea form="ilt" name="mesaj" rows="10" cols="65"></textarea></p>
 
<input type="submit" class="enjoy-css2" value="Gönder"/>
 
</form>
    
    <?php
    /* 
    Form Gönderildikten Sonra
    */
    if($_POST){
        if(empty($_POST['ad']) or empty($_POST['eposta']) or empty($_POST['mesaj'])) {
            
        echo "Hiçbir alanı boş bırakmayın.";
            
        }else{
        $ad = htmlentities(urldecode($_POST['ad']));
        $eposta = htmlentities(urldecode($_POST['eposta']));
        $mesaj = htmlentities(urldecode($_POST['mesaj']));
        $tarih = date("d.m.Y G:i:s");  // Zaman
        $cikti1 = ' <tr>  <td>'.$ad.'</td>  <td>'.$eposta.'</td> <td>'.$tarih.'</td> <td>'.$mesaj.'</td> </tr>';
         
   require_once('crypt.php');
        
    cryp14($cikti1);
    $myfile = fopen("table.txt", "a+") or die("!");
         fwrite($myfile,$sifrelenmis);
	fclose($myfile);
        echo "Başarıyla iletildi.";
        }
    }
    ?>
</body>
</html>
