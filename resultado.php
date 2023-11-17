<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .selected-items {
            margin-top: 20px;
        }

    </style>
</head>
<body class="selected-items">

<?php
    $tipos_selecionados = isset($_POST['tipos']) ? $_POST['tipos'] : [];
    $formatos_selecionados = isset($_POST['formatos']) ? $_POST['formatos'] : [];
?>

<div class="selected-items">
    <h3>Tipos Selecionados:</h3>
    <p><?php echo implode(', ', $tipos_selecionados); ?></p>

    <h3>Formatos Selecionados:</h3>
    <p><?php echo implode(', ', $formatos_selecionados); ?></p>
</div>


<form action="site.php">
    <button type="submit">Voltar</button>
</form>

<form action="exportar_excel.php" method="post">
    <button type="submit" name="export_excel">Enviar para o Excel</button>
</form>

</body>
</html>
