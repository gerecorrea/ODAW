<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>MD5</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">
</head>

<body>
  <header>
    <h2>MD5</h2>
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
      <form name="frm" method="POST">
      <section>
          <label for="senha">Senha</label><br>
          <input type = "password" id = "senha" name = "senha"><br>
          <label for="senha">Confirmar Senha</label><br>
          <input type = "password" id = "conf" name = "conf"><br>
          <input type="submit" value="Confirmar Senha">

      </section><br>


      </form>
      <?php
      if(isset($_POST["senha"])){
        $string = $_POST["senha"];
        $senha = md5($string);
        $confsenha = md5($_POST["conf"]);
        if($senha == $confsenha){
          echo "Senhas iguais.<br><br>";
          echo "MD5 da senha: " . $senha . "<br>";
          echo "MD5 da confirmação " . $confsenha;
        }else{
          echo "Senhas diferentes.<br><br>";
          echo "MD5 da senha: " . $senha . "<br>";
          echo "MD5 da confirmação " . $confsenha;
        }

      }
      ?>
    </article>
  </section>


  <footer>
    <p>Contato: beatrizreichert99@gmail.com</p>
  </footer>


</body>
</html>
