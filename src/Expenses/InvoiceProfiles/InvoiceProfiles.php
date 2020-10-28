<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\InvoiceProfiles;

class InvoiceProfiles
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
     * @var InvoiceProfile[]
     */
    public $profiles;
}
