<?php

require "vendor/autoload.php";

$address = '127.0.0.1';
$port = 5000;

$loop = React\EventLoop\Factory::create();
$socket = new React\Socket\Server("$address:$port", $loop);

$socket->on('connection', function (React\Socket\ConnectionInterface $conn) {
    $conn->write("Hello there!\n");
    $conn->close();
});

echo 'Server ready.';
$loop->run();
