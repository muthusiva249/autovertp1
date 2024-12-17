<?php
return [
    'default' => env('FILAMENT_PANEL', 'admin'),

    'panels' => [
        'admin' => [
            'id' => 'admin',
            'path' => 'admin',
            'middleware' => ['web', 'auth'],
            'name' => 'Admin Panel',
        ],
    ],
];
