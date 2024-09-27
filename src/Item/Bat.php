<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;

class Bat extends Item_Equippable {
public function name() : string { 
  return "BAT";
}
public function description(): string { 
  return "batte en acier inoxydable super puissante";
}
public function body_part(): string {
  return "Hand";
 }
public function statistics(): array {
  return [
    "Damage" => 5,
    "Wisdom" => 3
  ];
 }
}
