<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Users\Users;

class User
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var Name
     */
    public $name;

    /**
     * @var string
     */
    public $preferredLanguage;

    /**
     * @var string
     */
    public $rocale;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $jobTitle;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var EmergencyContact
     */
    public $emergencyContact;
}
