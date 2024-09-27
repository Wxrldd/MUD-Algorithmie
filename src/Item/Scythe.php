<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;
class Scythe extends Item_Equippable {
public function name() : string { 
  return "SCYTHE"; 
}
public function description(): string { 
  return " Arme légère, decapite facilement des tetes de zombies";
}
public function body_part(): string {
  return "Hand";
 }
public function statistics(): array {
  return [
    "Damage" => 3,
    "Wisdom" => 3
  ];
 }
}
