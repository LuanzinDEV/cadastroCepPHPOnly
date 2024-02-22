<?php
    require_once('app_private/EnderecoController.php');

    $parametros = new EnderecoController;


    if($_POST != null){
        $pagina = $parametros->salvar();
    
        if($pagina == 0){
            header('Location: public/cadastroExistente.php');
        }else if($pagina == 1){
            header('Location: public/cadastroSucesso.php');
        }
    }

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
        <h3 class="mt-3 mb-5">Lista de endereços</h3>
        <a href="public/cadastraCep.php" class="btn btn-outline-success mt-3 mb-5">Novo endereço</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CEP</th>
                    <th scope="col">LOGRADOURO</th>
                    <th scope="col">NUMERO</th>
                    <th scope="col">BAIRRO</th>
                    <th scope="col">CIDADE</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                <!--percorre e lista -->
            </tbody>
        </table> 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>