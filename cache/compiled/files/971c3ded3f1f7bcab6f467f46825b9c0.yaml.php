<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/app/data/public/user/config/site.yaml',
    'modified' => 1644436050,
    'data' => [
        'title' => 'Клишин',
        'default_lang' => 'ru',
        'author' => [
            'name' => 'ILya Klishin',
            'email' => 'kin@csadv.ru'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Это официальный сайт Илья Клишин и авторский проект...'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ],
        'share' => [
            'facebook' => true,
            'twitter' => true
        ],
        'calendar' => true,
        'sidebar_position' => 'left',
        'menu' => [
            0 => [
                'text' => 'External link',
                'link' => '#'
            ]
        ]
    ]
];
