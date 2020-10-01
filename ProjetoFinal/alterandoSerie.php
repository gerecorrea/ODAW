<?php
  $codigo = $_POST['codigo'];
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

  $query = "UPDATE serie SET titulo='$titulo', direcao='$direcao', elenco='$elenco', personagens='$personagens', sinopse='$sinopse', anoLancamento='$anoLancamento', tempoEpisodio='$tempoEpisodio', qntTemporadas='$qntTemporadas', episodiosTemporada='$episodiosTemporada', ondeAssistir='$ondeAssistir', paisOrigem='$paisOrigem', idioma='$idioma', escritores='$escritores', linkimagem='$linkimagem', linkimdb='$linkimdb', linkassistir='$linkassistir' WHERE id='$codigo'";
  mysqli_query($link, $query);

  echo"<script language='javascript' type='text/javascript'>
  alert('Série alterada com sucesso!');</script>";
  echo"<script>window.location.href='pagina5.php';</script>";
  
  mysqli_close($link);


?>
