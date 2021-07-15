<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Webhooks\Webhooks;

class Webhook
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string[]
     */
    public $events;

    /**
     * @var int|null
     */
    public $successfullySent;

    /**
     * @var int|null
     */
    public $failedSent;

    /**
     * @var float|null
     */
    public $errorRate;
}
