<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/app/data/public/user/pages/03.contact/form.md',
    'modified' => 1644444222,
    'data' => [
        'header' => [
            'title' => 'Contact Form',
            'menu' => 'Contact',
            'form' => [
                'name' => 'my-nice-form',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Ваше имя',
                        'placeholder' => 'Enter your name',
                        'autofocus' => 'on',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'text',
                        'validate' => [
                            'rule' => 'email',
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Ваше сообщение',
                        'size' => 'long',
                        'placeholder' => 'Введите здесь подробно Ваше сообщение',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Отправить'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.from }}',
                                1 => '{{ form.value.email }}'
                            ],
                            'subject' => '[Feedback] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'feedback-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Благодарю за Ваше сообщение!'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contact Form
menu: Contact
form:
    name: my-nice-form
    fields:
        - name: name
          label: Ваше имя
          placeholder: Enter your name
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Enter your email address
          type: text
          validate:
            rule: email
            required: true

        - name: message
          label: Ваше сообщение
          size: long
          placeholder: Введите здесь подробно Ваше сообщение
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Отправить

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include \'forms/data.html.twig\' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - message: Благодарю за Ваше сообщение!
        - display: thankyou',
        'markdown' => '> Приветствую! Молви, друг, и проходи

'
    ]
];
