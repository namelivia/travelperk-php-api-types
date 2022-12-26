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
    public $bookerId;

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
    public $startDateTimeUtc;

    /**
     * @var string|null
     */
    public $startDateTimeLocal;

    /**
     * @var string|null
     */
    public $end;

    /**
     * @var string|null
     */
    public $endDateTimeUtc;

    /**
     * @var string|null
     */
    public $endDateTimeLocal;

    /**
     * @var Location|null
     */
    public $startLocation;

    /**
     * @var Location|null
     */
    public $endLocation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $modified;
}
