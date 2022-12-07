<?php

namespace PruneMazui\MailAddressLiveChecker;

interface ConnectionInterface
{
    public function isLiveAddress(string $mx_address, string $from_address, string $to_address): bool;
}
