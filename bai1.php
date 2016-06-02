<?php 
echo "<h1>Bảng cửu chương<br></h1>";
echo "<table border='1'>"; 

for ($i=1; $i<=2; $i++) {
    echo "<tr>";
    for($j=1; $j<=5; $j++) {
        echo "<td>";
        for($k=1; $k<=10; $k++) {
            $tmp = (5*($i-1)) + $j;
            $result = $tmp * $k;
            echo "$tmp"."x"."$k"."="."$result"."<br>";
        }
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>"; 
?>