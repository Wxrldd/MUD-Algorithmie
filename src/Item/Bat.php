<?php

namespace Game\Console\Item;

use Jugid\Staurie\Game\Item_Equippable;

class Bat extends Item_Equippable {
public function name() : string { 
  return "Lucille";
}
public function description(): string { 
  return "batte en acier inoxydable super puissante";
}
public function body_part(): string {
  return "hand";
 }
public function statistics(): array {
  return [
    "Damage" => 15,
    "Reach" => 0
  ];
 }
}
