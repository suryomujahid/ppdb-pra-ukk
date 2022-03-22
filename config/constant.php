<?php

use App\Models\Registrar;

return [
    'registrar' => [
        'gender' => [
            Registrar::LAKILAKI,
            Registrar::PEREMPUAN,
        ],
        'major' => [
            Registrar::RPL,
            Registrar::TKJ,
            Registrar::MMD,
            Registrar::HTL,
            Registrar::BDP,
            Registrar::TBG,
        ],
        'religion' => [
            Registrar::ISLAM,
            Registrar::KRISTEN,
            Registrar::HINDU,
            Registrar::BUDDHA,
            Registrar::KONGHUCU,
            Registrar::KATOLIK,
        ]
    ],
];