<?php

namespace Gillyware\Atlas\Contracts;

use Gillyware\Atlas\Packets\TimezonePacket;
use Illuminate\Support\Collection;

interface TimezoneServiceInterface
{
    /**
     * @return Collection<string, TimezonePacket>
     */
    public function all(): Collection;
}
