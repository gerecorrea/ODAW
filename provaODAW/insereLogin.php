<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Prova ODAW</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">

</head>

    <body>

        <header>
            <h2>Prova ODAW</h2>
        </header>

        <section>

            <script>

            </script>

            <?php

                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $sucesso = 0;

                $contador = 0;

                $link = mysqli_connect("localhost", "root", "", "provaodaw");
                $query = "SELECT * FROM usuario";
                $result = mysqli_query($link, $query);

                while ($row = mysqli_fetch_row($result)) {
                    if($row[1] == $nome && $row[2] == $senha){
                        $sucesso = 1;
                        break;
                    }
                }

                if($sucesso == 0){
                    echo "Login inválido! Tente novamente!";
                    header('Location: login.php');
                    echo "<br><br> Dados inseridos incorretamente!! <br><br>"; //não printa em tela, como mostrar um diálogo de erro?
                }
                else if($sucesso == 1){
                    echo "Login efetuado com sucesso!";
                    header('Location: menuLogado.html');
                }

            ?>

        </section>

    </body>
</html>
