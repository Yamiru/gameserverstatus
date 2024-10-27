<?php
require 'GameQ/Autoloader.php';

$servers = array(
    'teamspeak3' => array(
        'type' => 'teamspeak3',
        'host' => 'play.avalonia.sk:9987', // IP adresa spolu s portom (default query port je 10011)
        'options' => array(
            'query_port' => 10011 // Samostatný query port
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
        echo "Voice: " . $data['gq_name'] . "<br>";
        echo "Players: " . $data['gq_numplayers'] . "/" . $data['gq_maxplayers'] . "<br>";
        echo "Version: " . $data['virtualserver_version'] . "<br>";
    } else {
        echo "Server is offline.<br>";
    }
}
?>

