<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\Invoices;

class TravelperkBankAccount
{
    /**
     * @var string
     */
    public $bankName;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var string
     */
    public $bic;
    /**
     * @var string
     */
    public $reference;
}
