<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/kincsadv/web/ilyaklishin.ru/public_html/user/config/plugins/email.yaml',
    'modified' => 1648404688,
    'data' => [
        'enabled' => true,
        'from' => 'site@ilyaklishin.ru',
        'from_name' => 'Письмо с сайта ilyaklishin.ru',
        'to' => 'site@ilyaklishin.ru',
        'to_name' => 'Письмо с сайта ilyaklishin.ru',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.yandex.ru',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'site@ilyaklishin.ru',
                'password' => 'stzsgbhlstagcbka',
                'auth_mode' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false,
        'charset' => NULL,
        'cc' => NULL,
        'cc_name' => NULL,
        'bcc' => NULL,
        'reply_to' => NULL,
        'reply_to_name' => NULL,
        'body' => NULL
    ]
];
