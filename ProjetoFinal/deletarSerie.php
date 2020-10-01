<?php
  $codigo = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

  $query = "DELETE FROM serie WHERE id = '$codigo'";
  echo"<script language='javascript' type='text/javascript'>
  alert('Série excluída com sucesso!');</script>";
  echo"<script>window.location.href='pagina5.php';</script>";
  mysqli_query($link, $query);
  mysqli_close($link);

?>
