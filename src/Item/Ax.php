<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;
class Ax extends Item_Equippable {
public function name() : string { 
  return "AX"; 
}
public function description(): string { 
  return "Arme légère transport facile";
}
public function body_part(): string {
  return "hand";
 }
public function statistics(): array {
  return [
    "Damage" => 2,
    "Reach" => 1
  ];
 }
}
