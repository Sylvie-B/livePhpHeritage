<?php


class IOS extends Smartphone
{
    public function __construct(string $brd, string $operateur)
    {
        parent::__construct($brd, 'IOS', $operateur);
    }
}