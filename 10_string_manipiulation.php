<!-- Performing operation on string like> -->
 <!--
Length
Uppercase / Lowercase
Replace
Reverse
Compare
Extract substring -->


<!-- length of string -->
<?php
$str="Sulav";
echo strlen($str);
?>
<br><br>
<!-- strtoupper() and strtolower() -->
<?php
$str="Sulav Giri";
echo strtoupper($str);
echo strtolower($str);
?>

<!-- reverse -->
<br><br>
<?php
$str="Hello";
echo strrev($str);
?>

<!-- replace -->
<?php
$str="I learn php";
echo str_replace("php","Javascript",$str);
?>

<br><br>
<!-- substr() -->
 <?php
$str="Kathmandu";
echo substr($str,0,4);

 ?>

 <!-- explode() convert string to array -->
<?php
$str = "apple,banana,mango";
$arr = explode(",", $str);
print_r($arr);
?>

<br><br>
<!-- implode() convert array to string -->
<?php
$arr= array("apple","banana","orange");
echo implode("-",$arr);
?>

<br><br>
<?php
echo strpos("Hello Sulav","Sulav")  //Find Position of sulav
?>

