<?php
include "conexao.php";
include "verificar_logado.php";

$codigo = $_GET['cod'];

$sql = "SELECT * FROM tb_inventarios
        WHERE codigo='$codigo'";

$consultar = $pdo->prepare($sql);

try{
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $descricao = $resultado['descricao'];
    $setor = $resultado['setor'];
    $categoria = $resultado['categoria'];
}catch(PDOException $erro){
    echo "Falha ao consultar!!".$erro->getMessage();
}
?>
<h1>Editar Item</h1>

<form action="atualizar.php" method="get">
    <label for="">Codigo:</label>
    <input type="text" value='<?php echo $codigo;?>' hidden><br><br>

    <label for="">Descrição:</label><br>
    <textarea name="descricao_digitada" 
    cols="50" rows="10"><?php echo $descricao; ?></textarea>
    <BR></BR>

    <label for="">Setor:</label>
    <select name="setor_selecionado" id="">
        <option value="">Selecione</option>
        <option value="Administrativo" <?php echo ( $setor == 'Administrativo')? "selected":"";?>>Administrativo</option>
        <option value="Suporte"<?php echo ( $setor == 'Suporte')? "selected":"";?>>Suporte</option>
        <option value="NAD"<?php echo ( $setor == 'NAD')? "selected":"";?>>NAD</option>
        <option value="NEP"<?php echo ( $setor == 'NEP')? "selected":"";?>>NEP</option>
        <option value="Financeiro"<?php echo ( $setor == 'Financeiro')? "selected":"";?>>Financeiro</option>
        <option value="Atendimento"<?php echo ( $setor == 'Atendimento')? "selected":"";?>>Atendimento</option>
    </select><br><br>
    <label for="">Categoria:</label><br>
    <input type="text" name="categoria" value='<?php echo $categoria; ?>'><BR></BR>
    <button type="submit">Salvar</button>
</form>