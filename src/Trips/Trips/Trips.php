<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Trips;

class Trips
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $total;

    /**
     * @var Trip[]
     */
    public $trips;
}
