<?php
namespace Game\Console\Npcs;

use Jugid\Staurie\Game\Npc;

class Peter extends Npc {
public function name() : string {
  return 'Peter';
 }
public function description() : string {
  return "Une décharge abandonée mais peuplée";
 }
public function speak() : string|array {
  return "Je creve la dalle...";
 }

}