<?php

declare(strict_types=1);

namespace Namelivia\TravelPerk\Tests;

use Mockery;

/**
 * This is the root test class. All tests will extend from here.
 *
 * @author José Ignacio Amelivia Santiago <jignacio.amelivia@gmail.com>
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }
}
