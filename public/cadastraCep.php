<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="conteudo d-flex justify-content-center mt-5">
    <div class="content">
        <h3>Cadastre o novo CEP</h3>
        <form class="mt-5 cadastroForm" action="buscaCep.php" method="GET">

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep">
                <div id="cep" class="form-text">Digite seu CEP sem pontos.</div>
            </div>

            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</body>

</html>