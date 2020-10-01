<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Formulario</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">
</head>

<body>

  <?php
    $nomeErr = $sobrenomeErr = $cpfErr = $emailErr = $senhaErr = $dataErr ="";
    $nome = $sobrenome = $cpf = $email = $senha = $data = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["nome"])) {
        $nomeErr = "Nome é obrigatório!";
      } else {
        $nome = test_input($_POST["nome"]);

      }

      if (empty($_POST["sobrenome"])) {
        $sobrenomeErr = "Sobrenome é obrigatório!";
      } else {
        $sobrenome = test_input($_POST["sobrenome"]);

      }

      if (empty($_POST["cpf"])) {
        $cpfErr = "CPF é obrigatório!";
      } else {
        $cpf = test_input($_POST["cpf"]);
      }

      if (empty($_POST["senha"])) {
        $senhaErr = "Senha é obrigatório!";
      } else {
        $senha = test_input($_POST["senha"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email é obrigatório!";
      } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Formato de email inválido!";
        }
      }

      if (empty($_POST["data"])) {
        $dataErr = "Data de nascimento é obrigatório!";
      } else {
        $data = test_input($_POST["data"]);
        $dataT = explode('/', $data);
        if(checkdate($dataT[1], $dataT[0], $dataT[2]) == false){
          $dataErr = "Data de nascimento inválida!";
        }
      }

    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    ?>
  <header>
    <h2>Cadastro</h2>
  </header>

  <section>
    <nav class="navform">
      <ul>
        <li><a href="menu.html">Menu</a></li>
        <li><a href="ex01.php">Questão 1</a></li>
        <li><a href="ex02.php">Questão 2</a></li>
        <li><a href="ex03.php">Questão 3</a></li>
      </ul>
    </nav>

    <article class="articleform">

      <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <p><span class="error">*Campos Obrigatórios!</span></p>

      <section><fieldset>
          <legend>Dados Pessoais</legend>

              <label for="nome">Nome</label><br>
              <input type = "text" id = "nome" name = "nome" value="<?php echo $nome;?>" placeholder = "Digite seu nome aqui">
              <span class="error">* <?php echo $nomeErr;?></span>
              <br>

              <label for="sobrenome">Sobrenome</label><br>
              <input type="text" id = "sobrenome" name = "sobrenome" value="<?php echo $sobrenome;?>" placeholder="Digite seu sobrenome aqui">
              <span class="error">* <?php echo $sobrenomeErr;?></span>
              <br>

              <label for="cpf">CPF</label><br>
              <input type="text" id = "cpf" value="<?php echo $cpf;?>" name = "cpf"  placeholder="Digite seu CPF aqui">
              <span class="error">* <?php echo $cpfErr;?></span>
              <br>

              <label for="data">Data de Nascimento</label><br>
              <input type="text" id = "data" value="<?php echo $data;?>" name = "data"  placeholder="Digite sua data de nascimento aqui">
              <span class="error">* <?php echo $dataErr;?></span>
              <br>

              <br>
              <label for="ec">Estado Civil:</label><br><br>
              <select name="select">
                <option value="casado">Casado(a)</option>
                <option value="solteiro">Solteiro(a)</option>
                <option value="viuvo">Viúvo(a)</option>
              </select>

              <br><br>
              <label for="interesses">Áreas de Interesse:</label><br><br>
              <input type="checkbox" id="historia" name="int">
              <label for="historia">História</label>
              <input type="checkbox" id="comp" name="int">
              <label for="comp">Computação</label>
              <input type="checkbox" id="bio" name="int">
              <label for="bio">Biologia</label>

              <br><br>
              <label for="genero">Sexo:</label><br><br>
              <input type="radio" id="masc" name="genero" value="masc">
              <label for="masc">Masculino</label><br>
              <input type="radio" id="fem" name="genero" value="fem">
              <label for="fem">Feminino</label><br>

              <br><br>
              <label for="adicionais">Informações adicionais:</label><br><br>
              <textarea id="add" name="adicionais" rows="5" cols="33">Digite aqui informações adicionais sobre o seu perfil e que você acha importante.</textarea>

      </section></fieldset><br>

      <section><fieldset>
          <legend>Dados de Login</legend>

              <label for="email">E-mail</label><br>
              <input type = "text" id = "email" name = "email" value="<?php echo $email;?>" placeholder = "Digite seu e-mail aqui">
              <span class="error">* <?php echo $emailErr;?></span>
              <br>

              <label for="senha">Senha</label><br>
              <input type = "password" id = "senha" name = "senha" value="<?php echo $senha;?>"  placeholder = "Digite sua senha aqui">
              <span class="error">* <?php echo $senhaErr;?></span>

      </section></fieldset>

      <section><fieldset>
      <input type="reset" value="Reset">
      <input type="submit" name = "submit"value="Enviar"><br>
      </section></fieldset>
      </form>



      <?php
      echo "<h1>Seus dados (obrigatórios):</h1>";
      echo "<p> Seu nome: $nome<p>";
      echo "<p> Seu sobrenome: $sobrenome<p>";
      echo "<p> Sua data de nascimento: $data<p>";
      echo "<p> Seu cpf: $cpf<p>";
      echo "<p> Seu email: $email<p>";
      ?>
    </article>
  </section>


  <footer>
    <p>Contato: beatrizreichert99@gmail.com</p>
  </footer>


</body>
</html>
