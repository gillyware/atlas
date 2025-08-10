<?php

namespace Gillyware\Atlas\Packets;

use Gillyware\Postal\Attributes\Rule;
use Gillyware\Postal\Packet;

class TimezonePacket extends Packet
{
    public function __construct(
        #[Rule(['required', 'timezone'])]
        public readonly string $name,
    ) {}
}
