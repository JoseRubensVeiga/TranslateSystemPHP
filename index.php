<?php require 'helpers/helper.php'; ?>
<!DOCTYPE html>
<html lang="<?= getLanguage(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial</title>
</head>
<body>
    <h1>Sistema de tradução</h1>
    <h4>Insira no html as tags PHP ou da forma contaída &lt?= ?> com a função __() </h4>


    desse modo: __('texto a ser traduzido')
    <br>
    Exemplo real:
    <strong><?php __('Olá Mundo') ?></strong>

    
    <p>Veja no código fonte do arquivo</p>
    
</body>
</html>