<?php $name = "Adhara";
  $isDev = true;
  $age = 27;

define('SUPERAGE', 1450);

$output = "Hola $name, con una edad de $age. 😀";
$outputAge = match (true) {
  $age < 2    => "Eres una bebita, $name 😇",
  $age < 10   => "Eras una niñata, $name 👧",
  $age < 18   => "Wow, eres adolescente, $name 🤟",
  $age === 18 => "Ya eres mayor de edad, $name 😵‍💫",
  $age < 35   => "Eres adulto joven, $name 🍺",
  $age < 60   => "Eres adulto, $name 👩‍⚕️",
  $age < 90   => "Eres un adulto mayor, $name 👵",
  default     => "¿Acaso eres inmortal?, $name",
};

$bestLanguages = ["PHP", "Javascript", "Python", 1 ];
$bestLanguages[3] = "Java";
$bestLanguages[] = "Typescript";

?>

<ul>
  <?php foreach($bestLanguages as $key => $languague) : ?>
    <li><?=$key . " " . $languague ?></li>
    <?php endforeach; ?>
</ul>

<h1>
  <?= $outputAge;?>
</h1>