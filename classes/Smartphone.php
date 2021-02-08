<?php


class smartphone extends Computer
{
    private string $operateur;

    public function __construct(string $brd, string $os, string $operateur)
    {
        parent::__construct($brd, $os);
        $this->operateur = $operateur;
    }

    public function getOperateur(): string {
        return $this->operateur;
    }

    public function setOperateur(string $operateur) : void {
        $this->operateur = $operateur;
    }
}