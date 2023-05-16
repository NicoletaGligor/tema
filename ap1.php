<?php
$a=20;
$b=10;
$adunare=$a+$b;
echo "$a+$b=$adunare";
?>

<br>

<?php

$a=20;
$b=10;
$scadere=$a-$b;
echo "$a-$b=$scadere"
?>

<br>

<?php

$a=20;
$b=10;
$impartire=$a/$b;
echo "$a/$b=$impartire"
?>

<br>

<?php
$a=20;
$b=10;
$inmultire=$a*$b;
echo "$a*$b=$inmultire"
?>


<br>


<?php
for ($i = 91; $i <= 100; $i++) {
    echo $i;
    if ($i < 100) {
        echo "-";
    }
}
?>

<br>


<?php
$numere=array(64, 8, 15, 16, 24, 90, 46);
for ($i=0; $i < count($numere); $i++) {
    if ($numere [$i] % 8 ==0) {
        echo $numere [$i]. " ";
    }
    
}

?>

<br>

<?php
$total=0;
for ($i=130; $i<=160; $i++) {
    $total +=$i;
}
   echo "130+131+132+133+...+160=" . $total;
   ?>


<br>



<?php
$total = 1200;
$rata_dobanda = 0.10;

for ($i = 1; $i <= 5; $i++) {
    $dobanda = $total * $rata_dobanda;
    $total = $total + $dobanda;
    echo "La sfarsitul anului " . $i . ", soldul este: " . $total . " euro.<br>";
}
?>

<br>

<?php
$grade_celsius=20;
$farenheit=($grade_celsius*1.8) + 32;
echo $grade_celsius."grade Celsius reprezinta".$farenheit."grade Farenheit.";
?>

<br>

<?php
$suma=500;
$valoare=125;
$procent=($valoare/$suma)*100;
echo $procent . "%";
?>

<br>

<?php
$total= 2023 + intval("douamiidouazecisitrei") + intval("36star3");
echo $total;
?>
