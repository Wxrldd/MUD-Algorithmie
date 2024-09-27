<?php
namespace Game\Console\Npcs;

use Jugid\Staurie\Game\Npc;
class Chuchoteur extends Npc {
public function name() : string {
  return 'Chuchoteur';
 }
public function description() : string {
  return "Un survivant membre du groupe d'Alpha";
 }
public function speak() : string|array {
  return "Je sais me fondre dans la masse";
 }

}
