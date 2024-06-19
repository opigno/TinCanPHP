<?php

$LRSs = [
    [
        'endpoint' => env('LRS_ENDPOINT'),
        'username' => env('LRS_USERNAME'),
        'password' => env('LRS_PASSWORD'),
        'version'  => '1.0.1'
    ]
];
$KEYs = [
    'public'   => __DIR__ . '/../keys/travis/cacert.pem',
    'private'  => __DIR__ . '/../keys/travis/privkey.pem',
    'password' => 'travis'
];
