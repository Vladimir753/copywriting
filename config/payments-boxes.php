<?php

use App\Constants;

return [
    'boxes' => [
        [
            'name' => Constants::BASIC,
            'price' => 19.90,
            'frequency' => 'month',
            'plan_id' => 1,
            'features' => [
                '1 Seat',
                '2000 Words In Chat',
            ],
        ],
        [
            'name' => Constants::PRO,
            'price' => 49.90,
            'frequency' => 'month',
            'plan_id' => 2,
            'features' => [
                '3 Seat',
                '3000 Words In Chat',
                '500 Workflow Credits',
            ],
        ],
        [
            'name' => Constants::PREMIUM,
            'price' => 149.90,
            'frequency' => 'month',
            'plan_id' => 3,
            'features' => [
                '5 Seat',
                'Unlimited words in chat',
                '1000 Workflow Credits',
                'Fast support'
            ],
        ],
    ],
    'config' => [
        1 => 'price_1R8otyFK2Ux1Mh2vchzMEqSf',
        2 => 'price_1R8ovqFK2Ux1Mh2vB6yvJIov',
        3 => 'price_1R8owEFK2Ux1Mh2vgTWgKX9k',
    ]
];
