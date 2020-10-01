<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <title>Prova ODAW</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="utf-8">

  </head>

  <body>

    <header>
      <h2>Prova ODAW</h2>
    </header>

    <section>


      <script>

        function validaCidade(cidades){
          if(cidades === "")
            return false;
          return true;
        }

        function validaNome(nome){
          if(nome.length > 5 && nome.lenght < 100)
            return true;
          return false;
        }

        function validaInterestadual(interestadual){
          if(interestadual !== "")
            return false;
          return true;
        }

        function validaAreas(areas){
          if(areas !== "")
            return false;
          return true;
        }
      </script>

      <?php

        $nome = $_POST['nome'];
        $cidades = $_POST['cidades'];
        $areas = $_POST['areas'];
        $interestadual = filter_input(INPUT_POST, 'interestadual');

        $contador = 0;


        $link = mysqli_connect("localhost", "root", "", "provaodaw");
        echo '<br><br>';
        if (empty($nome)) {
          echo "Nome da empresa faltando!<br><br>";
          $contador = $contador + 1;
        }

        if (empty($cidades)) {
          echo "Cidades de atuação faltando!<br><br>";
          $contador = $contador + 1;
        }

        if (empty($areas)) {
          echo "Tipo de cargas em que atua faltando!<br><br>";
          $contador = $contador + 1;
        }

        if($contador == 0){
          $query = "INSERT INTO transportadora (nome, cidades, interestadual, areas) VALUES ('$nome', '$cidades', '$interestadual', '$areas')";
          mysqli_query($link, $query);
          mysqli_close($link);
          echo '<br> Cadastro efetuado com sucesso! <br><br>';

          //header('Location: menuLogado.html');
        }

      ?>

    <a href="menuLogado.html"> Voltar ao menu principal do usuário </a>
    <a href="cadastroTransportadora.php">Realizar um novo cadastro</a>


    </section>
      
  </body>
</html>
