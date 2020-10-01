
<html>
  <head>
    <title>Tareafa 7 - PHP Exercício 3</title>
  </head>
  <body>
    <?php
    /* Tarefa 7 - exercício 3 - Contador de visitas a páginas*/
    /* Obs: como não consegui fazer funcionar na web, fiz um contador baseado na quantidade de execuções*/
    $myfile = fopen("arquivo.txt", "r") or die("Não foi possível abrir o arquivo");
    $lines = fgets($myfile);
    fclose($myfile);
    $qtd = (int)$lines;
    $qtd++;
    echo "Este código foi executado ", $qtd, " vezes \n";
    $myfile = fopen("arquivo.txt", "w") or die("Não foi possível abrir o arquivo");
    fwrite($myfile, $qtd);
      ?>
  </body>
</html>

