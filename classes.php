<?php
declare(strict_types=1);

class SuperHero {

  //! promoted properties ==> PHP 8
  public function __construct(

  readonly public string $name, 
  readonly public array $powers,
  readonly public string $planet
  ){
  }

  public function attack()
  {
    return "¡$this->name ataca con sus poderes!";
  }

  public function description() {

    $powers = implode(", ", $this->powers);

    return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
  }
}

$hero = new SuperHero("Batgirl", ["Inteligencia", "destreza", "tecnología"], "Tierra 616");

echo $hero->description();



?>