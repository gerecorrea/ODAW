<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <title>Prova ODAW</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="utf-8">

  </head>

  <body>

    <header>
      <h2>Visualização de transportadoras cadastradas</h2>
    </header>

    <section>

      <?php

        $link = mysqli_connect("localhost", "root", "", "provaodaw");
        $query = "SELECT * FROM transportadora ORDER BY id";
        $result = mysqli_query($link, $query);
        echo "<br><br>";
        echo "<table border=\"1\"";
        echo "<tr><td><b>Id</b></td>";
        echo "<td><center><b>Nome</b></center></td>";
        echo "<td><center><b>Cidades em que possui centros </b></center></td>";
        echo "<td><center><b>Atua interestadualmente</b></center></td>";
        echo "<td><center><b>Cargas limites em que atua</b></center></td>";
        while ($row = mysqli_fetch_row($result)) {
          echo "<tr><td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "<td>".$row[4]."</td>";
        }
        echo "</table>";
        mysqli_close($link);

      ?>

      <br><br>
      <a href="menuLogado.html"> Voltar ao menu principal do usuário </a>
      <br><br>

    </section>

  </body>
</html>
