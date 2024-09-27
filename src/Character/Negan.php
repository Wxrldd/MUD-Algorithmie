<?php
namespace Game\Console\Character;

use Jugid\Staurie\Game\Npc;
class Negan extends Npc {
public function name() : string {
  return 'Negan';
 }
public function description() : string {
  return "Je suis un tueur j'explose la t*** de tout ce qui passe devant moi avec ma batte";
 }
public function speak() : string|array {
  return "Je m'appelle Negan ma méilleure arme je l'ai baptisé Lucile";
 }
}
