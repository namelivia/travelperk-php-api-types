<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Tests;

use Namelivia\TravelPerk\Expenses\Invoices\Invoice;
use Namelivia\TravelPerk\Expenses\Invoices\Invoices;
use Namelivia\TravelPerk\SCIM\Users\User;
use Namelivia\TravelPerk\SCIM\Users\Users;
use Namelivia\TravelPerk\Webhooks\Webhooks\Webhook;
use Namelivia\TravelPerk\Webhooks\Webhooks\Webhooks;

class BuildingTest extends TestCase
{
    public function testRootEntitiesAreBuildable()
    {
        $this->assertTrue(is_a(new Invoice(), Invoice::class));
        $this->assertTrue(is_a(new Invoices(), Invoices::class));
        $this->assertTrue(is_a(new User(), User::class));
        $this->assertTrue(is_a(new Users(), Users::class));
        $this->assertTrue(is_a(new Webhook(), Webhook::class));
        $this->assertTrue(is_a(new Webhooks(), Webhooks::class));
    }
}