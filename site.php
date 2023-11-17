<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="selected-items">
<form action="resultado.php" method="post">
    <h3>Selecione o Tipo:</h3>
    <div class="checkbox-list">
        <input type="checkbox" name="tipos[]" value="Aluno Extensão">Aluno Extensão<br>
        <input type="checkbox" name="tipos[]" value="Aluno Graduação">Aluno Graduação<br>
        <input type="checkbox" name="tipos[]" value="Corpo Docente">Corpo Docente<br>
    </div>

    <h3>Selecione o Formato:</h3>
    <div class="checkbox-list">
        <input type="checkbox" name="formatos[]" value="Acesso aos Micros">Acesso aos Micros<br>
        <input type="checkbox" name="formatos[]" value="Jogos">Jogos<br>
        <input type="checkbox" name="formatos[]" value="Pesquisa Acervo">Pesquisa Acervo<br>
    </div>

    <button type="submit">Mostrar Resultado</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipos_selecionados = isset($_POST['tipos']) ? $_POST['tipos'] : [];
    $formatos_selecionados = isset($_POST['formatos']) ? $_POST['formatos'] : [];
?>

<div class="selected-items">
    <h3>Tipos Selecionados:</h3>
    <p><?php echo implode(', ', $tipos_selecionados); ?></p>

    <h3>Formatos Selecionados:</h3>
    <p><?php echo implode(', ', $formatos_selecionados); ?></p>
</div>

<?php } ?>

</body>
</html>