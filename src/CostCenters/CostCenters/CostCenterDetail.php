<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\CostCenters\CostCenters;

class CostCenterDetail
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
     * @var bool
     */
    public $archived;

    /**
     * @var User[]
     */
    public $users;

    /**
     * @var int
     */
    public $countUsers;
}
