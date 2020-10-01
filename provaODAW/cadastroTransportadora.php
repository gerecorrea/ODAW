<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Prova ODAW</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">
</head>

<body>

  <header>
    <h2>Cadastro de transporadora</h2>
  </header>

  <section>

    <article class="articleform">

      <a href="menuLogado.html"> Voltar ao menu principal do usuário </a>
      <br><br>
      <form method = "post" action = "insereTransportadora.php">
      <section>
        <fieldset>

              <label for="nome">Nome</label><br>
              <input type = "text" id = "nome" name = "nome" placeholder = "Digite aqui o nome da transportadora">
              <br>

              <br><br>
              <label for="cidades">Cidades em que possui centros:</label><br><br>
              <textarea id="add" name="cidades" rows="4" cols="30"></textarea>

              <br><br>
              <label for="interestadual">Interestadual:</label><br><br>
              <input type="radio" id="sim" name="interestadual" value="Sim">
              <label for="sim">Sim</label><br>
              <input type="radio" id="nao" name="interestadual" value="Não" >
              <label for="nao">Não</label><br>
              
              <br><br>
              <label for="areas">Cargas limites em que atua:</label><br><br>
              <select name="areas" id = "areas">
                <option name = "Cargasleves" value="Somente Cargas leves">Somente Cargas leves</option>
                <option name = "Cargasmedias" value="Até cargas médias" >Até cargas médias</option>
                <option name = "Cargaspesadas" value="Todos os tipos" >Todos os tipos </option>
              </select>

              <br><br>

      <section><fieldset>
      <input type="submit" name = "submit" value="Enviar" ><br>
      <input type="reset" value="Reset"><br>
      
      </section></fieldset>

      </form>
    </article>
  </section>


</body>
</html>
