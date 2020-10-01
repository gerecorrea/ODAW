<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>  
    <head>
        <title>Tareafa 7 - PHP Exercício 4</title>
    </head>
<body>

<?php
/* Taarefa 7 -exercício 4: Não tem como eu testar na web, então invalida mto conseguir fazer o exercício, por isso assim.*/

$_SESSION["corfavorita"] = "vermelho";
$_SESSION["carro"] = "polo";
echo "Essas sessions estão agora disponíveis para outros scripts.";
?>

</body>
</html> 

