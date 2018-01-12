<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percorrer os campos do formulário</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="name" id="name">
        <input type="date" name="birthday" id="birthday">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_GET)) {
            foreach ($_GET as $chave => $valor) {
                echo "Nome do campo $chave e valor do campo $valor <br>";
                echo "<hr>";
            }
        }
    ?>


</body>
</html>

