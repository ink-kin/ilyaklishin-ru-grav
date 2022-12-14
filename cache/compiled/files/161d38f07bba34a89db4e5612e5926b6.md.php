<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/kincsadv/web/ilyaklishin.ru/public_html/user/pages/01.blog/3-alternativy-confluence-s-otkrytym-ishodnym-kodom/item.md',
    'modified' => 1648404688,
    'data' => [
        'header' => [
            'title' => '3 альтернативы Confluence с открытым исходным кодом',
            'date' => '13:34 05/26/2014'
        ],
        'frontmatter' => 'title: 3 альтернативы Confluence с открытым исходным кодом
date: 13:34 05/26/2014 ',
        'markdown' => '===

## BlueSpice, XWiki и DokuWiki предоставляют вам все функции более популярного программного обеспечения для управления знаниями без проприетарных ограничений.
 

![Деловая женщина работает на ноутбуке, сидя перед окном][4]

 
Одна из самых важных вещей, которые нужно делать на современном предприятии, - это собирать знания о компании. Организации нуждаются в общих рабочих пространствах, где отдельные лица и группы могут сотрудничать и делиться своим опытом и знаниями. Это делает системы управления знаниями незаменимыми в сегодняшних гибких средах.

Некоторые компании используют Confluence, другие - GSuite, а третьи - SharePoint. Но все они являются проприетарным программным обеспечением, что означает, что они не предлагают вам свой исходный код для аудита или изменения. Если вам неудобно вводить общие знания вашей компании в программное обеспечение, которым вы не владеете или не контролируете, проекты с открытым исходным кодом [BlueSpice][6] , [XWiki][7] и [DokuWiki][8] являются отличной альтернативой.

При выборе интрасети следует учитывать множество факторов. Вы хотите, чтобы знания были консолидированы, чтобы был единый источник истины, и вы хотите, чтобы они были доступны всем, кому требуется доступ к ним. Вот некоторые из наиболее важных вещей, которые следует искать в платформе интрасети.

## Внутренняя структура

Системы управления знаниями должны обеспечивать структуру для внутреннего содержания. Инструмент, который случайным образом перемешивает текст и файлы, - пустая трата времени. Confluence поддерживает _пространства_ для отдельных тем и использует _категории_ и _подкатегории_ в этих пространствах. Документы могут быть организованы в древовидную иерархию, и есть контроль доступа для отдельных областей, вплоть до отдельных документов.

BlueSpice придерживается другого подхода. Он основан на MediaWiki (программное обеспечение, на котором работает Википедия уже почти два десятилетия) и полагается на _пространства имен_ для определенных типов контента. Это может сбивать с толку, если вам нравится видеть структуру ваших данных, но может освободить, если вы предпочитаете классифицировать данные и оставлять структуру для интерпретации. _Категории_ можно легко реализовать, чтобы улучшить видимую структуру для тех, кто в ней нуждается, но пространства имен не заставляют страницу переходить в определенную область (как это делает Space in Confluence).

Больше альтернатив с открытым исходным кодом 

* [Инструменты управления проектами с открытым исходным кодом][9]
* [Альтернативы Trello][10]
* [Видеоредакторы Linux][11]
* [Альтернативы Photoshop с открытым исходным кодом][12]
* [Список альтернатив с открытым исходным кодом][13]
* [Последние статьи об альтернативах с открытым исходным кодом][14]

В дизайне XWiki несколько сочетаются подходы Confluence и BlueSpice. Основное предположение состоит в том, что весь контент находится в одном пространстве имен в вики. Данные организованы с помощью _вложенных страниц_ , которые эквивалентны Spaces in Confluence. Но XWiki также поддерживает вложенные вики для определенных тем, которые администратор может не захотеть иметь на верхнем уровне. «ДокуВики» полагается на то, что она называет _пространствами имен_ , которые напоминают категории в BlueSpice.

Разница в том, как данные хранятся на жестком диске и как они представляются пользователям, во многом зависит от их представления. Хорошо организованное рабочее пространство обеспечивает тот же результат с точки зрения пользователя: данные, которые легко найти в логической, предметно-ориентированной структуре.

## Обнаруживаемость

Важной особенностью программного обеспечения для управления знаниями является возможность поиска существующего контента.

BlueSpice полагается на программное обеспечение с открытым исходным кодом для поиска и обнаружения. Одно из основных различий между BlueSpice и его благородным предком MediaWiki заключается в том, что BlueSpice предоставляет [ElasticSearch][15] для внутренней идентификации контента.

XWiki следует аналогичным путем, но с другими компонентами. Он основан на [Apache Solr][16] , который включает мощный механизм поиска и индексирования [Lucene на][17] основе Java .

«ДокуВики» следует принципу KISS («будь максимально простым»). Он хранит свое содержимое в текстовых файлах (а не в базе данных) и использует приложение индексирования для отслеживания обновленного содержимого.

## Соблюдение

Если вы когда-либо работали в крупной или регулируемой компании, вы знаете, что соблюдение требований является важной частью проектирования инфраструктуры. Ни одно предприятие не может позволить, чтобы его конфиденциальные материалы попали в руки конкурентов. Неспособность защитить информацию о клиентах может не только привести к подрыву репутации - во многих частях мира, включая Европейский Союз, это также может привести к штрафам, которые ставят под угрозу бизнес. Таким образом, проблема заключается в создании базового набора правил для защиты ваших данных и обеспечении того, чтобы ваши инструменты управления знаниями поддерживали множество возможных способов достижения этой цели.

Возьмем, к примеру, управление пользователями. Большинство компаний имеют централизованный каталог пользователей, чтобы гарантировать автоматическое удаление прав доступа, когда коллеги покидают компанию. Программное обеспечение для управления знаниями должно поддерживать такие каталоги.

Другое дело фирменный стиль и дизайн. Это напрямую не связано с безопасностью, но важно дать пользователям визуальные подсказки, что сайт является подлинным внутренним сайтом. Это требует возможности создания темы.

BlueSpice имеет полную интеграцию с LDAP и Active Directory. Группы и членство в группах можно (а в BlueSpice фактически должно) управлять через службу каталогов. Возможность создания темы в BlueSpice позволяет администратору более или менее полностью изменять внешний вид платформы (в зависимости от того, сколько времени вы хотите потратить на ее настройку). Если родословная BlueSpice заставляет вас представить строгий дизайн MediaWiki, взгляните, потому что даже тема по умолчанию современна и привлекательна.

 

![BlueSpice][19]

(Маркус Фейльнер, [CC BY-SA 4.0][20] )

То же самое и с XWiki, где поддержка LDAP и Active Directory существует уже довольно давно. Новые темы могут быть установлены в XWiki через его менеджер расширений. В основном они позволяют адаптировать цвета, используемые программой, что может быть достаточно для многих компаний. Если вам нужна полная адаптация пользовательского интерфейса, скины могут помочь. Они позволяют изменять шаблоны CSS и скорости.
 

![XWiki][22]

«ДокуВики» еще проще адаптировать к корпоративному стилю. Он использует очень простую структуру сайта, поэтому внешний вид вашей вики можно изменить напрямую, отредактировав ее шаблон. Его плагин Secure LDAP (LDAPS) позволяет ему подключаться к службам LDAP и Active Directory.
 

![Slackermedia, сайт "ДокуВики"][24]

Slackermedia использует «ДокуВики» (Маркус Фейлнер, [CC BY-SA 4.0][20] )

## Редакторы

Текстовый редактор, который люди используют для вставки контента в систему управления знаниями, оказывает сильное влияние на общее признание инструмента среди пользователей, независимо от того, работают ли они в компании или сообществе. Люди, как правило, предпочитают универсальный редактор, в основном WYSIWIG («то, что вы видите, то и получаете»), и интуитивно понятный.

BlueSpice поставляется с двумя редакторами. Первый - это то, что люди могут знать из Википедии. Некоторым пользователям это понравится, но людей, не знакомых с разметкой вики, это может не впечатлить. Для таких пользователей BlueSpice предлагает визуальный редактор, доступный через интерфейс расширения MediaWiki.

XWiki следует аналогичному пути и включает в себя базовый редактор XWiki, редактор WYSIWYG и редактор встроенных форм.

« [ДокуВики» также справляется][25] с этой задачей с помощью плагина редактора под названием [ProseMirror][25] . В нем есть редактор WYSIWIG, специально написанный для «ДокуВики» с использованием фреймворка ProseMirror, который представляет собой онлайн-фреймворк для написания редакторов, поэтому редактор «ДокуВики» не только красив, но и очень функционально.

## Расширения

Хорошее решение дает подавляющее большинство того, что нужно пользователям. _Большой_ решение является расширяемым с помощью плагинов , так что вы можете настроить его , чтобы быть тем, что хотите , чтобы ваши пользователи.

BlueSpice поставляется с магазином расширений. Он также может использовать плагины, доступные для MediaWiki.

XWiki использует расширения для ряда вещей, таких как установка тем или предоставление дополнительных функций, а также имеет отдельный магазин расширений.

«ДокуВики» может быть расширена администратором сайта с помощью более чем 1300 плагинов. Это говорит мне о том, что «ДокуВики» имеет самые сильные связи со своим сообществом с открытым исходным кодом (хотя BlueSpice и XWiki также являются вполне действующими проектами с открытым исходным кодом).

## Используйте интранет с открытым исходным кодом

BlueSpice и XWiki обладают солидным набором функций и обеспечивают пользовательский интерфейс, который позволяет пользователям обмениваться знаниями и сотрудничать в интрасети. «ДокуВики» следует подходу «назад к истокам», оставаясь верной по форме и функциям типичной вики-среде.

Все три варианта с открытым исходным кодом включают основные функции, поддерживаемые их проприетарными альтернативами. Вы можете получить поддержку по запуску BlueSpice и XWiki от соответствующих поставщиков, и многие компании предоставляют стороннюю поддержку для «ДокуВики».

Так или иначе, программное обеспечение с открытым исходным кодом удовлетворяет всем требованиям для создания надежного, хорошо работающего пакета управления знаниями.

[4]: https://opensource.com/sites/default/files/styles/image-full-size/public/lead-images/lenovo-thinkpad-laptop-concentration-focus-windows-office.png?itok=-8E2ihcF
[5]: https://creativecommons.org/licenses/by/3.0/us/
[6]: https://bluespice.com/products/bluespice-free
[7]: https://www.xwiki.org/xwiki/bin/view/Main/WebHome
[8]: https://www.dokuwiki.org/dokuwiki
[9]: https://opensource.com/business/16/3/top-project-management-tools-2016?intcmp=7013a000002D4iFAAS
[10]: https://opensource.com/alternatives/trello?intcmp=7013a000002D4iFAAS
[11]: https://opensource.com/life/15/1/current-state-linux-video-editing?intcmp=7013a000002D4iFAAS
[12]: https://opensource.com/life/12/6/design-without-debt-five-tools-for-designers?intcmp=7013a000002D4iFAAS
[13]: https://opensource.com/alternatives?intcmp=7013a000002D4iFAAS
[14]: https://opensource.com/tags/alternatives?intcmp=7013a000002D4iFAAS
[15]: https://opensource.com/life/16/6/overview-elastic-stack
[16]: https://lucene.apache.org/solr
[17]: https://lucene.apache.org
[19]: https://opensource.com/sites/default/files/uploads/bluespice.jpg
[20]: https://creativecommons.org/licenses/by-sa/4.0/
[22]: https://opensource.com/sites/default/files/xwiki.jpg
[24]: https://opensource.com/sites/default/files/uploads/dokuwiki.jpg
[25]: https://prosemirror.net
'
    ]
];
