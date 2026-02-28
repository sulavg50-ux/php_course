<?php
try{
    $a=10;
    $b=0;

    if($b==0){
        throw new Exception("Division by zero is not allowed");
    }
    echo $a/$b;

}
catch(Exception $e){
    echo "Error: ".$e->getMessage();
}
?>
