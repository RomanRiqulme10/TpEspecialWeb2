<?php

function showMenu(){
    require ('../templates/header.php');

    $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

    $sentencia = $db->prepare( "select * from jugadores");
    $sentencia->execute();
    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);

 
    foreach ($jugadores as $jugador){

        echo "<a href='estadisticas_jugador'>$jugador->Nombre_Apellido</a>";

    }

    require ('../templates/footer.php');
}

function showJugador(){

    require ('../templates/header.php');

    $db = new PDO('mysql:host=localhost;dbname=estadisticas_futbol;charset=utf8', 'root', '');

    $sentencia = $db->prepare( "select * from jugadores");
    $sentencia->execute();
    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);


    foreach ($jugadores as $jugador){

        echo "<a href='estadisticas_jugador'>$jugador->Nombre_Apellido</a>
       
            <a>$jugador->Edad</a>
            <a>$jugador->Goles</a>
            <a>$jugador->club_id</a>

            <table class='table'>
  <thead>
    <tr>
     
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

        ";

    }



    require ('../templates/footer.php');


}

function showLogin(){

    require ('../templates/header.php');
    echo "
    <form>
  <!-- Email input -->
  <div class='form-outline mb-4'>
    <input type='email' id='form2Example1' class='form-control' />
    <label class='form-label' for='form2Example1'>Email address</label>
  </div>

  <!-- Password input -->
  <div class='form-outline mb-4'>
    <input type='password' id='form2Example2' class='form-control' />
    <label class='form-label' for='form2Example2'>Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class='row mb-4'>
    <div class='col d-flex justify-content-center'>
      <!-- Checkbox -->
      <div class='form-check'>
        <input class='form-check-input' type='checkbox' value='' id='form2Example31' checked />
        <label class='form-check-label' for='form2Example31'> Remember me </label>
      </div>
    </div>

  </div>

  <!-- Submit button -->
  <button type='button' class='btn btn-primary btn-block mb-4'>Sign in</button>


  </div>
</form>
";

    require ('../templates/footer.php');

}

?>

