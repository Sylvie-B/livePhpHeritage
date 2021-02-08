<?php


class android extends Smartphone
{
    public function __construct(string $brd, string $operateur)
    {
        parent::__construct($brd, 'Android', $operateur);

    }
}