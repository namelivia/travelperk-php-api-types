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
    public $locale;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var string|null
     */
    public $jobTitle;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var EmergencyContact|null
     */
    public $emergencyContact;
}
