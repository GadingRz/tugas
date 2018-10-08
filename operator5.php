<?php
$var1 =$_POST["gading1"];
$var2 =$_POST["gading2"];
$var3 =$_POST["operator"];
if ($var1=="True"){
$var1="1";
}
else if ($var1=="False"){
$var1="0";
}
if ($var2=="True"){
$var2="1";
}
else if ($var2=="False"){
$var2="0";
}
else if ($var2==""){
$var2="null";
}
if ($var3==""){
echo "Pilih Operator dahulu";
}
else if ($var3=="and"){
$jumlah=$var1&&$var2;
echo "$var1&&$var2 ";
if ($jumlah==1)
echo "<br>TRUE";
if ($jumlah!=1)
echo "<br>FALSE";
}
else if ($var3=="or"){
$jumlah=$var1 || $var2;
echo "$var1 || $var2";
if ($jumlah==1)
echo "<br>TRUE";
if ($jumlah!=1)
echo "<br>FALSE";
}
else if ($var3=="xor"){
$jumlah=$var1 xor $var2;
echo "$var1 xor $var2";
if ($jumlah==1)
echo "<br>TRUE";
if ($jumlah!=1)
echo "<br>FALSE";
}
else if ($var3=="not"){
if ($var1==1)
echo "<br>False";
if ($var1==0)
echo "<br>True";
}
?>