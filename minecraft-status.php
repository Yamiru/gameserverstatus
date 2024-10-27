<?php 
require 'GameQ/Autoloader.php';
$servers = array(
    'minecraft' => array(
        'type' => 'minecraft',
        'host' => 'play.avalonia.sk:25565' // IP with port
    ),
);
$GameQ = new \GameQ\GameQ();
$GameQ->addServers($servers);
$results = $GameQ->process();
foreach ($results as $name => $data) {
    echo "IP:" . ucfirst($name) . "</p>";
    if ($data['gq_online']) {
        echo "Name: " . $data['gq_hostname'] . "<br>";
        echo "Game: " . $data['gq_name'] . "<br>";
        echo "Players: " . $data['gq_numplayers'] . "/" . $data['gq_maxplayers'] . "<br>";
        echo "Map: " . $data['map'] . "<br>";
    } else {
        echo "Server is offline.<br>";
    }
}
?>
