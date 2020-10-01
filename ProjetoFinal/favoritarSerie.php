<?php
    $codigo = $_GET['id'];

    $link = mysqli_connect("localhost", "root", "", "trabalhoFinal");

    $query = "SELECT * FROM serie WHERE id ='$codigo'";
    $result = mysqli_query($link, $query);

    if ($row = mysqli_fetch_row($result)) {
      $contadorfavoritos = $row[17];
    }

    $contadorfavoritos = $contadorfavoritos + 1;
    $query = "UPDATE serie SET contadorfavoritos = '$contadorfavoritos' WHERE id='$codigo'";
    mysqli_query($link, $query);

    echo"<script language='javascript' type='text/javascript'>
    alert('Série favoritada com sucesso!');</script>";
    echo"<script>window.location.href='pagina5.php';</script>";



    mysqli_close($link);

    ?>
