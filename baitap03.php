<center><h1>Bảng Cửu Chương Từ 2 Đến 9 </h1>
<table border="2px">
<tr>
<?php
for($i = 2; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
</center>