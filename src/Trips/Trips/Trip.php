<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Trips;

class Trip
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $tripName;

    /**
     * @var string|null
     */
    public $start;

    /**
     * @var string|null
     */
    public $end;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $modified;
}
