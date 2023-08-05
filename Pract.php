<!DOCTYPE html>
<html>
    <head>
        <title> Factorial de numero </title>
    </head>
<body>
    

    <form method="post" action="lab2.php">
    ingrese numero: <br>
    <input type="text" name="num" size="3" />
    <p>
   
    <input type="submit" name="btnEnvia" value="Enviar" />
<?php

$num=$_POST["num"];

$p=$num/2+1;
$f=1;
for($i=2;$p;$i++){
    if($num % $i ==0){
        $f=0;
        
    }

}
if($f==1){
    echo "<br>El numero $num Si es Primo";
}
else {
    echo "<br>El numero $num No es primo";
}

?>
</body>
</html>
