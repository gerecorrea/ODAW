
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//Obs: primeiro passo, criar uma database via interface do xampp pelo browser ou pelo terminal.

//Realizando conexão com o banco de dados.
$conexao = mysqli_connect('localhost', 'root', '', 'clube');
if (!$conexao) {
die('Não foi possível conectar: '.mysql_error());
}
echo 'Conexão bem sucedida<br>';

//$resultado = mysqli_select_db($conexao,"clube");

//Criando tabelas jogadores
$consulta = "CREATE TABLE jogadores(
  ID int(10) NOT NULL auto_increment,
  Name varchar(50) NOT NULL default '',
  NumeroCamisa int(2) NOT NULL,
  Posicao varchar(20) NULL,
  PRIMARY KEY (ID)
)";
if(mysqli_query ($conexao,$consulta)){
  echo 'Criação da tabela jogadores realizada com sucesso!<br>';
}
else
  echo 'Não foi possível criar a tabela jogadores<br>';

  //Inserindo dados na tabela jogadores
$consulta = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Lewandoski", 9, "Centroavante");';
$consulta2 = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Neymar", 11, "Ponta esquerda");';
$consulta3 = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Douglas Costa", 7, "Ponta direita");';
$consulta4 = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Goretzka", 8, "Meio campo");';
$consulta5 = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Saúl", 10, "Meio Campo");';
$consulta6 = 'INSERT INTO jogadores (Name, NumeroCamisa, Posicao) VALUES ("Allan", 13, "Volante");';
mysqli_query ( $conexao, $consulta);
mysqli_query ( $conexao, $consulta2);
mysqli_query ( $conexao, $consulta3);
mysqli_query ( $conexao, $consulta4);
mysqli_query ( $conexao, $consulta5);
$resultado = mysqli_query ( $conexao, $consulta6);
if($resultado)
  echo 'Sucesso na inserção dos jogadores na tabela jogadores!<br>';
else
  echo 'Erro na inserção de jogadores na tabela jogadores!<br>';

  //Realizando atualização de dados
$update = "UPDATE jogadores set Name='Neymar Jr' WHERE Name='Neymar'";
if(mysqli_query ( $conexao, $update))
  echo ' Atualização realizada com sucesso!<br>';
else
  echo 'Erro na atualização do nome de jogador!<br>';

//Realizando visualização de dado
$select = "SELECT Name, NumeroCamisa, Posicao FROM jogadores";
$resultado = mysqli_query ( $conexao, $select);
echo '<br><b>Lista de jogadores:</b> <br>';
while ($linha = mysqli_fetch_array($resultado)){
  echo $linha['Name']." - ".$linha['NumeroCamisa']." - ".$linha['Posicao']."<br>";
}

//Realizando delete
$delete = "DELETE FROM jogadores WHERE
Posicao='Centroavante'";
if($resultado = mysqli_query ($conexao, $consulta))
  echo 'Jogadores excluídos!<br>';
else
  echo 'Falha na exclusão de jogadores<br>';

?>



</body>
</html>
