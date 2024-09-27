<?php

namespace Game\Console\Map;

use Game\Console\Monsters\Monsters;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Item\Ax;
use Game\Console\Item\Gun;
use Game\Console\Item\Scythe;
use Game\Console\Character\Negan;

class Map05 extends Blueprint {

    private Position $position;
    function __construct() {
        $this->position = new Position( 1, 0);
    }
    public function npcs(): array {
        return [ new Negan()];
    }

    public function items(): array {
        return [ new Gun(), new Ax(), new Scythe()];
    }

    public function monsters(): array {
        return [ new Monsters()];
    }
    public function name(): string {
        return "Test zone5";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return $this->position;
    }
}
