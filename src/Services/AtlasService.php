<?php

namespace Gillyware\Atlas\Services;

use Gillyware\Atlas\Contracts\AtlasServiceInterface;
use Gillyware\Atlas\Contracts\TimezoneServiceInterface;

class AtlasService implements AtlasServiceInterface
{
    public function __construct(
        private readonly TimezoneServiceInterface $timezoneService,
    ) {}

    public function timezones(): TimezoneServiceInterface
    {
        return $this->timezoneService;
    }
}
