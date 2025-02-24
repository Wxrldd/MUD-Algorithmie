<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;
class Scythe extends Item_Equippable {
public function name() : string { 
  return "Scythe"; 
}
public function description(): string { 
  return " Arme légère, decapite facilement des tetes de zombies";
}
public function body_part(): string {
  return "hand";
 }
public function statistics(): array {
  return [
    "Damage" => 3,
    "Reach" => 1
  ];
 }
}
