<?php 
echo "<h1><center>Bài tập 02 : Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</center></h1> ";
echo "<br><h2>Giả định ta có n = 95</h2>";
$n = 95; 
// Tổng ban đầu bằng 0
$tong = 0;

// Bắt đầu lặp và cộng dồn vào biến tổng
for ($i = 1; $i <= $n; $i++){
 
    $tong += $i/$i;
}
 
// In kết quả
echo "<h2><br>Tổng bằng: $tong</h2>";
 ?>