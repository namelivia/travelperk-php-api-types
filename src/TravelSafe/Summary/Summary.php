<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe\Summary;

class Summary
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $details;
    /**
     * @var RiskLevel
     */
    public $riskLevel;
    /**
     * @var \Namelivia\TravelPerk\TravelSafe\Location
     */
    public $location;
    /**
     * @var string
     */
    public $updatedAt;
    /**
     * @var Guideline[]
     */
    public $guidelines;
    /**
     * @var \Namelivia\TravelPerk\TravelSafe\InfoSource
     */
    public $infoSource;
}
