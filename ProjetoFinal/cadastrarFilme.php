<?php
  $titulo = $_POST['titulo'];
  $duracao = $_POST['duracao'];
  $genero = $_POST['genero'];
  $anoLancamento = $_POST['ano'];
  $elenco = $_POST['elenco'];
  $personagens = $_POST['personagens'];
  $paisOrigem = $_POST['pais'];
  $idioma = $_POST['idioma'];
  $escritores = $_POST['escritores'];
  $direcao = $_POST['direcao'];
  $sinopse = $_POST['sinopse'];
  $linkimagem = $_POST['linkimagem'];
  $linkimdb = $_POST['linkimdb'];
  $linkassistir = $_POST['linkassistir'];
  

  $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

  $query = "INSERT INTO filme (titulo, duracao, genero, sinopse, elenco, personagens, paisOrigem, idioma, escritores, direcao, anoLancamento, linkimagem, linkimdb, linkassistir, contadorfavoritos)  VALUES ('$titulo', '$duracao', '$genero', '$sinopse', '$elenco', '$personagens', '$paisOrigem', '$idioma', '$escritores', '$direcao', '$anoLancamento', '$linkimagem', '$linkimdb', '$linkassistir', 0)";

  echo"<script language='javascript' type='text/javascript'>
  alert('Filme cadastrado com sucesso!');</script>";
  echo"<script>window.location.href='pagina1.html';</script>";

  mysqli_query($link, $query);
  mysqli_close($link);
?>
