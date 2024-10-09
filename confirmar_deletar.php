<?php

$codigo = $_GET['cod'];

echo"
    Tem certeza que deseja apagar o item Nº $codigo?? <br><br>
    <a href='deletar.php?cod=$codigo'> Sim</a>
    <a href='gerenciar.php'> Não</a>
    ";

?>