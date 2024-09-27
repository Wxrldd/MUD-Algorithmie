<?php

namespace Game\Console\Map;

use Game\Console\Item\Ax;
use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Monsters\Jadis;
use Game\Console\Npcs\Peter;

class Map03 extends Blueprint {

    private Position $position;
    function __construct() {
        $this->position = new Position( 0, -1);
    }
    public function npcs(): array {
        return [ new Peter()];
    }

    public function items(): array {
        return [ new Ax()];
    }

    public function monsters(): array {
        return [ new Jadis()];
    }
    public function name(): string {
        return "La décharge";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return $this->position;
    }
}