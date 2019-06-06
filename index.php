<?php
//criando uma variável que contenha um array.
$alunos=array("Brian","Camila","Ana","Douglas");
//mostrando os valores do array conforme o valor do índice: 
echo $alunos[0];//mostrar Brian
echo "<br/>";//apenas para quebrar a linha
echo $alunos[2];// mostrará Ana

//Adicionando um item ao array:
$alunos[]="Elisa";
//novo: função var_dump para descobrir o que há dentro de uma varíavel:
echo "<hr/>";//apenas para criar uma linha separando os dados de cima.

var_dump($alunos);

echo"<hr />";//apenas criar uma linha separando os dados de cima 
$logins = array( array ( "aluno","123"),
          array("tiago","etec"),
          array("user","pass")
        );
        //var dump($logins);

       echo $logins[2][0]; //MOSTRAR USER

?>