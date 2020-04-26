<head>
<title> Conditional operators</title>
<?php
$x=1;
while($x<=9){
echo "abc  ";
$x++;
}
echo"<br>";
$y=1;
do{
echo "xyz ";
$y++;
} while($y<=9);
echo "<br>";
for($z=1;$z<=9;$z++){
echo "$z ";
}
echo "<br>";
for($m=1,$n='A';$m<=6,$n<='F';$m++,$n++){
   echo $m.".  Item ".$n;
  echo "<br>";
}


?>
</body>
</head>

