<html>
<body>
<?php
echo "<table>";
for($x=1;$x<=7;$x++){
    echo "<tr>";
for($y=1;$y<=7;$y++){
    echo "<td>".$z=$x*$y."</td>";
}
echo "</tr>";
}
echo "</table>";

?>
</body>
</html>