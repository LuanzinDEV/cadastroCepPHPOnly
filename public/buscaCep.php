<?php

require_once('../app_private/SearchCep.php');

$cep = $_GET['cep'] ?? '';
$logradouro = $endereco['logradouro'] ?? '';
$numero = $endereco['numero'] ?? '';
$bairro = $endereco['bairro'] ?? '';
$cidade = $endereco['localidade'] ?? '';
$estado = $endereco['uf'] ?? '';

?>

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

    <div class="col-6">
    
        <form class="mt-5 cadastroForm" action="../index.php" method="POST">

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep; ?>" required>
            </div>

            <div class="mb-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $logradouro; ?>" required>

            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Numero</label>
                <input type="text" class="form-control" id="numero" name="numero" required>


            </div>

            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>
                <div class="text-danger"></div>

            </div>

            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
                <div class="text-danger"></div>

            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $estado; ?>" required>

            </div>

            <button type="submit" class="btn btn-primary">SALVAR</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>