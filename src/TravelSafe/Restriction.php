<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe;

class Restriction
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var Location
     */
    public $origin;
    /**
     * @var Location
     */
    public $destination;
    /**
     * @var string
     */
    public $authorizationStatus;
    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $details;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $updatedAt;
    /**
     * @var Requirement[]
     */
    public $requirements;
    /**
     * @var InfoSource
     */
    public $infoSource;
}
