<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
    
    function calcular_bonus($salario) {
        $bonus = 0;
        if ($salario < 2000){
            $bonus = $salario * 0.20;
        } else if($salario <= 4000){
            $bonus = $salario * 0.15;
        } else if($salario <= 7000){
            $bonus = $salario * 0.10;
        } else {
            $bonus = $salario * 0.05;
        } 

        return $bonus;
        
    }
    
    $salario = 10000;
        $bonus = calcular_bonus($salario);
        $salario_final = $salario + $bonus;

        echo "O salário original é de: R$" . $salario . " Reais!" . "<br>";
        echo "O bonus recebido é de: R$" . $bonus . " Reais!" . "<br>";
        echo "O salário final é de: R$" . $salario_final . " Reais!" . "<br>";
    
    ?>

</body>
</html>