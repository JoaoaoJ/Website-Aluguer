<?php
session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$message="";
if(!empty($_POST["login"])) {
	$result = mysqli_query($conn,"SELECT * FROM users WHERE Email='" . $_POST["Email"] . "' and password = '". $_POST["password"]."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["id_user"] = $row['id_user'];
	} else {
	$message = "Invalid Email or Password!";
	}
}
if(!empty($_POST["logout"])) {
	$_SESSION["id_user"] = "";
	session_destroy();
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php">Imovéis</a>
        <a href="/site2/reserva/reserva.php">Reservas</a>
        <a href="/site2/historico/historico.php">Histórico</a>
        <a href="/site2/login/login.php" class="active">Login</a>
        <a href="/site2/contacto/contacto.php">Contactos</a>
    </div>
    <div class="container">
        <div class="conteudo">
        <h1 class="titulo">Faça login!</h1>
        <?php if(empty($_SESSION["id_user"])) { ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="frmLogin">
            <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
            <div class="field-group">
                <div class="labels"><label for="login">Email</label></div>
                <div><input name="Email" type="text" class="input-field"></div>
            </div>
            <div class="field-group">
                <div class="labels"><label for="password">Password</label></div>
                <div><input name="password" type="password" class="input-field"> </div>
            </div>
            <div class="field-group">
                <div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
            </div>
        </form>
        <p class="register">Caso ainda não tenha conta clique aqui para se <a href="/site2/registar/registar.php">registar</a>.</p>
        </div>
    </div>
    <?php
    } else {
    $result = mysqlI_query($conn,"SELECT * FROM users WHERE id_user='" . $_SESSION["id_user"] . "'");
    $row  = mysqli_fetch_array($result);
    ?>
    <form action="" method="post" id="frmLogout">
    <div class="member-dashboard">Bem-vindo <?php echo utf8_encode(ucwords($row['email'])); ?>, está agora logado no website.<br>
    Clique para fazer <input type="submit" name="logout" value="Logout" class="logout-button"></div>
    </form>
    <?php } ?>
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
