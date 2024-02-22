<?php

require_once "Conexao.php";

class EnderecoController{
    public function salvar()
    {   
        $conexao = new Conexao;
        $atributos = $_POST;

        $query = $conexao->conectarPDO();

        if($query != null){

            $cepExistente = $query->prepare("SELECT * FROM enderecos WHERE cep = :cep");
            $cepExistente->bindValue(":cep", $atributos['cep']);
            $cepExistente->execute();

            if ($cepExistente->rowCount() > 0) {
                echo "CEP já cadastrado.";
                return 0;
            }

            $res = $query->prepare("INSERT INTO enderecos (cep, logradouro, numero, bairro, cidade, estado) VALUES (:cep, :logradouro, :numero, :bairro, :cidade, :estado)");

            $res->bindValue(":cep", $atributos['cep']);
            $res->bindValue(":logradouro", $atributos['logradouro']);
            $res->bindValue(":numero", $atributos['numero']);
            $res->bindValue(":bairro", $atributos['bairro']);
            $res->bindValue(":cidade", $atributos['cidade']);
            $res->bindValue(":estado", $atributos['estado']);

            if($res->execute()){
                return 1;
            }else{
                return 2;
            }
        }else{
            echo('Erro na conexão');
            return 2;
        }

    }
}

?>
