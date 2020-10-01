<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Validação</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">
</head>

<body>
  <header>
    <h2>Validação</h2>
  </header>

  <section>
    <nav class="navsite">
      <ul>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="ex01.php">Questão 1</a></li>
        <li><a href="ex02.php">Questão 2</a></li>
        <li><a href="ex03.php">Questão 3</a></li>
      </ul>
    </nav>

    <article class="articleform">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cont = 0;

        $file_pointer = fopen("arquivo.txt", "r");
        while ($dados = fscanf($file_pointer, "%s\t%s\n")) {
          list ($arqUsuario, $arqSenha) = $dados;
          if(strcmp($usuario, $arqUsuario) == 0 && strcmp($senha, $arqSenha) == 0){
            echo "Usuário e senha validados com sucesso!<br>";
            $cont = 1;
          }
        }
        if($cont == 0){
          echo "Usuário e senha inválidos!<br>";
        }
        fclose($file_pointer);
      }

    ?>
      <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <section>
          <label for="usuario">Usuário</label><br>
          <input type = "text" id = "usuario" name = "usuario"><br>

          <label for="senha">Senha</label><br>
          <input type = "password" id = "senha" name = "senha">

      </section><br>

      <section>
      <input type="submit" name ="submit" value="Enviar">
      </section>
      </form>
    </article>
  </section>


  <footer>
    <p>Contato: beatrizreichert99@gmail.com</p>
  </footer>


</body>
</html>
