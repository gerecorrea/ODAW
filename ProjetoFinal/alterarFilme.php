<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Pagina 2</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <!-- Links padrões do bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="shortcut icon" href="PopcornIcon.png" >
  <meta charset="utf-8">

  <style>
    /*Adicionar tudo aqui que precisamos modificar do bootstrap pra funfar melhor.*/
    * {
      font-family:'Franklin Gothic Medium', Impact, 'Arial Narrow', Arial, sans-serif;
    }

    h1{
      /* margin-left:17%; */
      margin-left: -3%;
      font-size: 60px;
    }

    /*modifica o menu lateral pra fixo.*/
    .navmenu2{
      position: fixed;
      width: 10%;
      padding: 50px;
    }

    /* modifica o fundo azul da pagina pra pegar toda tela sempre. */
    .articlePagina2{
      width: 93%;
      height: 100%;
      padding: 200px;
      margin-left: 7%;
    }
  </style>

  <script>
    function validaFormulario(formulario){
      
      if(formulario.titulo.value.length > 100){
        alert ("O campo título deve conter, no máximo, 100 caracteres!");
        return false;
      }
      if(formulario.genero.value.length > 45){
        alert ("O campo gênero deve conter, no máximo, 45 caracteres!");
        return false;
      }
      if(formulario.sinopse.value.length > 500){
        alert ("O campo sinopse deve conter, no máximo, 500 caracteres!");
        return false;
      }
      if(formulario.elenco.value.length > 300){
        alert ("O campo elenco deve conter, no máximo, 300 caracteres!");
        return false;
      }
      if(formulario.personagens.value.length > 300){
        alert ("O campo personagens deve conter, no máximo, 300 caracteres!");
        return false;
      }
      if(formulario.pais.value.length > 45){
        alert ("O campo país de origem deve conter, no máximo, 45 caracteres!");
        return false;
      }
      if(formulario.idioma.value.length > 45){
        alert ("O campo idioma deve conter, no máximo, 45 caracteres!");
        return false;
      }
      if(formulario.escritores.value.length > 200){
        alert ("O campo escritores deve conter, no máximo, 200 caracteres!");
        return false;
      }
      if(formulario.direcao.value.length > 100){
        alert ("O campo direção deve conter, no máximo, 100 caracteres!");
        return false;
      }
      if(formulario.linkimagem.value.length > 200){
        alert ("O campo de link da imagem deve conter, no máximo, 200 caracteres!");
        return false;
      }
      if(formulario.linkimdb.value.length > 100){
        alert ("O campo de link do IMDb deve conter, no máximo, 100 caracteres!");
        return false;
      }
      if(formulario.linkassistir.value.length > 200){
        alert ("O campo de link de onde assistir deve conter, no máximo, 200 caracteres!");
        return false;
      }

      //Verificando se o campo duração é int
      if(isNaN(formulario.duracao.value)) {
        alert("O campo duração só aceita valor inteiro!");
        return false;
      }
      //Verificando se o campo ano é int
      if(isNaN(formulario.ano.value)){
        alert("O campo ano de lançamento só aceita valor inteiro!");
        return false;
      }
      //Verficando se o campo ano tem 4 dígitos
      if(formulario.ano.value.length != 4){
        alert("O campo ano de lançamento só aceita valores nesse formato: XXXX!");
        return false;
      }

      return true;
    }

  </script>
</head>

<body>

  <?php
    $codigo = $_GET['id'];
    $titulo = "";
    $duracao = "";
    $sinopse = "";
    $elenco = "";
    $personagens = "";
    $paisOrigem = "";
    $idioma = "";
    $escritores = "";
    $direcao = "";
    $anoLancamento = "";
    $linkimagem = "";
    $linkimdb = "";
    $linkassistir = "";


    $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

    $query = "SELECT * FROM filme WHERE id ='$codigo'";
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_row($result)) {
      $codigo = $row[0];
      $titulo = $row[1];
      $duracao = $row[2];
      $genero = $row[3];
      $sinopse = $row[4];
      $elenco = $row[5];
      $personagens = $row[6];
      $paisOrigem = $row[7];
      $idioma = $row[8];
      $escritores = $row[9];
      $direcao = $row[10];
      $anoLancamento = $row[11];
      $linkimagem = $row[12];
      $linkimdb = $row[13];
      $linkassistir = $row[14];
      $contadorfavoritos = $row[15];
    }

    mysqli_close($link);

    ?>
  <section>
  <nav class="navmenu2">
      <ul>
        
        <a href="pagina1.html">
          <span class="glyphicon glyphicon-home"><br><h6>Início</h6><br></span>
        </a>
        <br><br>
        <a href="pagina2.html">
          <span class="glyphicon glyphicon-plus"><br><h6>Cadastrar filme</h6><br></span>
        </a>
        <br><br>
        <a href="pagina3.php">
          <span class="glyphicon glyphicon-film"><br><h6>Listar filmes</h6><br></span>
        </a>
        <br><br>
        <a href="pagina4.html">
          <span class="glyphicon glyphicon-file"><br><h6>Cadastrar série</h6><br></span>
        </a>
        <br><br>
        <a href="pagina5.php">
          <span class="glyphicon glyphicon-check"><br><h6>Listar séries</h6><br></span>
        </a>
        <br><br>
      </ul>
    </nav>

    <article class="articlePagina2">
      <form method = "POST" action = "alterandoFilme.php" onsubmit="return validaFormulario(this);">
      	<input type='hidden' name='codigo' value='<?php echo $codigo; ?>'>
        <!--Essas class nas divs são do Bootstrap -->
        <div class="form-group">
          <h1><center>Alterar Filme</center></h1><br><br>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="titulo">Título do Filme:</label><br>
            <input type = "text" id = "titulo" name = "titulo" value="<?php echo $titulo;?>" placeholder = "Digite o título do filme aqui" required>
          </div>
          <div class="form-group col-md-6">
            <label for="duracao">Duração do Filme:</label><br>
            <input type="text" id = "duracao" name = "duracao" value="<?php echo $duracao;?>" placeholder="Digite a duração do filme aqui" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gen">Gênero do Filme:</label><br>
            <select name="genero" id = "genero" class = "estado">
              <option name = "Ação" value="Ação" <?php echo ($genero == "Ação") ? "selected" : null; ?>>Ação</option>
              <option name = "Aventura" value="Aventura" <?php echo ($genero == "Aventura") ? "selected" : null; ?> >Aventura</option>
              <option name = "Comédia" value="Comédia" <?php echo ($genero == "Comédia") ? "selected" : null; ?>>Comédia</option>
              <option name = "Fantasia" value="Fantasia" <?php echo ($genero == "Fantasia") ? "selected" : null; ?>>Fantasia</option>
              <option name = "Ficção Científica" value="Ficção Científica" <?php echo ($genero == "Ficção Científica") ? "selected" : null; ?>>Ficção Científica</option>
              <option name = "Romance" value="Romance" <?php echo ($genero == "Romance") ? "selected" : null; ?>>Romance</option>
              <option name = "Terror" value="Terror" <?php echo ($genero == "Terror") ? "selected" : null; ?>>Terror</option>
              <option name = "Thriller" value="Thriller" <?php echo ($genero == "Thriller") ? "selected" : null; ?>>Thriller</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="ano">Ano de Lançamento do Filme:</label><br>
            <input type="text" id = "ano" name = "ano" value="<?php echo $anoLancamento;?>" placeholder="Digite o ano de lançamento aqui" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="elenco">Elenco do Filme:</label><br>
            <input type="text" id = "elenco" name = "elenco" value="<?php echo $elenco;?>"  placeholder="Digite o elenco separado por vírgula" required>
          </div>
          <div class="form-group col-md-6">
            <label for="personagens">Personagens do Filme:</label><br>
            <input type="text" id = "personagens" name = "personagens" value="<?php echo $personagens;?>"  placeholder="Digite os personagens separados por vírgula e na ordem do elenco" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pais">País de Origem do Filme:</label><br>
            <input type="text" id = "pais" name = "pais" value="<?php echo $paisOrigem;?>"  placeholder="Digite o país aqui" required>
          </div>
          <div class="form-group col-md-6">
            <label for="idioma">Idioma do Filme:</label><br>
            <input type="text" id = "idioma" name = "idioma" value="<?php echo $idioma;?>"  placeholder="Digite o idioma aqui" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="escritores">Escritores do Filme:</label><br>
            <input type="text" id = "escritores" name = "escritores" value="<?php echo $escritores;?>"  placeholder="Digite os nomes dos escritores separados por vírgula" required>
          </div>
          <div class="form-group col-md-6">
            <label for="direcao">Direção do Filme:</label><br>
            <input type="text" id = "direcao" name = "direcao" value="<?php echo $direcao;?>" placeholder="Digite a direção aqui" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="linkimagem">Link da imagem do filme:</label><br>
            <input type="text" id = "linkimagem" name = "linkimagem" value="<?php echo $linkimagem;?>" placeholder="Digite o link da imagem pro filme" required>
          </div>
          <div class="form-group col-md-6">
            <label for="linkImdb">Link do IMDb:</label><br>
            <input type="text" id = "linkimdb" name = "linkimdb" value="<?php echo $linkimdb;?>" placeholder="Digite o link do IMDb aqui" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="linkassistir">Link de onde assistir o filme:</label><br>
            <input type="text" id = "linkassistir" name = "linkassistir" value="<?php echo $linkassistir;?>" placeholder="Digite o link de uma plataforma que contém o filme, se existir">
          </div>
        </div>

        <div class="form-group">
          <label for="sinopse">Sinopse:</label><br><br>
          <textarea id="sinopse" name="sinopse" rows="5" cols="33"  required><?php echo $sinopse;?></textarea><br>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="reset" value="Reset">
          </div>
          <div class="form-group col-md-6">
            <input type="submit" name = "submit" value="Alterar" ><br>
          </div>
        </div>

      </form>


    </article>

  </section>

  <!-- Esses scripts são padrões do bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
