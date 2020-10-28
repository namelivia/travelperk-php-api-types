<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\InvoiceLines;

class User
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string|null
     */
    public $externalId;
}
