<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Filmes por Lançamento</title>
  <!-- Links padrões do bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../main.css">
  <link rel="shortcut icon" href="PopcornIcon.png" >
  <meta charset="utf-8">

  <style>
    /*Adicionar tudo aqui que precisamos modificar do bootstrap pra funfar melhor.*/
    *{font-family: 'Franklin Gothic Medium', Verdana, sans-serif;}
    /*modifica o menu lateral pra fixo.*/
    .navmenu{
      height:100%;
      position: fixed;
      width: 10%;
      padding: 50px;
    }

    /* modifica o fundo azul da pagina pra pegar toda tela sempre. */
    .articlePagina3{
      background-color: #b3e6ff;
      width: 100%;
      height: 100%;
      /* Precisar depois aumentar a altura aqui, por ennquanto tá ok */
    }

    h1{
      color: white;
      font-size:3.0em;
      margin-left:15%;
      float:left;
    }

    h4, p{
      color: white;
    }



    h6{
      color: #aaaaaa;
    }



    /* Define o css do card externo*/
    .card {
        /* float: left; */
        display: inline-block;
        background-color: #000000;
        vertical-align: top; /*alinhado os cards no topo, mesmo sem imagem presente*/
        font-family: Verdana, sans-serif;
        border: solid 5px #000000;
        box-shadow: 0 0px 70px 0 rgba(0, 0, 0, 1.0);
        height: 100%;
        width: 100%;
        margin: 5% 7%;
        padding: 15px;

    }

    /* A imagem dentro da div de classe card */
    .card img {
        width: 100%; /*largura dela 100% da card/div curso, lembrando que o padding 5px deixa aquela margenzinha entre a div e a img*/
        max-height: 50%; /*altura apenas 50%*/
    }

    /* Legenda de título da dentro da div card */
    .card-info {
        padding: 10px;
        /* height: 450px; comentei pq assim a altura é de acordo com o conteúdo*/

    }

    .card-info h4 {
        font-size: 2.0em;
        font-weight: 100;
        padding: 10px;
        margin: 0px; /*tira a margem invisivel que tem, sobundo o texto titulo na div*/
    }

    /* Cria a parte de baixo da card á direita */
    .card-baixodir {

        float: right;
        padding: 10px;
    }

    /* escrita foot da card */
    .card-foot {
        color: #B88C0B;
        font-weight: bold;
        font-size: 1.4em;
    }

    .card-foot:hover{
      color: #fff;
    }

    /* Botão para alteração e exclusão */
    .botao {
        background: #B88C0B;
        float:left;
        border-radius: 50px;
        padding: 10px 35px;
        margin: 20px;
    }

    .botao:hover{/*altera cor dos botões ao passar por ele*/
      font-weight:bold;
      /* background-color: #4faddb; */
      box-shadow: 0 0px 70px 0 rgba(184, 140, 12, 1.0);
    }

    .glyphicon:hover{ /*altera cor dos ícones ao passar por ele*/
      color: #B88C0B;
    }

    h4:hover, h6:hover, p:hover{
      color: #B88C0B;
    }


  </style>

</head>


<body>
  <section>
  <nav class="navmenu">
      <ul>

        <a href="../pagina1.html">
          <span class="glyphicon glyphicon-home"><br><h6>Início</h6><br></span>
        </a>
        <br><br>
        <a href="../pagina2.html">
          <span class="glyphicon glyphicon-plus"><br><h6>Cadastrar filme</h6><br></span>
        </a>
        <br><br>
        <a href="../pagina3.php">
          <span class="glyphicon glyphicon-film"><br><h6>Listar filmes</h6><br></span>
        </a>
        <br><br>
        <a href="../pagina4.html">
          <span class="glyphicon glyphicon-file"><br><h6>Cadastrar série</h6><br></span>
        </a>
        <br><br>
        <a href="../pagina5.php">
          <span class="glyphicon glyphicon-check"><br><h6>Listar séries</h6><br></span>
        </a>
        <br><br>
      </ul>
    </nav>

    <article class="articlePagina3">
      <?php

        $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");
        $query = "SELECT * FROM filme ORDER BY anoLancamento desc";
        $result = mysqli_query($link, $query);
        echo "<h1><center> Filmes em Ordem de Lançamento - Recentes </center></h1><br><br>";


        while ($row = mysqli_fetch_row($result)) {
          echo "<div class='card'> <img src='".$row[12]. "'/>"; //imagem do filme.
          echo "<div class='card-info'>";
          echo "<h4>".$row[1]."</h4>"; //título
          echo "<div class='boxFav>";
          echo "<h6 class='botao' style='color: #000'>Favoritar</h6>";
          echo "</div>";
          echo "<h6>".$row[11]."&nbsp&nbsp".$row[2]." min&nbsp&nbsp".$row[3]."</h6>"; //ano, duração e gênereco.
          echo "<p>".$row[4]."</p>"; //sinopse
          echo "<br><h6> Direção: ".$row[10]; //direção
          echo "<h6> Escritores: ".$row[9]; //escritores
          echo "<h6> Elenco: ".$row[5]; //elenco
          echo "<h6> Personagens: ".$row[6]; //personagens
          echo "<h6> País: ".$row[7]; //país
          echo "<h6> Idioma: ".$row[8]; //idioma
          echo "<h6> Fãs: ".$row[15]; //favoritos

          echo "<br><a href=\"../favoritarFilme.php?id=".$row[0]."\" class='card-foot botao' style='color: #000'>Favoritar</a></tr>";
          //echo "<br><form method = 'POST' action = 'alterandoFavorito.php'></a></tr>";
          //echo "<input type='submit' name = 'submit' value='Favoritar' onclick='alterandoFavorito.php' ><br></form>" ;

          //Ali em cima o botão de favoritar. Deve ser uma variável do banco, que no clique incrementa um no contador de favoritos do filme
          //Esse contador não deve ter no form e deve ser inicializado como 0 (default=0) no banco
          //Gerar um update dele no banco daí.
          echo "<a href=\"../alterarFilme.php?id=".$row[0]."\" class='card-foot botao' style='color: #000'>Alterar</a>";
          echo "<a href=\"../deletarFilme.php?id=".$row[0]."\" class='card-foot botao' style='color: #000' >Deletar</a> &nbsp";

          echo "</div><div class='card-baixodir'>";
          echo "<a href='".$row[13]."' class='card-foot'>IMDb</a> &nbsp"; //gravar no bd link do imdb da pg
          echo "<a href='".$row[14]."' class='card-foot'>Assista agora!</a> </div> </div>"; //gravar no bd link do coisa no netflix, amazon prime, etc
          //Nem todo filme/série tem em plataforma pra ver, caso a pessoa não coloque link disso, temos que verificar aqui e só mostrar se tiver link
          //No momento está ali o link pra um filme do netflix.
          //if(!isNaN(row[numRowDele]))
          //echo "<a href='https://www.netflix.com/br-en/title/80095365' class='card-foot'>Assista agora!</a> </div> </div>"; //gravar no bd link do coisa no netflix, amazon prime, etc


        }
        //echo "</table>";

        mysqli_close($link);

      ?>
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
