<!DOCTYPE html>
<html lang="pt-BR">

    <head>
    <title>Prova ODAW</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <meta charset="utf-8">
    </head>

    <body>

        <header>
            <h2>Menu de login</h2>
        </header>

        <section>

            <article class="article">

                <a href="index.html"> Voltar ao menu inicial </a>
            <br><br>

            <form method = "post" action = "insereLogin.php">

            <section>
                <fieldset>
                    <br>
                    <label for="nome">Digite seu nome</label><br>
                    <input type = "text" id = "nome" name = "nome" placeholder = "Nome">
                    <br>

                    <label for="nome">Digite sua senha</label><br>
                    <input type = "password" id = "senha" name = "senha" placeholder = "Senha">
                    <br>
                    <input type="submit" name = "submit" value="Enviar" ><br>

            </form>
            </article>
        </section>


    </body>
</html>
