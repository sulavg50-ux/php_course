<?php
function factorial($n){
    if($n == 1){
        return 1;
    }
    else{
        return $n * factorial($n - 1);
    }
}

$num = 5;
echo "Factorial of $num is: ";
echo factorial($num);
?>

<br><br>
<?php
function natural($n){
    if($n==0){
        return 0;
    }
    elseif($n==1){
        return 1;
    }
    else{
        return $n+natural($n-1);
    }
}
$nat=natural(5);
echo "The natural is: ";
echo $nat;


?>
