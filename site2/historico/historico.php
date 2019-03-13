<?php
session_start();
$conn = mysqli_connect("localhost","id7506421_root","password","id7506421_site");

$id_user = $_SESSION["id_user"];
$query = "SELECT id_reserva FROM historico WHERE id_user = $id_user;";
$res = mysqli_query($conn, $query);


?>

<!DOCTYPE html>

<html>

<head>
    <title>Histórico</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
      table{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        font-size: 200%;
        border: 1px solid black;
        border-collapse: collapse;
        position: relative;
        width: 700px;;
        left: 440px;
      }
      td, th{
        border: 1px solid black;
      }

    </style>
</head>

<body>
    <header><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></header>
    <div class="topnav" id="myTopnav">
        <a href="index.html">Home</a>
        <a href="/site2/imoveis/imoveis.php">Imovéis</a>
        <a href="/site2/reserva/reserva.php">Reservas</a>
        <a href="/site2/historico/historico.php" class="active">Histórico</a>
        <a href="/site2/login/login.php">Login</a>
        <a href="/site2/contacto/contacto.php">Contactos</a>
    </div>
    <h1 class="titulo">Histórico de reservas</h1>

    <div class="historico">
      <?php while($id_reserva = mysqli_fetch_object($res)){

      $query1 = "SELECT * FROM reserva WHERE id_reserva = $id_reserva->id_reserva;";
      $result = mysqli_query($conn,$query1);

      while($row = mysqli_fetch_array($result)){

      ?>
      <table class="tabela">
        <tr>
        <th>Data entrada</th>
        <th>Data saída</th>
        <th>Número de hóspedes</th>
        <th>ID Imóvel</th>
        </tr>
        <td><?php echo($row['data_entrada']); ?></td>
        <td><?php echo($row['data_saida']); ?></td>
        <td><?php echo($row['nr_hospedes']); ?></td>
        <td><?php echo($row['id_imovel']); ?></td>
      </table>
    </div>
  <?php }
} ?>

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
