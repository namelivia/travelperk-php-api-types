<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe\Restrictions;

class Restriction
{
    /**
     * @var \Namelivia\TravelPerk\TravelSafe\Location
     */
    public $origin;

    /**
     * @var \Namelivia\TravelPerk\TravelSafe\Location
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
     * @var \Namelivia\TravelPerk\TravelSafe\InfoSource
     */
    public $infoSource;
}
