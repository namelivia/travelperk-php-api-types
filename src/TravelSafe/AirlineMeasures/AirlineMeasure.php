<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe\AirlineMeasures;

class AirlineMeasure
{
    /**
     * @var Airline
     */
    public $airline;

    /**
     * @var SafetyMeasure[]
     */
    public $safetyMeasures;
    /**
     * @var \Namelivia\TravelPerk\TravelSafe\InfoSource
     */
    public $infoSource;
    /**
     * @var string
     */
    public $updatedAt;
}
