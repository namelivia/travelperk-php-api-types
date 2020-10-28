<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe\Restrictions;

class Requirement
{
    /**
     * @var \Namelivia\TravelPerk\TravelSafe\Category
     */
    public $category;

    /**
     * @var \Namelivia\TravelPerk\TravelSafe\Category
     */
    public $subCategory;

    /**
     * @var string
     */
    public $summary;
    /**
     * @var string
     */
    public $details;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var Document[]
     */
    public $documents;
}
