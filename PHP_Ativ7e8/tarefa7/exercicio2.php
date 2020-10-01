
<html>
  <head>
    <title>Tareafa 7 - PHP Exercício 2</title>
  </head>
  <body>
    <?php
    /* Explore em um exemplo o uso de "function", utilize ainda alguma(s) funções do PHP para manipulação de Strings e Arrays.*/


        function printaPilotos(array $pilotos, array $pilotosEstado){
            echo "Pilotos:\n";
            for ($i = 0; $i < qtdPilotos($pilotos); $i++) {
                echo "Piloto: ", $pilotos[$i], "\n";
            }
        }

        function qtdPilotos(array $pilotos){
            return count($pilotos);
        }

        $pilotos = array("Hamilton", "Massa", "Prost","Senna","Grosjean");
        $pilotosEstado = array("Hamilton"=>"ativo", "Massa"=>"aposentado", "Prost"=>"aposentado", "Senna"=>"falecido", "Grosjean"=>"ativo");
        
        printaPilotos($pilotos,$pilotosEstado);
        echo "Total de pilotos: ", qtdPilotos($pilotos);
      ?>
  </body>
</html>

