<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\SCIM\Users;

class Approver
{
    /**
     * @var string|null
     */
    public $value;

    /**
     * @var string|null
     */
    public $ref;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string|null
     */
    public $condition;
}
