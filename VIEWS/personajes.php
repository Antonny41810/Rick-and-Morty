<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rickandmortyapi.com/api/character',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;

$api = json_decode($response, true);
// echo '<pre>';
// print_r($api);
// echo '</pre>';



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Rick y Morty</title>
</head>
<style>
  body {
    background-color: #055160;
  }

  .navbar-brand {
    align-items: center;
  }

  .navbar {
    font-family: Blackadder ITC;
    font-size: 40px;
    color: white;
    text-shadow: 2px 1px 3px #ABC645;
    text-decoration: none;
    margin-left: 2%;

  }

  .navbar,
  a {
    margin-left: 30px;
  }

  .navbar :hover {
    color: #42B5CB;
  }

  .container {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
  }

  .card {
    margin-top: 4%;
    box-shadow: 0px 0px 5px 3px greenyellow;
  }

  .btn {
    background-color: #055160;
    color: white;
    font-family: Blackadder ITC;
    text-shadow: 2px 1px 3px #ABC645;
    font-size: 25px;
  }

  h1 {
    margin-top: 2%;
    font-family: Blackadder ITC;
    text-shadow: 1px 1px 1px #ABC645;
    font-size: 100px;
  }

  .car-body {
    height: 342px;
  }
</style>

<body>
  <nav class="navbar navbar-dark bg-dark" style="margin: 0%">
    <div class="nav justify-content-center" style="align-items: center">
      <a class="navbar-brand" href="#">
        <img src="../ASSETS/nav-removebg-preview.png" alt="" width="250" height="50" class="d-inline-block align-text-top" style="align-content: center;">
      </a>
      <li class="navbar-dark">
        <a class="navbar" aria-current="page" href="http://localhost:8080/Rick and Morty/index.php#">Inicio</a>
      </li>
      <li class="navbar-dark">
        <a class="navbar " aria-current="page" href="http://localhost:8080/Rick and Morty/index.php#">Episodios</a>
      </li>
      <li class="navbar-dark">
        <a class="navbar" aria-current="page" href="http://localhost:8080/Rick and Morty/VIEWS/personajes.php">Personajes</a>
      </li>
    </div>

  </nav>
</body>


<!-- <center><div class="container-img">
<img src="https://i.pinimg.com/originals/59/0a/78/590a785c64227567a943e5cf3dabb92b.jpg"  alt="" width="400" height="500" class="foto" >
<img src="https://www.xtrafondos.com/wallpapers/vertical/todos-los-personajes-de-rick-y-morty-5642.jpg" alt="" width="400" height="500" class="foto" >
<img src="https://w0.peakpx.com/wallpaper/981/1015/HD-wallpaper-rick-morty-collage-adultswim-cartoons-drawings-entertainment-graffiti.jpg" alt=" alt="" width="400" height="500" class="foto" >
<img src="https://gogocatrina.com/wp-content/uploads/2021/09/personajes-animados-rick-y-morty-660x400@2x.jpg" alt="" width="400" height="500" class="foto" >
</div></center> -->
<center>
  <h1>Personajes</h1>
</center>
<center><img src="../ASSETS/perso.png" alt="" width="400" height="350" class="foto"></center>

<div class="container">

  <?php

  // $i = 0;

  foreach ($api['results'] as $value) {
    $id = $value['id'];
    $nombre = $value['name'];
    $status = $value['status'];
    $species = $value['species'];
    $origin = $value['origin']['name'];
    $gender = $value['gender'];
    $location = $value['location']['name'];
    $image = $value['image'];
    $created = $value['created'];
    $url = $value['url'];


  ?>



    <form action="./detalle-personaje.php" method="POST">
      <div class="card mb-3" style="max-width: 540px; max-height: 360px;">
        <div class="row g-0">
          <div class="col-md-4">
            <?php echo '<img src="' . $image . '" class="img-fluid rounded-start" style="height: 350px; margin: 2%; border-radius: 20px">'; ?>
          </div>
          <input type="hidden" value="<?php echo $url ?>" name="url">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo "Personaje" . " " . $id,  ": " . $nombre ?></h5>
              <p class="card-text"><?php echo '<strong>- Status: </strong>' . $status ?> </p>
              <p class="card-text"><?php echo '<strong>- Species: </strong>' . $species ?> </p>
              <p class="card-text"><?php echo '<strong>- Origin: </strong>' . $origin ?> </p>
              <p class="card-text"><?php echo '<strong>- Gender: </strong>' . $gender ?> </p>
              <p class="card-text"><?php echo '<strong>- Location: </strong>' . $location ?> </p>
              <p class="card-text"><?php echo '<strong>- Created: </strong>' . $created ?> </p>
              <center><button type="submit" class="btn "> Detalle </button></center>
            </div>
          </div>
        </div>
      </div>
    </form>

    <?php

    // $i = $i + 1;

    ?>

  <?php } ?>
</div>