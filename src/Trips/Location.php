<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Trips;

class Location
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $address;

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
