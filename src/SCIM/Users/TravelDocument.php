<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\SCIM\Users;

class TravelDocument
{
    /**
     * @var string
     */
    public $documentType;

    /**
     * @var string
     */
    public $documentNumber;

    /**
     * @var string
     */
    public $givenName;

    /**
     * @var string
     */
    public $middleName;

    /**
     * @var string
     */
    public $familyName;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $issuingCountry;

    /**
     * @var string
     */
    public $issuingDate;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $citizenship;
}
