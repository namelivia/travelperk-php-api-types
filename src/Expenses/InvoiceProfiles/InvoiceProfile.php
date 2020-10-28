<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\InvoiceProfiles;

class InvoiceProfile
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
     * @var string
     */
    public $paymentMethodType;

    /**
     * @var string
     */
    public $billingPeriod;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var \Namelivia\TravelPerk\Expenses\BillingInformation
     */
    public $billingInformation;
}
