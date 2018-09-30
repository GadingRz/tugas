<html>
<head>
  <title>latihan</title>
</head>
<body>
<?php
 $nim=  "927329297";
 $nama= "Gading Rianto Alamsyah";
 $kelas= "XI RPL 1";
 $umur=23;
 $nilai=82.25;
 $status=TRUE;
 echo "NIM :".$nim."<br>";
 echo "Nama : $nama<br>";
 echo "Kelas : $kelas<br>";
 print"Umur :". $umur;print"<br>";
 printf("nilai : %.3f<br>",$nilai);
 if($status)
 echo "status : aktif";
 else {
   echo "Status :Tidak aktif";
 }
 ?>
<p>
 <?php
 $a=10;
 $b=5;
 
echo "10 ~ 5 ~ ", $a + $b /2, "<br>";
echo "10 ~ 6 ~ ", ($a + 6 - 9) /2, "<br>";
echo "10 ~ 6 ~ ", ($a + 6 - 9) /2, "~", (6 - ($a + 6 - 9) /2 ) * 2 *$a, "<br>";
echo "11 ~ 6 ~ ", (11 + 6) /-2 +2, "~" , ((11 + 6) /-2 +2) * -2 - 7 + 100, "<br>" ;
echo "11 ~ 5 ~ ", (11 + $b) * -1 + 5.5 , "<br>";
echo "13 ~ 4 ~ ", (13 - 4) * -1 + 2.5, "<br>";
echo "13 ~ 4 ~ ", (13 - 4) * -1 + 3.44, "<br>";
echo "12 ~ 3 ~ ", (12 - 3) * -1 + 3.44, "<br>";
echo "11 ~ 4 ~ ", (11 - 4) * -1 + 1.5, " ~ " ,(11 - 4) - 1.5 + 0.5;

  ?>

</body>
</html>
