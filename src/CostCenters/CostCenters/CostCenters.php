<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\CostCenters\CostCenters;

class CostCenters
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
     * @var CostCenters[]
     */
    public $costCenters;
}
