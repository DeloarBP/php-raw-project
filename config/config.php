<?php

return [
    'database' => [
        'name' => 'demo',
        'username' => 'root',
        'password' => 'password',
        'connection' => 'mysql:hosts=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
