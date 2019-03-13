<?php

session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$ola = 0;
if(isset($_POST['hospedar'])){
    $ola = 1;
    $query1 = "SELECT id_reserva FROM reserva ORDER BY id_reserva DESC LIMIT 1;";
    $res = mysqli_query($conn,$query1);
    $id = mysqli_fetch_object($res);
    $numero_id = $_POST['id1'];
    $nome = $_POST['nome'];
    $datan_ano = $_POST['ano1'];
    $datan_mes = $_POST['mes1'];
    $datan_dia = $_POST['dia1'];
    $nacionalidade = $_POST['nacio'];
    $resi_pais = $_POST['resip'];
    $resi_cidade = $_POST['resic'];
    $query = "INSERT INTO hospedes (numero_id,nome,data_nascimento,nacionalidade,resi_pais,resi_cidade,id_reserva) VALUES ('$numero_id','$nome','$datan_ano-$datan_mes-$datan_dia','$nacionalidade','$resi_pais','$resi_cidade','$id->id_reserva');";
    $data = mysqli_query ($conn,$query);

    $numero_id = $_POST['id2'];
    $nome = $_POST['nome2'];
    $datan_ano = $_POST['ano2'];
    $datan_mes = $_POST['mes2'];
    $datan_dia = $_POST['dia2'];
    $nacionalidade = $_POST['nacio2'];
    $resi_pais = $_POST['resip2'];
    $resi_cidade = $_POST['resic2'];
    $query = "INSERT INTO hospedes (numero_id,nome,data_nascimento,nacionalidade,resi_pais,resi_cidade,id_reserva) VALUES ('$numero_id','$nome','$datan_ano-$datan_mes-$datan_dia','$nacionalidade','$resi_pais','$resi_cidade','$id->id_reserva');";
    $data = mysqli_query ($conn,$query);

    $numero_id = $_POST['id3'];
    $nome = $_POST['nome3'];
    $datan_ano = $_POST['ano3'];
    $datan_mes = $_POST['mes3'];
    $datan_dia = $_POST['dia3'];
    $nacionalidade = $_POST['nacio3'];
    $resi_pais = $_POST['resip3'];
    $resi_cidade = $_POST['resic3'];
    $query = "INSERT INTO hospedes (numero_id,nome,data_nascimento,nacionalidade,resi_pais,resi_cidade,id_reserva) VALUES ('$numero_id','$nome','$datan_ano-$datan_mes-$datan_dia','$nacionalidade','$resi_pais','$resi_cidade','$id->id_reserva');";
    $data = mysqli_query ($conn,$query);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservar</title>
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
    <?php if($ola != 1){ ?>
    <div class="hosp1">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" accept-charset='UTF-8'>
        Hóspede 1:<br>
        Número de identificação:<br>
        <input type="number" name="id1" min="0" max="999999999">
        Nome:<br>
        <input type="text" name="nome">
        <br>Data de nascimento:<br>
        <input placeholder="Ano" type="number" name="ano1" min="1900" max="3000">
        <input placeholder="Mês" type="number" name="mes1" min="1" max="12">
        <input placeholder="Dia" type="number" name="dia1" min="1" max="31">
        <br>Nacionalidade:<br>
        <input type="text" name="nacio">
        <br>País de residência:<br>
        <input type="text" name="resip">
        <br>Cidade de residência:<br>
        <input type="text" name="resic">

        Hóspede 2:<br>
        Número de identificação:<br>
        <input type="number" name="id2" min="0" max="999999999">
        Nome:<br>
        <input type="text" name="nome2">
        <br>Data de nascimento:<br>
        <input placeholder="Ano" type="number" name="ano2" min="1900" max="3000">
        <input placeholder="Mês" type="number" name="mes2" min="1" max="12">
        <input placeholder="Dia" type="number" name="dia2" min="1" max="31">
        <br>Nacionalidade:<br>
        <input type="text" name="nacio2">
        <br>País de residência:<br>
        <input type="text" name="resip2">
        <br>Cidade de residência:<br>
        <input type="text" name="resic2">

        Hóspede 3:<br>
        Número de identificação:<br>
        <input type="number" name="id3" min="0" max="999999999">
        Nome:<br>
        <input type="text" name="nome3">
        <br>Data de nascimento:<br>
        <input placeholder="Ano" type="number" name="ano3" min="1900" max="3000">
        <input placeholder="Mês" type="number" name="mes3" min="1" max="12">
        <input placeholder="Dia" type="number" name="dia3" min="1" max="31">
        <br>Nacionalidade:<br>
        <input type="text" name="nacio3">
        <br>País de residência:<br>
        <input type="text" name="resip3">
        <br>Cidade de residência:<br>
        <input type="text" name="resic3">
        <div><input class="butao" type="submit" name="hospedar" value="Reservar"></span></div><br>
    </form>
    </div>
    <?php }else{ ?>
    <a href="/site2/index.html"><p> Voltar ao menu principal. </p></a>
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
