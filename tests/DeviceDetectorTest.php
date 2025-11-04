<?php

namespace Visernic\DeviceDetector\Tests;

use PHPUnit\Framework\TestCase;
use Visernic\DeviceDetector\DeviceDetector;

class DeviceDetectorTest extends TestCase
{
    /** @test */
    public function it_can_detect_a_user_agent()
    {
        $detector = new DeviceDetector();
        $result = $detector->detect('Mozilla/5.0 (Windows NT 10.0; Win64; x64)');

        $this->assertNotNull($result);
        $this->assertFalse($result->isBot());
    }
}
