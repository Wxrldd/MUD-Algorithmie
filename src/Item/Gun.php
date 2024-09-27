<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;
class Gun extends Item_Equippable {
public function name() : string { 
  return "MK"; 
}
public function description(): string { 
  return "arme à feu d’épaule semi-automatique à percussion centrale";
}
public function body_part(): string {
  return "hand";
 }
public function statistics(): array {
  return [
    "Damage" => 4,
    "Reach" => 30
  ];
 }
}
