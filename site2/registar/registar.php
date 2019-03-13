<?php

$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$data = 0;
$erro = 0;

$mensagem = "";
if(isset($_POST['registar'])){
    if($_POST['password'] != $_POST['password-rpt']){
        $mensagem = "As passwords não são iguais.";
        $erro = 1;
    }

    if(!$erro){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql="select * from users where (email='$email');";
        $res=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        if($email==$row['email'])
        {
            $mensagem = "Utilizador já existe.";
        }
        elseif($pass == $_POST['password-rpt']){
            $query = "INSERT INTO users (email,password) VALUES ('$email','$pass')";
            $data = mysqli_query ($conn,$query);
            if($data){
                $data = 1;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registar</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        .formulario{
            width: 500px;
            height: 520px;
            position: relative;
            left: 500px;
            background-color: #333;
            text-align: center;
            padding-bottom: 10px;
            color: white;
            border-radius: 2px;
        }
        .formulario .titulo{
            font-size: 300%;
            position: relative;
            top: 20px;
        }
        .formulario .container .input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #f2f4f6;
            box-sizing: border-box;
        }
        .formulario .container .butao{
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .formulario .container .labels{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 100%;
        }
        .registado{
            width: 500px;
            height: 200px;
            position: relative;
            left: 500px;
            top: 150px;
            background-color: #333;
            text-align: center;
            padding-bottom: 10px;
            color: white;
            border-radius: 2px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 200%;
        }
        .registado .texto{
            position: relative;
            top: 70px;
        }
    </style>
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
    <?php if($data!=1){ ?>
    <div class="formulario">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method='post' accept-charset='UTF-8'>
            <div class="container">
                <h1 class="titulo">Preencha o formulário para se registar.</h1>

                <label class="labels" for="email"><b>Email</b></label><br>
                <input class="input" type="text" placeholder="Ensira um Email" name="email" required><br>

                <label class="labels" for="psw"><b>Password</b></label><br>
                <input class="input" type="password" placeholder="Ensira uma Password" name="password" required><br>

                <label class="labels" for="psw-repeat"><b>Repita a Password</b></label><br>
                <input class="input" type="password" placeholder="Repita a Password" name="password-rpt" required><br>
                <div><input class="butao" type="submit" name="registar" value="Registar" class="butao-registar"></span></div><br>
            </div>

            <div class="container signin">
                <p>Já tem uma conta? <a href="/site2/login/login.php">Faça login.</a>.</p>
            </div>
        </form>
    <p><?php echo $mensagem ?></p>
    </div>
    <?php } else { ?>
    <div class="registado">
        <p class="texto">Parabéns está agora registado. Por favor faça <a href="/site2/login/login.php">login.</a></p>
    </div>
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
