<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL ch = cURL handle
$ch = curl_init(API_URL);
//Indicar que queremos recbiri el resultado de la petición y no mostrarla en patalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
/* Ejecutar la petición
y guardamos el resultado
*/
$result = curl_exec($ch);

/*una alternativa sería file_get_contents
  $result = file_get_contents(API_URL);
*/
$data = json_decode($result, true);

curl_close($ch);



?>

<head>
  <meta charset="UTF-8"/>
  <title>La próxima película de Marvel</title>
  <meta name="description" content="La próxima película de Marvel"/>
  <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
 <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>

<main>

  <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="poster de <?=$data["data_title"] ?> "
    style="border-radius: 8px"
    />
  </section>

  <hgroup>
    <h3><?=$data["title"]; ?> se estrena en <?= $data["days_until"];?> días</h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es:  <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
</main>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
    text-align: center;
  }

  section {
    display: flex;
    justify-content: center;
  }

  hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;

  }

  img {
    margin: 0 auto;

  }
</style>