<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as credenciais são válidas (usuário fixo "CDL" e senha fixa "2023")
    if ($_POST['uname'] === 'CDL' && $_POST['psw'] === '2023') {
        // Redireciona para a página "site.php" após o login bem-sucedido
        header("Location: site.php");
        exit();
    } else {
        // Caso as credenciais estejam incorretas, você pode exibir uma mensagem de erro ou redirecionar para a página de login
        echo "Credenciais incorretas. Tente novamente.";
    }
}
?>
