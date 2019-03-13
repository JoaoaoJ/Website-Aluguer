<?php

session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$id_user = 0;
$hosp = 0;
if(isset($_POST['reserva'])){
    $hosp = $_POST['hosp'];
    $id_imovel = $_POST['imovel'];
    $datae_ano = $_POST['anoe'];
    $datae_mes = $_POST['mese'];
    $datae_dia = $_POST['diae'];
    $datas_ano = $_POST['anos'];
    $datas_mes = $_POST['mess'];
    $datas_dia = $_POST['dias'];
    $query = "INSERT INTO reserva (data_entrada,data_saida,nr_hospedes,id_imovel) VALUES ('$datae_ano-$datae_mes-$datae_dia','$datas_ano-$datas_mes-$datas_dia','$hosp','$id_imovel');";
    $data = mysqli_query ($conn,$query);

    $query1 = "SELECT id_imovel FROM reserva ORDER BY id_reserva DESC LIMIT 1;";
    $res = mysqli_query($conn,$query1);
    $id = mysqli_fetch_object($res);
    $id_user = $_SESSION['id_user'];
    $query2 = "UPDATE imoveis SET id_user = $id_user WHERE id_imovel = $id->id_imovel;";
    $data2 = mysqli_query($conn, $query2);

    $query3 = "SELECT id_reserva FROM reserva ORDER BY id_reserva DESC LIMIT 1;";
    $res1 = mysqli_query($conn, $query3);
    $hist = mysqli_fetch_object($res1);
    $query4 = "INSERT INTO historico (id_user, id_reserva) VALUES ('$id_user', '$hist->id_reserva');";
    $data4 = mysqli_query($conn, $query4);

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Imóveis</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php">Imovéis</a>
        <a href="/site2/reserva/reserva.php" class="active">Reservas</a>
        <a href="/site2/historico/historico.php">Histórico</a>
        <a href="/site2/login/login.php">Login</a>
        <a href="/site2/contacto/contacto.php">Contactos</a>
    </div>
    <h1 id="titulo">Reservar</h1>

    <?php if($hosp == 0){ ?>
    <div class="formu">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" accept-charset='UTF-8'>
            Imóveis:<br>
            <select class="input" name="imovel">
                <option value="1" >Imóvel 1</option>
                <option value="2" >Imóvel 2</option>
                <option value="3" >Imóvel 3</option>
            </select>
            <br>Data de entrada:<br>
            <input class="input" type="number" name="anoe" min="2018" max="3000">
            <input class="input" type="number" name="mese" min="1" max="12">
            <input class="input" type="number" name="diae" min="1" max="31">
            <br>Data de saída:<br>
            <input class="input" type="number" name="anos" min="2018" max="3000">
            <input class="input" type="number" name="mess" min="1" max="12">
            <input class="input" type="number" name="dias" min="1" max="31">
            <br>Número de hóspedes:<br>
            <input class="input" type="number" name="hosp" min="1" max="5">
            <div><input class="butao" type="submit" name="reserva" value="Reservar"  ></span></div><br>
        </form>
    </div>
    <?php }elseif($hosp == 1 && isset($_POST['reserva'])){ ?>
    <a href="/site2/reserva/hospedes1/hospedes1.php"><p>Adicione hóspedes</p></a>

    <?php }elseif($hosp == 2 && isset($_POST['reserva'])){ ?>
    <a href="/site2/reserva/hospedes2/hospedes2.php"><p>Adicione Hóspedes</p></a>

    <?php }elseif($hosp == 3 && isset($_POST['reserva'])){ ?>
    <a href="/site2/reserva/hospedes3/hospedes3.php"><p>Adicione Hóspedes</p></a>

    <?php }elseif($hosp == 4 && isset($_POST['reserva'])){ ?>
    <a href="/site2/reserva/hospedes4/hospedes4.php"><p>Adicione Hóspedes</p></a>

    <?php }elseif($hosp == 5 && isset($_POST['reserva'])){ ?>
    <a href="/site2/reserva/hospedes5/hospedes5.php"><p>Adicione Hóspedes</p></a>
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
