<?php
return [
    'route' => [
        'prefix' => 'store',
        'middleware' => ['web', 'auth']
    ],
    'secure' => false
];