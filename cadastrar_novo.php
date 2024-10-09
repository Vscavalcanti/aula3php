<?php
include "verificar_logado.php"
?>
<h1>Cadastrar novos itens</h1>

<form action="inserir.php" method="get">
    <label for="">Descrição:</label><br>
    <textarea name="descricao_digitada" 
    cols="50" rows="10"></textarea>
    <BR></BR>

    <label for="">Setor:</label>
    <select name="setor_selecionado" id="">
        <option value="">Selecione</option>
        <option value="Administrativo">Administrativo</option>
        <option value="Suporte">Suporte</option>
        <option value="NAD">NAD</option>
        <option value="NEP">NEP</option>
        <option value="Financeiro">Financeiro</option>
        <option value="Atendimento">Atendimento</option>
    </select><br><br>
    <label for="">Categoria:</label><br>
    <input type="text" name="categoria"><BR></BR>
    <button type="submit">Salvar</button>
</form>