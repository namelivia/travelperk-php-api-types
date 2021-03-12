<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips\Bookings;

class Location
{
    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string|null
     */
    public $iataCode;
}
