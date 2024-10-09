<?php

include "conexao.php";

$desc = $_GET['descricao_digitada'];
$setor= $_GET['setor_selecionado'];
$cat = $_GET['categoria'];

$sql = "INSERT INTO tb_inventarios 
(descricao, setor, categoria) values
('$desc','$setor','$cat')";

$inserir =$pdo->prepare($sql);

try{
    $inserir->execute();
    echo "
    <script>
        alert('Cadastrado com sucesso');
    </script>
    ";
}catch(PDOException $erro){
    echo "Falha ao inserir" . $erro->getMessage();
}



?>