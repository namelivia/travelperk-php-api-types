<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Bookings;

class Segment
{
    /**
     * @var Origin
     */
    public $origin;

    /**
     * @var Destination
     */
    public $destination;

    /**
     * @var string
     */
    public $externalId;
}
