<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Tests;

use Namelivia\TravelPerk\CostCenters\CostCenters\BulkUpdateResponse;
use Namelivia\TravelPerk\CostCenters\CostCenters\CostCenter;
use Namelivia\TravelPerk\CostCenters\CostCenters\CostCenterDetail;
use Namelivia\TravelPerk\CostCenters\CostCenters\CostCenters;
use Namelivia\TravelPerk\Expenses\Invoices\Invoice;
use Namelivia\TravelPerk\Expenses\Invoices\Invoices;
use Namelivia\TravelPerk\SCIM\Users\User as SCIMUser;
use Namelivia\TravelPerk\SCIM\Users\Users as SCIMUsers;
use Namelivia\TravelPerk\TravelSafe\AirlineMeasures\AirlineMeasure;
use Namelivia\TravelPerk\TravelSafe\Restrictions\Restriction;
use Namelivia\TravelPerk\TravelSafe\Summary\Summary;
use Namelivia\TravelPerk\Trips\Bookings\Booking;
use Namelivia\TravelPerk\Trips\Bookings\Bookings;
use Namelivia\TravelPerk\Trips\Trips\Trip;
use Namelivia\TravelPerk\Trips\Trips\Trips;
use Namelivia\TravelPerk\Users\Users\User;
use Namelivia\TravelPerk\Users\Users\Users;
use Namelivia\TravelPerk\Webhooks\Webhooks\Webhook;
use Namelivia\TravelPerk\Webhooks\Webhooks\Webhooks;

class BuildingTest extends TestCase
{
    public function testRootEntitiesAreBuildable()
    {
        $this->assertTrue(is_a(new Invoice(), Invoice::class));
        $this->assertTrue(is_a(new Invoices(), Invoices::class));
        $this->assertTrue(is_a(new SCIMUser(), SCIMUser::class));
        $this->assertTrue(is_a(new SCIMUsers(), SCIMUsers::class));
        $this->assertTrue(is_a(new Webhook(), Webhook::class));
        $this->assertTrue(is_a(new Webhooks(), Webhooks::class));
        $this->assertTrue(is_a(new AirlineMeasure(), AirlineMeasure::class));
        $this->assertTrue(is_a(new Summary(), Summary::class));
        $this->assertTrue(is_a(new Restriction(), Restriction::class));
        $this->assertTrue(is_a(new User(), User::class));
        $this->assertTrue(is_a(new Users(), Users::class));
        $this->assertTrue(is_a(new Trip(), Trip::class));
        $this->assertTrue(is_a(new Trips(), Trips::class));
        $this->assertTrue(is_a(new Booking(), Booking::class));
        $this->assertTrue(is_a(new Bookings(), Bookings::class));
        $this->assertTrue(is_a(new CostCenter(), CostCenter::class));
        $this->assertTrue(is_a(new CostCenterDetail(), CostCenterDetail::class));
        $this->assertTrue(is_a(new CostCenters(), CostCenters::class));
        $this->assertTrue(is_a(new BulkUpdateResponse(), BulkUpdateResponse::class));
    }
}
