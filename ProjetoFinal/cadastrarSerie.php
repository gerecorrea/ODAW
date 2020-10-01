<?php
  $titulo = $_POST['titulo'];
  $direcao = $_POST['direcao'];
  $elenco = $_POST['elenco'];
  $personagens = $_POST['personagens'];
  $sinopse = $_POST['sinopse'];
  $anoLancamento = $_POST['ano'];
  $tempoEpisodio = $_POST['tempoEpisodio'];
  $qntTemporadas = $_POST['qntTemporadas'];
  $episodiosTemporada = $_POST['episodiosTemporada'];
  $ondeAssistir = $_POST['ondeAssistir'];
  $paisOrigem = $_POST['paisOrigem'];
  $idioma = $_POST['idioma'];
  $escritores = $_POST['escritores'];
  $linkimagem = $_POST['linkimagem'];
  $linkimdb = $_POST['linkimdb'];
  $linkassistir = $_POST['linkassistir'];

  $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

  $query = "INSERT INTO serie (titulo, direcao, elenco, personagens, sinopse, anoLancamento, tempoEpisodio, qntTemporadas, episodiosTemporada, ondeAssistir, paisOrigem, idioma,escritores, linkimagem, linkimdb, linkassistir, contadorfavoritos)  VALUES ('$titulo', '$direcao', '$elenco', '$personagens', '$sinopse', '$anoLancamento', '$tempoEpisodio', '$qntTemporadas', '$episodiosTemporada', '$ondeAssistir', '$paisOrigem', '$idioma', '$escritores', '$linkimagem', '$linkimdb', '$linkassistir', 0)";

  echo"<script language='javascript' type='text/javascript'>
  alert('Série cadastrada com sucesso!');</script>";
  echo"<script>window.location.href='pagina1.html';</script>";

  mysqli_query($link, $query);
  mysqli_close($link);
?>
