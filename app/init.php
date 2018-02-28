<?php

use App\Core\Message;
use App\Core\DB;

session_start();

date_default_timezone_set("PRC");

require __DIR__ . '/../vendor/autoload.php';

$pdo = new PDO("mysql:dbname=guestbook;host=localhost", "root", "");

$message = new Message(new DB($pdo));
