<?php

session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$sql = 'select id_imovel from reserva;';
$res=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);


?>



<!DOCTYPE html>
<html>

<head>
    <title>Imóveis</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <?php if(isset($_POST['procurar'])){
      if($_POST['imovel'] == 1){ ?>
        <script type="text/javascript">location.href = '/site2/imoveis/imovel_1/imovel_1.php';</script>
      <?php }elseif ($_POST['imovel'] == 2) { ?>
        <script type="text/javascript">location.href = '/site2/imoveis/imovel_2/imovel_2.php';</script>
      <?php }elseif ($_POST['imovel'] == 3) { ?>
        <script type="text/javascript">location.href = '/site2/imoveis/imovel_3/imovel_3.php';</script>
      <?php }
    } ?>
    <style>
    .container{
      position: relative;
      top: 50px;

    }
    .regiao{
      position: relative;
      left: 670px;
      width: 500px;

    }
    </style>
</head>

<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php"  class="active">Imovéis</a>
        <a href="/site2/reserva/reserva.php">Reservas</a>
        <a href="/site2/historico/historico.php">Histórico</a>
        <a href="/site2/login/login.php">Login</a>
        <a href="/site2/contacto/contacto.php">Contactos</a>
    </div>
    <h1 id="titulo">Imóveis</h1>
    <div class="regiao">
      <form action="" method="post">
        Procurar por região:
        <select class="input" name="imovel">
            <option value="1" >Porto</option>
            <option value="2" >Lisboa</option>
            <option value="3" >Algarve</option>
        </select>
        <input class="butao" type="submit" name="procurar" value="Procurar">
      </form>
    </div>
    <div class="container">
        <div id="imv_1">
            <a href="/site2/imoveis/imovel_1/imovel_1.php"><img id="img_1" src="http://ppdoconference.org/wp-content/uploads/2018/09/varanda-gourmet-pequena-apartamento-bonita-apartamento-em-santana-alvorada-santana-of-varanda-gourmet-pequena-apartamento-500x500.jpg"></a>
        </div>
        <div id="imv_2">
            <a href="/site2/imoveis/imovel_2/imovel_2.php"><img id="img_2" src="https://robinsonplans.com/wp-content/uploads/2015/12/SCOTTSDALE-MISSION-HOME-PLANS-500x500.jpg"></a>
        </div>
        <div id="imv_3">
            <a href="/site2/imoveis/imovel_3/imovel_3.php"><img id="img_3" src="https://www.oakfurnitureuk.co/media/catalog/category/cache/1/catalog/category/500x500/17f82f742ffe127f42dca9de82fb58b1/Cheshire_Light_Oak_Bedroom_Furniture.jpg"></a>
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
