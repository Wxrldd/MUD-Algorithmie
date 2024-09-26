<?php

namespace Game\Console\Component\Map;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Game\Console\Component\Item\Gun;

class Map01 extends Blueprint {
    public function npcs(): array {
        return [];
    }
    public function items(): array {
        return [ new Gun() ];
    }

    public function monsters(): array {
        return [];
    }
    public function name(): string {
        return "Coucou";
    }
    public function description(): string {
        return "Description";
    }
    public function position(): Position { 
        return new Position(0,0);
    }
}
