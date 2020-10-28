<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\InvoiceLines;

class InvoiceLines
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
     * @var InvoiceLine[]
     */
    public $invoiceLines;
}
