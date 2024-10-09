<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="menu_top">
    <a href="index.php">Início</a>
    <a href="gerenciar.php" target="conteudo">Gerenciar Materias</a>
    <a href="cadastrar_novo.php" target="conteudo">Cadastrar Materiais</a>
    <a href="logout.php"><?php echo $_SESSION['nome'];?> Sair</a>
    </div>
</body>
</html>