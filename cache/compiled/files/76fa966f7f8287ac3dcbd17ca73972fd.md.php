<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/app/data/public/user/pages/01.blog/the-urban-jungle/item.md',
    'modified' => 1644437633,
    'data' => [
        'header' => [
            'title' => '12 лучших инструментов визуализации данных для веб-разработчиков',
            'description' => 'Есть много вещей , которые следует учитывать при выборе визуализации данных прямо или диаграмм инструмент для вашего проекта. В этой статье я дам вам краткое изложение',
            'date' => '17:34 07/04/2020',
            'author' => 'ILya Klishin',
            'taxonomy' => [
                'category' => 'blog',
                'tag' => [
                    0 => 'data'
                ]
            ]
        ],
        'frontmatter' => 'title: 12 лучших инструментов визуализации данных для веб-разработчиков
description: Есть много вещей , которые следует учитывать при выборе визуализации данных прямо или диаграмм инструмент для вашего проекта. В этой статье я дам вам краткое изложение
date: 17:34 07/04/2020
author: ILya Klishin
taxonomy:
    category: blog
    tag: [data]',
        'markdown' => '## 12 лучших инструментов визуализации данных для веб-разработчиков


Есть много вещей , которые следует учитывать при выборе визуализации данных прямо или диаграмм инструмент для вашего проекта. В этой статье я дам вам краткое изложение 12 лучших инструментов визуализации данных для веб-разработчиков, которые помогут вам перестать бороться с данными и начать создавать графики.



## Google диаграммы 

Огромная библиотека информации, доступная с помощью [Google Charts,][1] делает его фантастической [отправной точкой][2] для всех, кто хочет начать работу с диаграммами с помощью JavaScript. В документации есть куча закомментированного кода и пошаговых инструкций, которые вы можете использовать для встраивания диаграмм HTML5 / SVG в свои веб-страницы.

![Google диаграммы][3]

Если вам нужна расширенная настройка и больше диаграмм, чем у Google 18, ниже приведены несколько лучших вариантов с большим количеством типов и функций.

**Подходит для:** серьезных разработчиков, которым нужно гибкое, хорошо документированное решение.

## МетрикиГрафика 

[![МетрикиГрафика](https://blog.udacity.com/wp-content/uploads/2016/03/MetricsGraphics-1024x446.png)](http://blog.udacity.com/wp-content/uploads/2016/03/MetricsGraphics.png)

[MetricsGraphics][4] - это библиотека графиков, построенная на D3.js, но оптимизированная для визуализации и размещения данных временных рядов. Хотя он ограничен только линейными диаграммами, диаграммами рассеяния, гистограммами, гистограммами и таблицами данных, он делает эти несколько вещей невероятно хорошо.

Как и в Google Charts (Metrics Graphics - это продукт Mozilla), на их сайте есть масса полезной документации и примеров кода, что упрощает освоение новичками.

Хотя это упрощенное решение, оно легковесно и быстро обучается благодаря забавному [интерактивному примеру,][5] который они предоставляют (наблюдения НЛО, а?).

**Подходит для:** разработчиков, которым нужно быстрое и красивое решение, не прибегая к беспорядку кода.

## FusionCharts

[![FusionCharts](https://blog.udacity.com/wp-content/uploads/2016/03/FusionCharts-1024x637.png)](http://blog.udacity.com/wp-content/uploads/2016/03/FusionCharts.png)

[FusionCharts][6] поддерживает обычный JavaScript, а также [jQuery][7] , [Angular][8] и другие популярные библиотеки / фреймворки. С более чем 90 диаграммами и 1000 картами это более полное решение, чем Google Charts или MetricsGraphics. Ознакомьтесь с [техническими характеристиками,][9] чтобы увидеть полный список предоставленных диаграмм.

Рассматривая масштабируемость вашего приложения или веб-страницы, важно помнить, что выбор инструмента визуализации данных, который не полностью завершен, может снова вас укусить. FusionCharts используется такими компаниями, как Microsoft, Google и IBM, поэтому очевидно, что это масштабируемый инструмент даже для корпоративных требований.

**Подходит для:** разработчиков, которым нужен огромный набор легко настраиваемых диаграмм.

## Эпоха 

[![Эпоха](https://blog.udacity.com/wp-content/uploads/2016/03/Epoch-1024x305.png)](http://blog.udacity.com/wp-content/uploads/2016/03/Epoch.png)

[Epoch][10] - это инструмент, созданный на основе d3.js, специально для того, чтобы разработчики могли использовать диаграммы в реальном времени в своих приложениях или на своих веб-страницах. Тщательно документированная, Epoch на 100% бесплатна и имеет открытый исходный код, поэтому это хороший вариант, если вы не хотите вкладывать деньги в более тяжелое решение.

Имея 5 типов диаграмм как для базовых, так и для работы в реальном времени, Epoch не противостоит полнофункциональным продуктам, таким как FusionCharts или Highcharts, но выделяется тем, что представляет данные в реальном времени простым и доступным способом.

**Подходит для:** простых и гибких графиков в реальном времени.

## ECharts 

[![ECharts](https://blog.udacity.com/wp-content/uploads/2016/03/ECharts-1024x461.png)](http://blog.udacity.com/wp-content/uploads/2016/03/ECharts.png) [ECharts от][11] Baidu - [отличный][11] инструмент для управления данными после того, как они нанесены на диаграммы, потому что у него есть одна уникальная функция: Drag-Recalculate позволяет пользователям перетаскивать разделы данных с одной диаграммы на другую и пересчитывать диаграммы в реальном времени. Не говоря уже о том, что ECharts _создан_ для больших данных и может мгновенно отобразить до 200 000 точек на декартовой диаграмме и воплотить их в жизнь с помощью [ZRender][12] , легкой библиотеки холста, созданной специально для ECharts.

**Подходит для:** манипулирования данными в реальном времени без кода с его уникальной функцией пересчета.

## D3.js 

[![Блог D3js](https://blog.udacity.com/wp-content/uploads/2016/03/D3js-Blog.png)](http://blog.udacity.com/wp-content/uploads/2016/03/D3js-Blog.png)

Хотя это не самый удобный инструмент, нельзя отрицать, что d3.js - это сила, с которой нужно считаться в мире диаграмм JavaScript. Множество других библиотек расширяют его, потому что в нем есть все функции, которые вы ожидаете, он поддерживает HTML, SVG и CSS и, хотя он не поставляется с готовыми диаграммами, включает в себя огромное количество из [созданного пользователя взносов][13] .

Учитывая, что D3.js довольно сложно выучить, стоит проверить этот курс по [визуализации данных и d3.js][14] , который является настолько [полным][14] изложением основ, насколько вы можете попросить.

**Подходит для:** Хардкорных экспертов по построению графиков, которые не боятся кодировать.

## Сигма 

[Sigma][15] - это своего рода ниша по сравнению с остальными инструментами, описанными до сих пор в этом списке, потому что она предназначена для рисования графиков. Он построен на Canvas и WebGL и имеет общедоступный API, поэтому имеет [ряд плагинов,][16] предоставленных сообществом на GitHub. Вот пример того, что вы можете делать с Sigma js:

![Сигма][17]

Sigma полностью адаптивна, интерактивна и позволяет разработчикам напрямую добавлять свои собственные функции в сценарии и визуализировать узлы и края в точном соответствии со спецификацией.

**Подходит для:** разработчиков, которым нужен мощный специализированный инструмент для рисования графиков.

## Highcharts 

Дико популярные [Highcharts][18] могут создавать интерактивные диаграммы, не полагаясь на плагины. Фактически, гибкому API построения графиков Highcharts доверяют такие компании, как Nokia, Twitter, Visa и Facebook.

Highcharts бесплатен для некоммерческого использования, но как только вы захотите начать зарабатывать на нем (и получите поддержку, пока вы это делаете), он обойдется вам в 590 долларов за лицензию разработчика.

Вот пример диаграммы, созданной с помощью этого инструмента:

![Highcharts][19]

Если вы хотите узнать, как начать использовать Highcharts, ознакомьтесь с [этим отличным][20] кратким [руководством][20] .

**Подходит для:** разработчиков, которые хотят создавать диаграммы любой сложности с помощью технической поддержки, предоставляемой премиальным продуктом.

## dc.js 

[dc.js][21] - это библиотека JavaScript для построения трехмерных диаграмм с открытым исходным кодом, идеально подходящая для создания интерактивных панелей мониторинга. Диаграммы являются реляционными, поэтому, когда вы взаимодействуете с одним разделом панели мониторинга, остальные реагируют на детализацию до этой конкретной точки данных. Вот пример:

[![DC js образ](https://blog.udacity.com/wp-content/uploads/2016/03/DC-js-image-1024x564.png)](http://blog.udacity.com/wp-content/uploads/2016/03/DC-js-image.png)

За исключением нескольких [онлайн-курсов][22] , библиотека полностью [обучается][23] на этом примере, поэтому, просмотрев их документацию, вы сможете создать свою собственную версию.

Хотя dc.js не может создавать диаграммы, столь же разнообразные, как некоторые из наиболее полнофункциональных инструментов в этом списке, такие как ECharts или Google Charts, он невероятно хорошо фокусируется на своем USP - исследовании большого многомерного набора данных.

**Подходит для** : разработчиков, которым нужна панель реляционных диаграмм для своего проекта.

## диграфы 

[![диграфы](https://blog.udacity.com/wp-content/uploads/2016/03/dygraphs.png)](http://blog.udacity.com/wp-content/uploads/2016/03/dygraphs.png)

Абсолютная жемчужина инструмента визуализации данных, dygraphs была первоначально разработана в Google и используется по сей день в [Google Correlate][24] (конечно, с некоторыми изменениями дизайна). Его можно использовать для интенсивных проектов, поскольку он может отображать миллионы точек данных без замедления, что делает его упрощенный дизайн простительным недостатком.

От внутреннего инструмента Google до публичного использования, dygraphs активно поддерживается и развивается сообществом, а исходный код открыт для [просмотра на GitHub][25] .

**Подходит для:** разработчиков, которым нужен специализированный, активно поддерживаемый инструмент для построения больших наборов данных.

## Вега 

[![Вега](https://blog.udacity.com/wp-content/uploads/2016/03/Vega.png)](http://blog.udacity.com/wp-content/uploads/2016/03/Vega.png)

[Vega][26] - это библиотека на основе d3.js для создания, совместного использования и сохранения проектов визуализации данных. Он состоит из наборов инструментов и систем, в том числе тех, которые конкурируют по мощности с d3, без необходимости написания кода. Vega переводит JSON в графику SVG или HTML5, которая - хотя в данном случае ничего особенного - определенно выполняет свою работу.

Поскольку [Vega не требует никакого программирования][27] (только возможность редактировать значения в файле JSON), это отличная альтернатива сложности d3 при сохранении функций.

**Подходит для:** разработчиков, которым нужна мощь d3 без сложного изучения ее с нуля.

## NVD3 

Последний инструмент в этом списке построен на d3, который является предшественником большинства инструментов визуализации данных с открытым исходным кодом. NVD3 - это набор компонентов, которые позволяют разработчикам создавать многоразовые диаграммы. На [странице примеров NVD3][28] можно найти различные демонстрации и их код , и это также лучший способ изучить его.

Как видите, стиль NVD3 несколько более изысканный, чем у его родителя:

[![Образ NVD3](https://blog.udacity.com/wp-content/uploads/2016/03/NVD3-image.png)](http://blog.udacity.com/wp-content/uploads/2016/03/NVD3-image.png)

Он поддерживает 11 типов диаграмм, включая области, линии, столбцы, пузырьки, круговые диаграммы и точечные диаграммы, и совместим со всеми современными браузерами и более поздними версиями IE10.

**Подходит для:** разработчиков со знанием d3, которым нужны многоразовые диаграммы.

-

## Какой инструмент визуализации данных мне больше всего подходит? 



[0]: http://www.fusioncharts.com/javascript-charts-guide/
[1]: https://developers.google.com/chart/
[2]: https://developers.google.com/chart/interactive/docs/quick_start
[3]: https://blog.udacity.com/wp-content/uploads/2016/03/Google-Charts-1024x422.png
[4]: https://github.com/mozilla/metrics-graphics
[5]: http://metricsgraphicsjs.org/interactive-demo.htm
[6]: http://www.fusioncharts.com/
[7]: http://www.fusioncharts.com/jquery-charts/
[8]: http://www.fusioncharts.com/angularjs-charts/
[9]: http://www.fusioncharts.com/tech-specs/
[10]: http://epochjs.github.io/epoch/
[11]: http://echarts.baidu.com/
[12]: https://github.com/ecomfe/zrender
[13]: https://github.com/mbostock/d3/wiki/Gallery
[14]: https://www.udacity.com/course/data-visualization-and-d3js--ud507
[15]: http://sigmajs.org/
[16]: https://github.com/jacomyal/sigma.js/tree/master/plugins
[17]: https://blog.udacity.com/wp-content/uploads/2016/03/Sigma-1024x622.png
[18]: http://www.highcharts.com/
[19]: https://blog.udacity.com/wp-content/uploads/2016/03/Highcharts-1024x700.png
[20]: http://code.tutsplus.com/tutorials/adding-charts-to-your-site-with-highcharts--cms-21692
[21]: https://dc-js.github.io/dc.js/
[22]: http://www.codeproject.com/Articles/693841/Making-Dashboards-with-Dc-js-Part-Using-Crossfil
[23]: https://dc-js.github.io/dc.js/docs/stock.html
[24]: http://www.google.com/trends/correlate/search?e=javascript&t=weekly&p=us
[25]: https://github.com/danvk/dygraphs
[26]: http://vega.github.io/vega/
[27]: http://vega.github.io/vega-editor/
[28]: http://nvd3.org/examples/
'
    ]
];
