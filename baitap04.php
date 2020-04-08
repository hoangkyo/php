<?php 
echo "<h3>Cho Mảng : 1 4 2 6 9 100 45 8 20";
 $arr = array(1,4,2,6,9,100,45,8,20);
 $sll= null;
for ($i = 0; $i < count($arr); $i++)
{
    if ($sll == null)
    {
        $sll = $arr[$i];
    }
    else {
        if ($arr[$i] > $sll){
            $sll = $arr[$i];
        }
    }
}
echo "<br>Phần tử lớn nhất của mảng là: $sll</h3>";
 ?>