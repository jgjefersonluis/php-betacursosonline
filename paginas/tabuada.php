<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Stefania Cursos ONLINE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aqui descrição do site" />
    <meta name="keywords" content="curso online">
    <meta name="autor" content="Jeferson">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="../css/folha_all.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <header>
        <img src="../images/topocurso2.png" alt="">

        <nav>
            <h1>PHP com banco de dados MySql Server</h1>
            <p>
                <a href="../index.php">Home</a>
                <a href="../paginas/tabuada.php">Tabuada</a>
                <a href="../paginas/contato.php">Contato</a>
            </p>
        </nav>
    </header>
    <main>
        <article>
            <h1>O Curso PHP básico</h1>
            <hr>
            <form method="POST">
                <fieldset>
                    <legend> Informe um número para efetuar o cálculo da tabuada: </legend>
                    <label for="valor">Número:</label>
                    <input type="number" name="valor" value="0">
                    <input type="submit" name="enviar" value="Calcular">
                </fieldset>
            </form>
            <?php
            if (isset($_POST["valor"])) {
                $n = $_POST["valor"];
                for ($i = 0; $i <= 10; $i++) {
                    echo "<h3> $n X $i = " . $n * $i . "</h3>";
                }
            }
            ?>

        </article>
    </main>
    <footer>
        <p>Site desenvolvido por <a href="#"> Jeferson Luis</a></p>
    </footer>
</body>

</html>