<?php
$var1 =$_POST["gading1"];
$var2 =$_POST["gading2"];
$var3 =$_POST["operator"];
if ($var3==""){
echo "Pilih Operator dahulu";
}
else if ($var3=="+"){
$jumlah=$var1 + $var2;
echo "$var1 + $var2 = $jumlah";
}
else if ($var3=="-"){
$jumlah=$var1 - $var2;
echo "$var1 - $var2 = $jumlah";
}
else if ($var3=="/"){
$jumlah=$var1 / $var2;
echo "$var1 / $var2 = $jumlah";
}
else if ($var3=="*"){
$jumlah=$var1 * $var2;
echo "$var1 * $var2 = $jumlah";
}
else if($var3=="%"){
$jumlah=$var1 % $var2;
echo "$var1 % $var2 = $jumlah";
}
?>