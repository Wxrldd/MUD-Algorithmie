<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;

class Rocket extends Item_Equippable {

public function name() : string { 
  return "Rocket"; 
}
public function description(): string { 
  return "arme d'épaule propulsant des roquettes";
}
public function body_part(): string {
  return "Shoulder";
 }
public function statistics(): array {
  return [
    "Damage" => 10,
    "Wisdom" => 6
  ];
 }
}
