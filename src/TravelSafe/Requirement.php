<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\TravelSafe;

class Requirement
{
    /**
     * @var Category
     */
    public $category;

    /**
     * @var Category
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
