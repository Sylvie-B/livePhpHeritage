<?php


class computer
{

    // autogenerate
    private string $brand;
    private string $os;
    // optional default false
    private bool $keyboard;
    private bool $mouse;
    // owner
    private User $owner;

    public function __construct(string $brd, string $graphCard, string $pross, string $os, string $color)
    {
        $this->setBrand($brd);
        $this->setOs($os);
        // optional default values
        $this->setKeyboard(false);
        $this->setMouse(false);
        // ID (auto generated)
        $this->id = time();

    }

    /**
     * @return String
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param String $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return bool
     */
    public function hasKeyboard(): bool
    {
        return $this->keyboard;
    }

    /**
     * @param bool $keyboard
     */
    public function setKeyboard(bool $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @return bool
     */
    public function hasMouse(): bool
    {
        return $this->mouse;
    }

    /**
     * @param bool $mouse
     */
    public function setMouse(bool $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @return String
     */
    public function getOs(): string
    {
        return $this->os;
    }

    /**
     * @param String $os
     */
    public function setOs(string $os): void
    {
        $this->os = $os;
    }

    /**
     *
     */
    public function start(){
        echo $this->getBrand()." started...<br>";
    }

    /**
     *
     */
    public function shutdown(){
        echo $this->getBrand()." computer off...<br>";
    }

    public function setOwner(User $user) {
        $this->owner = $user;
    }

    public function getOwner(): User {
        return $this->owner;
    }
}

