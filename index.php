<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
     
    
        $frutas = [
            ["nome" => "banana", "estoque" => 3],
            ["nome" => "pera", "estoque" => 5] 
            ];
        
            foreach ($frutas as $indice => $fruta) {
                foreach ($fruta as $indice2=>$valor){
                    echo "$indice2 - $valor<br>";
                }
            }
    ?>

<!--
1- o primeiro foreach // foreach ($frutas // pega o primeiro item de $frutas, que é: $frutas[0] = ["nome" => "banana", "estoque" => 3]

2- $indice // ($frutas as $indice // $indice irá salvar o número do índice, que é: 0

3- $fruta // as $indice => $fruta) // irá salvar tudo que tem dentro desse indice [0] que é: ["nome" => "banana", "estoque" => 3]

4 - Agora entraremos no segundo foreach

5 - o segundo foreach // foreach ($fruta // pega $fruta, e como vimos no passo 3, $fruta nesse momento vale: ["nome" => "banana", "estoque" => 3]

6- $indice 2 // ($fruta as $indice2 //  O segundo foreach pega o primeiro par chave-valor dentro de $fruta, que é: "nome" => "banana"

7- $valor // $indice2=>$valor)// O segundo foreach irá separar esse par chave-valor em duas partes. A primeira parte, "nome", vai para $indice2. A segunda parte, "banana", vai para $valor.

8- Agora, ainda dentro da primeira volta do segundo foreach, o echo é executado.

9- echo $indice2, irá mostrar o que temos salvo atualmente no $indice2, e como vimos no passo 6 e 7, no $indice dois atualmente temos: "nome"

10- agora temos a segunda parte do echo, que é echo $valor

11- echo $valor irá mostrar o que temos salvo atualmente em valor, e como vimos no passo 7, no $valor atualmente temos: "banana"

12 como no código temos: echo "$indice2 - $valor<br>"; // na saida teremos: nome - banana

13 - após o echo,  voltamos para o segundo foreach

14- O segundo foreach pega o próximo par chave-valor dentro de $fruta: "estoque" => 3

15- A chave vai para $indice2: $indice2 = "estoque"

16- O valor vai para $valor: $valor = 3

17- O echo mostra: estoque 3
-->

</body>
</html>




