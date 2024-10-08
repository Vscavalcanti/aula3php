<?php
include "verificar_logado.php"
?>
<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<h1>Gerenciamento de Inventarios</h1>
<?php
include "conexao.php";

$sql =  "SELECT * FROM tb_inventarios";

$consultar = $pdo->prepare($sql);

try{
    $consultar->execute();
    $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
    echo "<div id='materiais'>";
    foreach($resultados as $item){
        $codigo = $item['codigo'];
        $descricao = $item['descricao'];
        $setor = $item['setor'];
        $categoria = $item['categoria'];
    echo"
        <div id='cartoes'>
        <h3>Nº $codigo</h3>
        <p>$descricao</p>
        <p>Setor: $setor</p>
        <p>Categoria: $categoria</p>
        <button>✏ Editar</button>
        <button>🗑Deletar</button>
        </div>
    ";
}
    echo "</div>" ;

}catch(PDOException $erro){
    echo"Falha ao consultar" . $erro->getMessage();
}

?>
