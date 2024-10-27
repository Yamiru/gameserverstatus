<?php
require 'GameQ/Autoloader.php';
$servers = array(
    'Css' => array(
        'type' => 'css',
        'host' => '193.30.121.4:7777', // IP with port
        'options' => array(
        'query_port' => 27015 // query port
        )
    )
);
$GameQ = new \GameQ\GameQ();
$GameQ->addServers($servers);
$results = $GameQ->process();
foreach ($results as $name => $data) {
    echo "IP:" . ucfirst($name) . "</p>";
    if ($data['gq_online']) {
       echo "Name: " . $data['gq_hostname'] . "<br>";
        echo "Game: " . $data['gq_gametype'] . "<br>";
        echo "Players: " . $data['gq_numplayers'] . "/" . $data['gq_maxplayers'] . "<br>";
        echo "Map: " . $data['map'] . "<br>";
    } else {
        echo "Server is offline.<br>";
    }
}
?>
