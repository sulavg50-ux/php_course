<!-- function with parameter -->
<?php
function myname($name){
    echo "My name is ";
    echo $name;
}

myname("Sulav");
?>

<br><br>

<?php
function add($a,$b)
{
    $sum = $a + $b;
    echo "Sum is ";
    echo $sum;
}

add(16,34);
?>

<!-- function with return value -->
<br><br>
<?php
function mul($a,$b){
    $multiply=$a*$b;
    return $multiply;
}

$result=mul(10,23);

echo "Multiply is:";
echo $result;
?>

<br><br>
<!-- default parameter -->
<?php
function div($a=13,$b=130){
    $d=$b/$a;
    echo "The division is";
    echo $d;
}
div();

?>