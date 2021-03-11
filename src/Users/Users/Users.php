<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Users\Users;

class Users
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
     * @var User[]
     */
    public $users;
}
