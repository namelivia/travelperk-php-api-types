<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe\Summary;

class RiskLevel
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $details;

    /**
     * @var stdClass|null
     */
    public $data;
}
