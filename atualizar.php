<?php
include "conexao.php";
include "verificar_logado.php";

$cod = $_GET['codigo'];
$desc = $_GET['descricao_digitada'];
$setor = $_GET['setor_selecionado'];
$cat = $_GET['categoria'];

$sql = "UPDATE tb_inventarios SET
descricao='$desc', 
setor='$setor', 
categoria ='$cat' WHERE codigo='$cod'";

$atualizar = $pdo->prepare($sql);

try{
    $atualizar->execute();
    header("Location:gerenciar.php?atualizado=OK");
}catch(PDOException $erro){
    echo "Falha ao Atualizar!!". $erro->getMessage();
}



?>