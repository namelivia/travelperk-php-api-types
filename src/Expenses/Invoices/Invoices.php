<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\Invoices;

class Invoices
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
     * @var Invoice[]
     */
    public $invoices;
}
