<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/app/data/public/user/accounts/kincsadv.yaml',
    'modified' => 1644435483,
    'data' => [
        'state' => 'enabled',
        'email' => 'kin@csadv.ru',
        'fullname' => 'ILya Klishin',
        'language' => 'ru',
        'content_editor' => 'default',
        'twofa_enabled' => false,
        'twofa_secret' => 'JWDNTITV4CIQCF55EGMKTL4U3WMYKMOU',
        'avatar' => [
            
        ],
        'hashed_password' => '$2y$10$w6bUlXMglI2QurlQYgV69.ni9CZHgYK1YgZB8LJEXO8rD2AuaH/Xu',
        'access' => [
            'site' => [
                'login' => true
            ],
            'admin' => [
                'login' => true,
                'super' => true,
                'cache' => true,
                'configuration' => true,
                'pages' => true,
                'maintenance' => true,
                'statistics' => true,
                'plugins' => true,
                'themes' => true,
                'tools' => true,
                'users' => true,
                'flex-objects' => true
            ]
        ]
    ]
];
