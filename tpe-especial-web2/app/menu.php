<?php

function showJugador()
{

  require_once('./templates/header.php');

  $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

  $sentencia = $db->prepare("select * from jugadores");
  $sentencia->execute();
  $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);


  echo "
  <div class= 'table-resposnive'>
  <table class= 'table'>
    <thead>
            <tr>
              <th socpe='row'>NOMBRE JUGADOR</th>
              <th scope='row'>EDAD</th>
              <th scope='row'>GOLES</th>
              <th scope='row'>CLUB_ID</th>
            </tr>
          </thead>
          </table>
        <div>  ";

  foreach ($jugadores as $jugador) {
    echo "
      <div class= 'table-resposnive'>
      <table class= 'table'>
          <tbody>
            <tr>
              <td>$jugador->Nombre_Apellido</td>
              <td>$jugador->Edad</td>
              <td>$jugador->Goles</td>
              <td>$jugador->club_id</td>
            </tr>
          </tbody>
        </table>
        </div>";
  }

  require_once('./templates/footer.php');
}

function showJugadoresxCLub()
{

  require('./templates/header.php');

  $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

  $sentencia = $db->prepare("select * from jugadores");
  $sentencia->execute();
  $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);

  echo "
  <div class= 'table-resposnive'>
  <table class= 'table'>
    <thead>
            <tr>
              <th socpe='row'>NOMBRE JUGADOR</th>
              <th scope='row'>CLUB_ID</th>
            </tr>
          </thead>
          </table>
        <div>  ";


  foreach ($jugadores as $jugador) {
    echo "
      <div class= 'table-resposnive'>
      <table class= 'table'>
          <tbody>
            <tr>
              <td>$jugador->Nombre_Apellido</td>
              <td>$jugador->club_id</td>
            </tr>
          </tbody>
        </table>
        </div>";
  }
  require('./templates/footer.php');
}

function showJugadores()
{

  require('./templates/header.php');

  $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

  $sentencia = $db->prepare("select * from jugadores");
  $sentencia->execute();
  $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);

  echo "
  <div class= 'table-resposnive'>
  <table class= 'table'>
    <thead>
            <tr>
              <th scope='row'>NOMBRE JUGADOR</th>
              <th scope='row'>CLUB_ID</th>
            </tr>
          </thead>
          </table>
  <div>  ";

  foreach ($jugadores as $jugador) {
    echo "
      <div class= 'table-resposnive'>
      <table class= 'table'>
          <tbody>
            <tr>
              <td>$jugador->Nombre_Apellido</td>
              <td>$jugador->club_id</td>
            </tr>
          </tbody>
        </table>
        </div>";
  }
  require('./templates/footer.php');
}

function showClubes()
{

  require('../templates/header.php');

  $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

  $sentencia = $db->prepare("select * from clubes");
  $sentencia->execute();
  $clubes = $sentencia->fetchAll(PDO::FETCH_OBJ);

  echo "
  <div class= 'table-resposnive'>
  <table class= 'table'>
    <thead>
            <tr>
              <th socpe='row'>CLUB</th>
              <th scope='row'>ESTADIO</th>
              <th scope='row'>TITULOS</th>
            </tr>
          </thead>
          </table>
        <div>  ";

  foreach ($clubes as $club) {
    echo "
      <div class= 'table-resposnive'>
      <table class= 'table'>
          <tbody>
            <tr>
              <td>$club->Club</td>
              <td>$club->Estadio</td>
              <td>$club->Titulos</td>
            </tr>
          </tbody>
        </table>
        </div>";
  }

  require('../templates/footer.php');
}
