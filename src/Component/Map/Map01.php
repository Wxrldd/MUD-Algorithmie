<?php

namespace Game\Console\Component\Map;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class Map01 extends Blueprint {
    public function npcs(): array {
        return [];
    }
    public function items(): array {
        return [];
    }

    public function monsters(): array {
        return [];
    }
    public function name(): string {
        return "Test";
    }
    public function description(): string {
        return "Description";
    }
    public function position(): Position { 
        return new Position(0,0);
    }
}
