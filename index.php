<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rickandmortyapi.com/api/episode',
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
//echo $response;

$api = json_decode($response, true);
// echo '<pre>';
// print_r($api);
// echo '</pre>';

$imagenes = array(
  "https://indiehoy.com/wp-content/uploads/2018/03/rick-morty-1200x675.jpg",
  "https://espresso.codeforces.com/61dcf062c022f6ca6a051935d105ab8c874a42c0.png",
  "https://images-na.ssl-images-amazon.com/images/I/91XwjcNNC+L.jpg",
  "https://i.pinimg.com/736x/d5/03/e6/d503e62786fe4be48c84f625bf4399b0.jpg",
  "https://i.kym-cdn.com/entries/icons/original/000/037/441/cover_image_cropped_(1).jpg",
  "https://m.media-amazon.com/images/M/MV5BZWNhYjI3NjYtYjEzOS00ZDNjLWE4MmEtMjY2NThkZGRmNDdiXkEyXkFqcGdeQXVyODk1NDIxMTU@._V1_.jpg",
  "https://simkl.net/episodes/41/4106112e98389936d_0.jpg",
  "https://cdn.mos.cms.futurecdn.net/eZDrH2jKK8oe96MGxFFdeR-1200-80.jpg",
  "https://i.pinimg.com/originals/35/1c/4b/351c4baeb071164450be938ee0be7a4c.png",
  "https://preview.redd.it/4tntrki0r5p61.png?auto=webp&s=84608f9b8454b1fa31aaced4e8b7126e3f3c77b3",
  "https://imagenes.20minutos.es/files/og_thumbnail/uploads/imagenes/2021/06/17/ricksy-business.png",
  "https://i.pinimg.com/originals/48/7e/52/487e52da47e7de0fc5fb67589e09c3ab.jpg",
  "https://cdn.pastemagazine.com/www/articles/mortynight%20run%20main.jpg",
  "https://salesmanricks.com/wp-content/uploads/sites/2/2017/01/Rick-and-Morty-Season-2-Episode-3-Auto-Erotic-Assimilation.jpg",
  "https://elvertederodeideas.files.wordpress.com/2018/05/total-rickall.png",
  "https://miro.medium.com/max/1400/1*8cVpDopxNFCUcNYAlfO5TQ.png",
  "https://sm.ign.com/t/ign_latam/screenshot/9/9-the-rick/9-the-ricks-must-be-crazy-s2e6brbrever-wonder-how-rick-power_fp1z.1080.jpg",
  "https://y.yarn.co/f721b2b8-9e92-438c-a809-43467318798d_screenshot.jpg",
  "https://rickandmortypod.com/wp-content/uploads/2018/12/Interdimensional-Cable-2.jpg",
  "https://i.ytimg.com/vi/tJK9hh1j0Ag/maxresdefault.jpg",
);

// $texto = array (
//   "Pilot es el primer episodio de la Primera Temporada de Rick y Morty y el primer episodio en general. Se estren?? el 2 de diciembre de 2013. Fue escrito por Dan Harmon y Justin Roiland, y dirigida por Justin Roiland. Rick lleva a Morty a un viaje a otra dimensi??n para encontrar semillas para mega??rboles, mientras Jerry y Beth discuten sobre la influencia de Rick en su hijo.",
//   "Lawnmower Dog es el segundo episodio de la Primera Temporada de Rick y Morty y el segundo episodio en general. Se estren?? el 9 de diciembre de 2013. Fue escrito por Ryan Ridley y dirigido por John Rice. Rick dise??a un aparato para que Snuffles, el perro de la Familia Smith sea m??s inteligente, pero sale mal. Rick y Morty invaden los sue??os del profesor de matem??ticas de Morty.",
//   "Anatomy Park es el tercer episodio de la Primera Temporada de Rick y Morty y el tercer episodio en general. Se estren?? el 16 de diciembre de 2013. Fue escrito por Eric Acosta y Wade Randolph, y dirigido por John Rice. Morty se adentra en un extra??o parque tem??tico de enfermedades infecciosas y ubicados en el interior de un vagabundo. Los padres de Jerry presentan a su amante compartido en el d??a de Navidad.",
//   "M. Night Shaym-Aliens es el cuarto episodio de la Primera Temporada de Rick y Morty y el cuarto episodio en general. Se estren?? el 13 de enero de 2014. Fue escrito por Tom Kauffman y dirigido por Jeff Myers. Extraterrestres env??an a Rick, Morty y Jerry a una realidad alterna, donde Rick intenta salvarlos mientras el distra??do Jerry promueve un eslogan para vender manzanas.",
//   "Meeseeks and Destroy es el quinto episodio de la Primera Temporada de Rick y Morty y el quinto episodio en general. Se estren?? el 20 de enero de 2014. Fue escrito por Ryan Ridley y dirigido por Bryan Newton. Morty est?? cansado de las locuras de Rick, as?? que propone una aventura supuestamente m??s tranquila. Jerry conjura a una extra??a criatura para ayudarlo en el golf.",
//   "Rick Potion #9 es el sexto episodio de la primera temporada de Rick and Morty . Es el sexto episodio de la serie en general. Se estren?? el 27 de enero de 2014. Fue escrita por Justin Roiland y dirigida por Stephen Sandoval. Una poci??n dise??ada para hacer que Morty sea atractivo para una chica se vuelve viral e infecta a toda la Tierra, por lo que Rick tiene que arreglar el desastre creando otro desastre.",
//   "Raising Gazorpazorp es el s??ptimo episodio de la primera temporada de Rick and Morty . Es el s??ptimo episodio de la serie en general. Se estren?? el 10 de marzo de 2014. Fue escrita por Eric Acosta & Wade Randolph y dirigida por Jeff Myers . Despu??s de que Morty engendra un ni??o con un robot sexual, Rick y Summer visitan el planeta del robot, donde el ni??o se convierte en adulto en cuesti??n de d??as.",
//   "Rixty Minutes es el octavo episodio de la primera temporada de Rick and Morty . Es el octavo episodio de la serie en general. Se estren?? el 17 de marzo de 2014. Fue escrita por Tom Kauffman y Justin Roiland y dirigida por Bryan Newton . Sin impresionarse con lo que hay en la televisi??n, Rick instala un cable que recibe programas de otras dimensiones. Todos usan gafas especiales para verse a s?? mismos.", 
//   "Something Ricked This Way Comes es el noveno episodio de la primera temporada de Rick and Morty . Es el noveno episodio de la serie en general. Se estren?? el 24 de marzo de 2014. Fue escrita por Mike McMahan y dirigida por John Rice . Rick se muestra esc??ptico sobre el nuevo trabajo de Summer en una tienda dirigida por el diablo. Jerry y Morty discuten sobre el estatus de Plut??n como planeta y terminan viajando all??.",
//   "Close Rick-counters of the Rick Kind es el d??cimo episodio de la primera temporada de Rick and Morty . Es el d??cimo episodio de la serie en general. Se estren?? el 7 de abril de 2014. Fue escrita por Ryan Ridley y dirigida por Stephen Sandoval . Rick solo est?? tratando de disfrutar de un buen desayuno, pero es secuestrado por un grupo de Ricks alternativos y llevado a juicio por cr??menes contra Ricks.",
//   "Ricksy Business es el und??cimo y ??ltimo episodio de la primera temporada de Rick and Morty . Es el und??cimo episodio de la serie en general. Se estren?? el 14 de abril de 2014. Fue escrita por Ryan Ridley y Tom Kauffman y dirigida por Stephen Sandoval . Cuando Jerry y Beth se van para participar en una recreaci??n del hundimiento del Titanic, Rick y Summer organizan una fiesta que se sale de control.",
//   "A Rickle in Time es el primer episodio de la segunda temporada de Rick and Morty . Es el duod??cimo episodio de la serie en general. Se estren?? el 26 de julio de 2015. Fue escrita por Matt Roller y dirigida por Wes Archer . Rick descongela el tiempo, pero dado que ??l, Morty y Summer han vivido durante tanto tiempo en el tiempo congelado, se desarrolla una dimensi??n paralela.",
//   "Mortynight Run es el segundo episodio de la segunda temporada de Rick and Morty . Es el decimotercer episodio de la serie en general. Se estren?? el 2 de agosto de 2015. Fue escrita por David Phillips y dirigida por Dominic Polcino . Despu??s de que Rick le vende un arma a un asesino extraterrestre para poder pagar una tarde en una sala de juegos de video, Morty intenta detener al asesino.",
//   "Auto Erotic Assimilation es el tercer episodio de la segunda temporada de Rick and Morty . Es el decimocuarto episodio de la serie en general. Se estren?? el 9 de agosto de 2015. Fue escrita por Ryan Ridley y dirigida por Bryan Newton . Rick, Morty y Summer se topan con una mente colmena llamada Unity con la que Rick sol??a salir. Summer se opone al control de Unity sobre la poblaci??n de un planeta alien??gena.",
//   "Total Rickall es el cuarto episodio de la segunda temporada de Rick and Morty . Es el decimoquinto episodio de la serie en general. Se estren?? el 16 de agosto de 2015. Fue escrita por Mike McMahan y dirigida por Juan Meza-Le??n . La familia lucha contra un par??sito que implanta recuerdos falsos en sus cabezas, lo que los lleva a preguntarse si alguno de ellos es real.",
//   "Get Schwifty es el quinto episodio de la segunda temporada de Rick and Morty . Es el decimosexto episodio de la serie en general. Se estren?? el 23 de agosto de 2015. Fue escrita por Tom Kauffman y dirigida por Wes Archer . Cuando aparece una entidad alien??gena con demandas musicales, Rick y Morty llaman a Ice-T para que los ayude a escribir una melod??a para una competencia de canciones intergal??ctica.",
//   "The Ricks Must Be Crazy es el sexto episodio de la segunda temporada de Rick and Morty . Es el decimos??ptimo episodio de la serie en general. Se estren?? el 30 de agosto de 2015. Fue escrita por Dan Guterman y dirigida por Dominic Polcino . Cuando el auto de Rick se descompone, ??l y Morty entran en su bater??a. Morty descubre que Rick ha creado un universo en miniatura dentro de la bater??a.",
//   "Big Trouble in Little Sanchez es el s??ptimo episodio de la segunda temporada de Rick and Morty . Es el decimoctavo episodio de la serie en general. Se estren?? el 13 de septiembre de 2015. Fue escrita por Alex Rubens y dirigida por Bryan Newton . Summer le pide a Rick que transporte su mente a una adolescente para protegerla de los vampiros en la escuela. Beth y Jerry van a terapia matrimonial fuera del planeta.",
//   "Interdimensional Cable 2: Tempting Fate es el octavo episodio de la segunda temporada de Rick and Morty . Es el decimonoveno episodio de la serie en general. Se estren?? el 20 de septiembre de 2015. Fue escrita por Dan Guterman , Ryan Ridley & Justin Roiland y dirigida por Juan Meza-Le??n . Jerry es llevado de urgencia a un hospital extraterrestre cuando come helado que Rick estaba usando para desarrollar una bacteria peligrosa. Rick manipula la caja de cable del hospital.",
//   "Look Who's Purging Now segunda temporada de Rick and Morty . Es el vig??simo episodio de la serie en general. Se estren?? el 27 de septiembre de 2015. Fue escrita por Dan Harmon , Ryan Ridley y Justin Roiland y dirigida por Dominic Polcino . Rick y Morty aterrizan en un planeta donde todos los ciudadanos pueden cometer delitos, incluido el asesinato, sin castigo por una noche.",
// );



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
    margin-top: 3%;
    box-shadow: 0px 0px 5px 3px #ABC645;
  }

  .btn {
    margin-top: 15%;
    background-color: #055160;
    color: white;
    font-family: Blackadder ITC;
    text-shadow: 2px 1px 3px #ABC645;
    font-size: 22px;
  }

  .btn :hover {
    color: #42B5CB;
    text-shadow: 2px 1px 3px #ABC645;
  }

  h1 {
    margin-top: 2%;
    font-family: Blackadder ITC;
    text-shadow: 1px 1px 1px #ABC645;
    font-size: 100px;
  }
</style>

<body>
  <nav class="navbar navbar-dark bg-dark" style="margin: 0%">
    <div class="nav justify-content-center" style="align-items: center">
      <a class="navbar-brand" href="http://localhost:8080/Postman/index.php#">
        <img src="../Postman/ASSETS/nav-removebg-preview.png" alt="" width="250" height="50" class="d-inline-block align-text-top" style="align-content: center;">

      </a>
      <li class="navbar-dark">
        <a class="navbar" aria-current="page" href="http://localhost:8080/Rick and Morty/index.php#">Inicio</a>
      </li>
      <li class="navbar-dark">
        <a class="navbar" aria-current="page" href="http://localhost:8080/Rick and Morty/index.php#">Episodios</a>
      </li>
      <li class="navbar-dark">
        <a class="navbar " aria-current="page" href="http://localhost:8080/Rick and Morty/VIEWS/personajes.php">Personajes</a>
      </li>
    </div>

  </nav>
</body>

<center>
  <h1>Episodios</h1>
</center>
<center><img src="./ASSETS/fondo-removebg-preview.png" alt="" width="400" height="350" class="foto"></center>
<div class="container">

  <?php

  $i = 0;
  $t = 0;

  foreach ($api['results'] as $value) {
    $id = $value['id'];
    $nombre = $value['name'];
    $diaL = $value['air_date'];
    $episodio = $value['episode'];
    $url = $value['url'];
  ?>


    <form action="./VIEWS/detalle_episodio.php" method="POST" style="width: 540px;">
      <div class="card mb-3">
        <div class="row g-0 " style="height: 213px;">
          <div class="col-md-4">
            <?php echo '<img src="' . $imagenes[$i] . '" class="img-fluid rounded-start" style="height: 200px; margin: 2%; border-radius: 20px">'; ?>
          </div>
          <input type="hidden" value="<?php echo $url ?>" name="url">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo "Episodio" . " " . $id,  ": " . $nombre ?></h5>

              <p class="card-text"><small class="text-muted"><?php echo '<strong>- Fecha de lanzamiento: </strong>' . $diaL  ?></small></p>
              <center><button type="submit" class="btn "> Detalle </button></center>
            </div>
          </div>
        </div>
      </div>
    </form>

    <?php

    $i = $i + 1;
    // $t = $t + 1;

    ?>


  <?php } ?>
</div>