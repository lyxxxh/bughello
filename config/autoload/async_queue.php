<?php

return [
    'default' => [
        'driver' => Hyperf\AsyncQueue\Driver\RedisDriver::class,
        'redis' => [
            'pool' => 'default'
        ],
        'channel' => 'bughello',
        'timeout' => 600,
        'retry_seconds' => [5, 30, 100, 200],
        'handle_timeout' => 600,
        'processes' => 1,
        'concurrent' => [
            'limit' => 6,
        ],
    ],
];