<?php

namespace Gillyware\Atlas\Contracts;

interface AtlasServiceInterface
{
    public function timezones(): TimezoneServiceInterface;
}
