<?php
/*
Inicializar una nueva sesión de cURL ch = cURL handle
  $ch = curl_init(API_URL);
Indicar que queremos recbiri el resultado de la petición y no mostrarla en patalla
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
Ejecutar la petición
y guardamos el resultado
  $result = curl_exec($ch);
  curl_close($ch);
*/

/** 
 *? ¿Cuando utilizar include? Cuando tengamos archivos secundarios o no
 *? o no muy importantes
 **¿Y cuando NO utilizar require_once? Cuando querramos utilizar el código 
 ** Más de una vez. Je.
 */
require_once 'consts.php';
require_once 'functions.php';


$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);

?>

<?php render_template('head', $data); ?>
<?php render_template('main', array_merge($data, ["until_message" => $until_message]) ); ?>
<?php render_template('styles'); ?>





