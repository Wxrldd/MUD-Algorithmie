<?php

namespace Game\Console\Map;

use Jugid\Staurie\Component\Map\Blueprint;
use Game\Console\Item\Bat;
use Jugid\Staurie\Game\Position\Position;

class Map01 extends Blueprint {

    private Position $position;
    function __construct() {
        $this->position = new Position( 0, 0);
    }
    public function npcs(): array {
        return [ ];
    }

    public function items(): array {
        return [ new Bat() ];
    }

    public function monsters(): array {
        return [];
    }
    public function name(): string {
        return "The Walking Dead";
    }
    public function description(): string {
        return "Bienvenu(e) jeunes arrivants. Equipez vous de votre arme avant de vous y engager car cet endroit vous réserve bien de surprises";
    }
    public function position(): Position { 
        return $this->position;
    }
}