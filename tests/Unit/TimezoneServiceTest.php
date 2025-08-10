<?php

use Gillyware\Atlas\Contracts\TimezoneServiceInterface;
use Gillyware\Atlas\Tests\TestCase;

class TimezoneServiceTest extends TestCase
{
    private TimezoneServiceInterface $timezoneService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->timezoneService = resolve(TimezoneServiceInterface::class);
    }

    public function test_all_timezones_retrieved()
    {
        $timezones = $this->timezoneService->all();

        $this->assertNotEmpty($timezones);
    }
}
