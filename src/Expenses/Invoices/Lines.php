<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\Invoices;

class Lines
{
    /**
     * @var string
     */
    public $total;

    /**
     * @var \Namelivia\TravelPerk\Expenses\InvoiceLines\InvoiceLine[]
     */
    public $data;

    /**
     * @var string
     */
    public $next;
}
