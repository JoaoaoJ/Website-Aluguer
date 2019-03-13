<?php

session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$sql = "select tipo from imoveis where id_imovel=1;";
$res = mysqli_query($conn,$sql);
$tipo = mysqli_fetch_object($res);

$sql1 = "select tipologia from imoveis where id_imovel=1;";
$res1 = mysqli_query($conn,$sql1);
$tipologia = mysqli_fetch_object($res1);

$sql2 = "select lotacao from imoveis where id_imovel=1;";
$res2 = mysqli_query($conn,$sql2);
$lotacao = mysqli_fetch_object($res2);

$sql3 = "select preco from imoveis where id_imovel=1;";
$res3 = mysqli_query($conn,$sql3);
$preco = mysqli_fetch_object($res3);

$sql4 = "select localizacao from imoveis where id_imovel=1;";
$res4 = mysqli_query($conn,$sql4);
$local = mysqli_fetch_object($res4);

$sql5 = "select descricao from imoveis where id_imovel=1;";
$res5 = mysqli_query($conn,$sql5);
$desc = mysqli_fetch_object($res5);

$sql6 = "select id_imovel from reserva;";
$res6 = mysqli_query($conn,$sql6);
$row = mysqli_fetch_assoc($res6);

$result = mysqli_query($conn, "SELECT id_imovel FROM reserva WHERE id_imovel = '1';");

?>



<!DOCTYPE html>
<html>

<head>
    <title>Imóveis</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
        .container .img{
            position: relative;
            width: 500px;
            left: 50px;
            top: 50px;
        }
        .container .info{
            position: relative;
            width: 500px;
            left: 500px;
            top: -300px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: left;
            font-size: 200%;
        }
        .container{
            position: relative;
            background-color:#333;
            color: white;
            width: 1000px;
            height: 400px;
            left: 250px;
            padding-bottom: 10px;
            border-radius: 2px;
        }
        .container .reservar{
            position: relative;
            top: -300px;
            left: 500px;
            width: 100px;
            color: white;
            text-align: center;
            height: 30px;
            background-color: red;
            border-radius: 2px;
        }
        .container .reservar .res{
            position: relative;
            top: 5px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>

<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php" class="active">Imovéis</a>
        <a href="/site2/reserva/reserva.php">Reservas</a>
        <a href="/site2/historico/historico.php">Histórico</a>
        <a href="/site2/login/login.php">Login</a>
        <a href="/site2/contacto/contacto.php">Contactos</a>
    </div>
    <h1 id="titulo">Imóveis</h1>

    <div class="container">
        <div class="img">
            <img id="img_1" src="http://ppdoconference.org/wp-content/uploads/2018/09/varanda-gourmet-pequena-apartamento-bonita-apartamento-em-santana-alvorada-santana-of-varanda-gourmet-pequena-apartamento-500x500.jpg">
        </div>
        <div class="info">
            <p>Disponibilidade: <?php if($result->num_rows == 0) { ?>Disponível <?php }else{ ?>Reservado <?php } ?> <br>Tipo: <?php echo($tipo->tipo) ?> <br>Tipologia: <?php echo($tipologia->tipologia) ?> <br>
            Lotação: <?php echo($lotacao->lotacao) ?> pessoas <br>Preço: <?php echo($preco->preco) ?>€ (por dia) <br>
            Localização: <?php echo($local->localizacao) ?> <br>Descrição: <?php echo($desc->descricao) ?> </p>
        </div>
        <div class="reservar">
            <?php if($result->num_rows == 0) { ?>
            <a href="/site2/reserva/reserva.php"><p class="res">Reservar</p></a>
            <?php }else{ ?>
            <p class="res">Reservado</p>
            <?php } ?>
        </div>
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
