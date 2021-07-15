<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Expenses\InvoiceLines;

class InvoiceLine
{
    /**
     * @var string
     */
    public $expenseDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $nonTaxableUnitPrice;

    /**
     * @var string
     */
    public $taxPercentage;

    /**
     * @var string
     */
    public $taxAmount;

    /**
     * @var string
     */
    public $taxRegime;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var Metadata
     */
    public $metadata;

    /**
     * @var string | null
     */
    public $invoiceSerialNumber;

    /**
     * @var string | null
     */
    public $profileId;

    /**
     * @var string | null
     */
    public $profileName;

    /**
     * @var string | null
     */
    public $invoiceMode;

    /**
     * @var string | null
     */
    public $invoiceStatus;

    /**
     * @var string | null
     */
    public $issuingDate;

    /**
     * @var string | null
     */
    public $dueDate;

    /**
     * @var string | null
     */
    public $currency;
}
