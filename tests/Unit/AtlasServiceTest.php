<?php

use Gillyware\Atlas\Contracts\AtlasServiceInterface;
use Gillyware\Atlas\Contracts\TimezoneServiceInterface;
use Gillyware\Atlas\Tests\TestCase;

class AtlasServiceTest extends TestCase
{
    private AtlasServiceInterface $atlasService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->atlasService = resolve('atlas');
    }

    public function test_get_timezone_service()
    {
        $timezoneService = $this->atlasService->timezones();

        $this->assertInstanceOf(TimezoneServiceInterface::class, $timezoneService);
    }
}
