<?php
include "conexao.php";
$user =$_POST ['usuario_digitado'];
$senha =$_POST ['senha_digitada'];

$sql = "SELECT * FROM tb_usuarios WHERE 
username='$user' AND password='$senha'";

$consultar =$pdo->prepare($sql);

try{   
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    
    if($resultado){
        session_start();
        $_SESSION['logado']= "Sim";
        $_SESSION['nome'] = $resultado['nome_completo'];
        header("Location: index.php");
    }else{
        header("Location:login.php?erro1=sim");
    }
}catch(PDOException $erro){
    echo"Falha no login". $erro->getMessage();
}

?>