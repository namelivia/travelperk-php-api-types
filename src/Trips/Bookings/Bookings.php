<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Bookings;

class Bookings
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
     * @var Booking[]
     */
    public $bookings;
}
