<?php

$LRSs = [
    [
        'endpoint' => getenv('LRS_ENDPOINT'),
        'username' => getenv('LRS_USERNAME'),
        'password' => getenv('LRS_PASSWORD'),
        'version'  => '1.0.1'
    ]
];
$KEYs = [
    'public'   => __DIR__ . '/../keys/travis/cacert.pem',
    'private'  => __DIR__ . '/../keys/travis/privkey.pem',
    'password' => 'travis'
];
