   
   
   <?php

   // Faça um programa que calcule a média de um aluno, sabendo que esse aluno tem 2 notas e a media tem que ser maior que 6 para ser aprovado.//
    
   $nota1 = $_POST['notaum'];
   $nota2 = $_POST['notadois'];
   $resultado = ($nota1 + $nota2)/2;

   if($resultado < 6){
       echo "Sua média anual é $resultado, foi reprovado!";
   } elseif ($resultado > 6){
      echo "Sua méda anual é $resultado, foi aprovado!";
   }
   
    ?>