<?php
include "conexao.php";
include "verificar_logado.php";

$codigo =$_GET['cod'];

$sql = "DELETE FROM tb_inventarios WHERE codigo='$codigo'";

$deletar= $pdo->prepare($sql);

try{
    $deletar->execute();
    echo"<script>
        alert('Deletado com sucesso!!');
        </script>
    ";

}catch(PDOException $erro){
    echo"Falha ao deletar!" . $erro->getMessage();
}


?>