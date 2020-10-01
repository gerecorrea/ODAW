<?php
  $codigo = $_POST['codigo'];
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
  //$contadorfavoritos = $_POST['contadorfavoritos'];

  $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

  $query = "UPDATE filme SET titulo='$titulo', duracao='$duracao', genero='$genero', anoLancamento='$anoLancamento', elenco='$elenco', personagens='$personagens', paisOrigem='$paisOrigem', idioma='$idioma', escritores='$escritores', direcao='$direcao', sinopse='$sinopse', linkimagem='$linkimagem', linkimdb='$linkimdb', linkassistir='$linkassistir' WHERE id='$codigo'";
  mysqli_query($link, $query);
  echo"<script language='javascript' type='text/javascript'>
  alert('Filme alterado com sucesso!');</script>";
  echo"<script>window.location.href='pagina3.php';</script>";
  mysqli_query($link, $query);
  mysqli_close($link);


?>
