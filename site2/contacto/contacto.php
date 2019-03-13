<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = "jonasmiguel99@hotmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "De: ".$email;
    $txt = "Nome: ".$name."\nEmail: ".$email."\n\n".$message;

    mail($to, $subject, $txt, $headers);
}


?>


<!DOCTYPE html>
<html>

<head>
    <title>Contactos</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php">Imovéis</a>
        <a href="/site2/reserva/reserva.php">Reservas</a>
        <a href="/site2/historico/historico.php">Histórico</a>
        <a href="/site2/login/login.php">Login</a>
        <a href="/site2/contacto/contacto.php" class="active">Contactos</a>
    </div>
    <h1 id="titulo">Contacte-nos!</h1>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nome"><br>
            <input type="text" name="email" placeholder="E-mail"><br>
            <input type="text" name="subject" placeholder="Assunto"><br>
            <textarea name="message" placeholder="Mensagem"></textarea><br>
            <button type="submit" name="submit">Enviar</button>
        </form>
    </div>

    <div class="footer">
        <div class="sitio">
            <p>0000, Lourosa<br>
                Avenida Principal,<br>
                Aveiro, Portugal.</p>
        </div>
        <div class="contacto">
            <a href="#contactos">
                <h1 id="h1">Contacte-nos:</h1>
            </a>
            <p>919999999<br>jonasmiguel99@hotmail.com</p>
        </div>
        <div>
            <p class="p1">Bem Vindo ao nosso website!</p>
        </div>
    </div>
</body>

</html>
