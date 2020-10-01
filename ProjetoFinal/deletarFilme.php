<?php
  $codigo = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

  $query = "DELETE FROM filme WHERE id = '$codigo'";
  echo"<script language='javascript' type='text/javascript'>
  alert('Filme excluído com sucesso!');</script>";
  echo"<script>window.location.href='pagina3.php';</script>";
  mysqli_query($link, $query);
  mysqli_close($link);

?>
