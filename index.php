<?php

require './classes/User.php';
require './classes/Computer.php';
require './classes/Smartphone.php';
require './classes/Android.php';

$user = new User('John Doe', 'password très fort');

$computerOne = new Computer('Lenovo', 'Linux');
$computerOne->setOwner($user);

$smartphone = new Smartphone('Huawai', 'Android', 'free');
$smartphone->start();

$android = new Android('Huawai', 'Free');

