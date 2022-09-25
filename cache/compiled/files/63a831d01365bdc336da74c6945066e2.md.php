<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/kincsadv/web/ilyaklishin.ru/public_html/user/pages/01.blog/blog.md',
    'modified' => 1648404688,
    'data' => [
        'header' => [
            'title' => 'Читать',
            'blog_url' => 'blog',
            'menu' => 'Читать',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 1.03
            ],
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'limit' => 5,
                'pagination' => true
            ],
            'feed' => [
                'description' => 'Sample Blog Description',
                'limit' => 10
            ],
            'pagination' => true
        ],
        'frontmatter' => 'title: Читать
blog_url: blog
menu: Читать

sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: @self.children
    order:
        by: date
        dir: desc
    limit: 5
    pagination: true

feed:
    description: Sample Blog Description
    limit: 10

pagination: true',
        'markdown' => '# Блог
'
    ]
];
