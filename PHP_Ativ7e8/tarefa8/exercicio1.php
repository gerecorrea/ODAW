
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $senhaErr = "";
$name = $email = $gender = $comment = $senha = "";
$linguagens = array();
$tudoPreenchido = 1;
//$ling1 = $ling2 = $ling3 = $ling4 = NULL;
//$linguagens[0] = $ling1;
//$linguagens[1] = $ling2;
//$linguagens[2] = $ling3;
//$linguagens[3] = $ling4;
//$info;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nome não preenchido!";
	$tudoPreenchido = 0;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "E-mail não preenchido!";
	$tudoPreenchido = 0;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["senha"])) {
    $senhaErr = "Senha não preenchida!";
	$tudoPreenchido = 0;
  } else {
    $senha = test_input($_POST["senha"]);
  }

  if (empty($_POST["comment"])) {
	$tudoPreenchido = 0;
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $tudoPreenchido = 0;
    $genderErr = "Gênero não preenchido!";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if ($tudoPreenchido == 0){
	$tudoPreenchido = test_input($_POST["tudoPreenchido"]);
  }


	$i=0;
	foreach ($_POST['linguagens'] as $key => $value) {
		$linguagens[$i]=$_POST['linguagens'];
		$i++;
	}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Tarefa 8 - Exercício 1</h2>
<p><span class="error">* Campos obrigatórios</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Senha: <input type="password" name="senha" value="<?php echo $senha;?>">
  <span class="error">* <?php echo $senhaErr;?></span>
  <br><br>

  Gênero:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Feminino
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Masculino
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> Outro ou prefere não informar  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Linguagens de Programação: <br>
  <input type="checkbox" id="idC" name="linguagens[]" <?php if (isset($ling1)) echo $ling1;?> value="C">
  <label for="idC"> C</label><br>
  <input type="checkbox" id="idPHP" name="linguagens[]" <?php if (isset($ling1)) echo $ling1;?> value="PHP">
  <label for="idPHP"> PHP</label><br>
  <input type="checkbox" id="idPython" name="linguagens[]3" <?php if (isset($ling1)) echo $ling1;?> value="Python">
  <label for="idPython"> Python</label><br>
  <input type="checkbox" id="idR" name="linguagens[]" <?php if (isset($ling1)) echo $ling1;?> value="R">
  <label for="idR"> R</label><br>
  <br>

  Descrição de perfil: <br><br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  <input type="reset" name="reset" value="Reset">
</form>

<?php
echo "<h2>DADOS DO USUÁRIO:</h2>";
echo "Nome: ", $name;
echo "<br>";
echo "E-mail: ", $email;
echo "<br>";
echo "Senha: ********";//senha
echo "<br>";
echo "Gênero:",  $gender;
echo "<br>";
echo "Descrição do perfil: <br>", $comment;
echo "<br>";
echo "Linguagens: ";
if ($tudoPreenchido == 0)
   echo  "<script>alert('Tudo preenchido!);</script>";
//Nââo printando alerta.
print_r($_POST['linguagens']);
?>

</body>
</html>
