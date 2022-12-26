<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Bookings;

class Booking
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $start;

    /**
     * @var string
     */
    public $end;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $tripId;

    /**
     * @var Reference[]
     */
    public $references;

    /**
     * @var \Namelivia\TravelPerk\Trips\Location|null
     */
    public $location;

    /**
     * @var \Namelivia\TravelPerk\Trips\Location|null
     */
    public $dropOffLocation;

    /**
     * @var Leg[]|null
     */
    public $legs;
}
