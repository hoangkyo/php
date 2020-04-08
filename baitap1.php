<?php 
echo "<h1><center>Giải phương trình bậc 2 : ax^2 + bx + c = 0</center></h1>";
echo "<br><h2>Trường hợp 1 : Phương trình vô nghiệm khi delta bé hơn 0 .</h2>";
echo "<br>A=4 ; B=2 ; C=1";
$a = 4;
$b = 2;
$c = 1 ;
$result = '';
$delta = ($b*$b) - (4*$a*$c);
echo "<br>Delta bằng : ".$delta;
if ($delta < 0){
        echo '<br>Phương trình vô nghiệm';
    }
    else if ($delta == 0){
        echo  '<br>Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        echo  '<br>Phương trình có hai nghiệp phân biệt: x1 = ' . ((-$b + sqrt($delta))/2*$a).',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }
echo "<br><br><h2>Trường hợp 2 : Phương trình có nghiệm kép khi delta bằng 0 .</h2>";
echo "<br>A=2 ; B=4 ; C=2";
$a = 2;
$b = 4;
$c = 2 ;
$result = '';
$delta = ($b*$b) - (4*$a*$c);
echo "<br>Delta bằng : ".$delta;
if ($delta < 0){
        echo '<br>Phương trình vô nghiệm';
    }
    else if ($delta == 0){
        echo  '<br>Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        echo  '<br>Phương trình có hai nghiệp phân biệt: x1 = ' . ((-$b + sqrt($delta))/2*$a).',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }
echo "<br><br><h2>Trường hợp 3 : Phương trình có hai nghiệm phân biệt .</h2>";
echo "<br>A=2 ; B=4 ; C=1";
$a = 2;
$b = 4;
$c = 1 ;
$result = '';
$delta = ($b*$b) - (4*$a*$c);
echo "<br>Delta bằng : ".$delta;
if ($delta < 0){
        echo '<br>Phương trình vô nghiệm';
    }
    else if ($delta == 0){
        echo  '<br>Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
    }
    else {
        echo  '<br>Phương trình có hai nghiệp phân biệt: x1 = ' . ((-$b + sqrt($delta))/2*$a).',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }

 ?>