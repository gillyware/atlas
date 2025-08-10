<?php

namespace Gillyware\Atlas\Services;

use DateTimeZone;
use Gillyware\Atlas\Contracts\TimezoneServiceInterface;
use Gillyware\Atlas\Packets\TimezonePacket;
use Illuminate\Support\Collection;

class TimezoneService implements TimezoneServiceInterface
{
    /**
     * {@inheritDoc}
     */
    public function all(): Collection
    {
        $timezoneNames = collect($timezones = DateTimeZone::listIdentifiers(DateTimeZone::ALL));

        return $timezoneNames->mapWithKeys(function (string $timezoneName) {
            return [
                $timezoneName => TimezonePacket::from([
                    'name' => $timezoneName,
                ]),
            ];
        });
    }
}
