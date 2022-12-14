<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/app/data/public/user/pages/01.blog/30-luchshih-praktik-razrabotki-i-testirovaniya-programmnogo-obespecheniya/item.md',
    'modified' => 1644442236,
    'data' => [
        'header' => [
            'title' => '30 лучших практик разработки и тестирования программного обеспечения'
        ],
        'frontmatter' => 'title: 30 лучших практик разработки и тестирования программного обеспечения',
        'markdown' => 'Эти правила разработки программного обеспечения и передовые методы тестирования могут помочь вам сэкономить время и избавиться от головной боли.

===


> 30 лучших практик разработки и тестирования программного обеспечения

## YAGNI

YAGNI («You aren\'t gonna need it»; с англ. — «Вам это не понадобится»). Не пишите код, который, по вашему мнению, может вам понадобиться в будущем, но пока не нужен. Это кодирование для воображаемых будущих вариантов использования , и неизбежно код станет мертвым кодом или будет нуждаться в переписывании, потому что будущий вариант использования всегда работает несколько иначе, чем вы его себе представляли.

Если вы добавите код для будущего использования, я поставлю его под сомнение при проверке кода. (Вы можете и должны разрабатывать API, например, чтобы разрешить варианты использования в будущем, но это уже другая проблема.)

То же самое и с кодом комментирования; если в выпуск входит блок закомментированного кода, его не должно быть. Если это код, который можно восстановить, сделайте билет и укажите хэш фиксации для удаления кода. YAGNI - это ключевой элемент гибкого программирования . Лучшее руководство для этого - « Объяснение экстремального программирования » Кента Бека.

## DRY
Don\'t Repeat Yourself - имеет гораздо меньшее значение в тестах, чем в производственном коде. Читаемость отдельного тестового файла более важна, чем ремонтопригодность (выделение многоразовых фрагментов). Это потому, что тесты выполняются и читаются индивидуально, а не сами по себе, будучи частью более крупной системы. Очевидно, что чрезмерное повторение означает, что для удобства можно создавать повторно используемые компоненты, но это гораздо менее важно, чем для производства.



## Тесты не нуждаются в тестировании

Тесты не нуждаются в тестировании. Инфраструктура, фреймворки и библиотеки для тестирования нуждаются в тестах. Не испытывайте браузер или внешние библиотеки , если вы действительно не нужны. Тестируйте код, который вы пишете, а не чужой.

## третий раз вы пишете код

третий раз вы пишете тот же кусок кода в нужное время , чтобы извлечь его в качестве помощника общего назначения (и тесты записи для него). Вспомогательные функции в тесте не нуждаются в тестировании; когда вы разбиваете их и повторно используете, им действительно нужны тесты. К тому времени, когда вы в третий раз напишете похожий код, вы будете иметь четкое представление о том, какую форму вы решаете универсальную проблему.

## дизайн API

Что касается дизайна API (внешний вид и объектный API): простые вещи должны быть простыми; сложные вещи должны быть возможны . Сначала проектируйте для простого случая, желательно с нулевой конфигурацией или параметризацией, если это возможно. Добавьте параметры или дополнительные методы API для более сложных и гибких вариантов использования (по мере необходимости).

## Быстро потерпите неудачу

Быстро потерпите неудачу. Проверьте ввод и откажитесь от бессмысленного ввода или недопустимого состояния как можно раньше, желательно с исключением или ответом об ошибке, которые сделают точную проблему ясной для вашего вызывающего абонента. Однако разрешите «новаторские» варианты использования вашего кода (т. Е. Не выполняйте проверку типов для проверки ввода, если вам это действительно не нужно).


## Модульные тесты

Модульные тесты - это проверка на единицу поведения, а не на единицу реализации. Целью является изменение реализации без изменения поведения или необходимости изменения каких-либо тестов, хотя это не всегда возможно. Поэтому, где это возможно, относитесь к своим тестовым объектам как к черным ящикам, тестируя через общедоступный API, не вызывая частных методов и не вмешиваясь в состояние.

Для некоторых сложных сценариев - таких как тестирование поведения в определенном сложном состоянии для поиска неясной ошибки - это может быть невозможно. Написание тестов в первую очередь действительно помогает в этом, поскольку заставляет задуматься о поведении вашего кода и о том, как вы собираетесь его тестировать, прежде чем писать. Тестирование сначала поощряет меньшие, более модульные единицы кода, что обычно означает лучший код.

## Для модульных тестов

Для модульных тестов (включая тесты тестовой инфраструктуры) должны быть протестированы все пути кода. 100% покрытие - хорошее место для начала. Вы не можете охватить все возможные перестановки / комбинации состояний (комбинаторный взрыв), поэтому это требует рассмотрения. Пути кода следует оставлять непроверенными только при наличии очень веской причины. Нехватка времени не является уважительной причиной и требует больше времени. Возможные веские причины включают: действительно непроверяемый (каким-либо значимым образом), невозможный на практике или покрытый где-либо еще в тесте. Код без тестов - это ответственность. Измерение охвата и отклонение PR, снижающих процент охвата, - это один из способов обеспечить постепенный прогресс в правильном направлении.

## Код - это враг

Код - это враг: он может пойти не так, и его нужно поддерживать. Пишите меньше кода. Удалить код. Не пишите код, который вам не нужен.

## комментарии к коду неизбежно становятся ложью

Со временем комментарии к коду неизбежно становятся ложью. На практике мало кто обновляет комментарии, когда что-то меняется. Стремитесь сделать свой код читабельным и самодокументируемым с помощью передовых методов именования и известного стиля программирования.

Код, который невозможно сделать очевидным - работа над непонятной ошибкой или маловероятным условием, или необходимая оптимизация - действительно нуждается в комментариях. Прокомментируйте намерение кода и то, почему он что-то делает, а не то, что он делает. (Кстати, этот конкретный пункт о том, что комментарии являются ложью, является спорным. 

## Пишите защитно

Пишите защитно. Всегда думайте о том, что может пойти не так, что произойдет при недопустимом вводе, а что может выйти из строя, что поможет вам отловить множество ошибок до того, как они произойдут.


## Логику легко протестировать

Логику легко протестировать, если она не имеет состояния и побочных эффектов. Разбейте логику на отдельные функции, а не смешивайте логику с кодом с сохранением состояния и кодом с побочными эффектами. Разделение кода с сохранением состояния и кода с побочными эффектами на более мелкие функции упрощает имитацию и модульное тестирование без побочных эффектов. (Меньшие накладные расходы на тесты означают более быстрые тесты.) Побочные эффекты действительно нуждаются в тестировании, но тестировать их один раз и высмеивать их везде, как правило, является хорошим шаблоном.


## Глобалы плохи

Глобалы плохи. Функции лучше типов. Объекты, вероятно, лучше сложных структур данных.


## Использование встроенных типов

Использование встроенных типов, например, Python и их методов будет быстрее, чем написание ваших собственных типов (если вы не пишете на C). Если производительность важна, попробуйте решить, как использовать стандартные встроенные типы, а не настраиваемые объекты.


## Внедрение зависимостей

Внедрение зависимостей - полезный паттерн кодирования, позволяющий четко определить, что такое ваши зависимости и откуда они берутся. (Объекты, методы и т. Д. Получают свои зависимости в качестве параметров, а не создают экземпляры новых объектов сами по себе.) Это действительно усложняет подписи API, так что это компромисс. В конце концов, использование метода, которому требуется 10 параметров для всех его зависимостей, в любом случае является хорошим признаком того, что ваш код делает слишком много. 

## Цель - небольшие тестируемые модули

Чем больше вам придется имитировать для тестирования вашего кода, тем хуже ваш код. Чем больше кода вам нужно создать и внедрить, чтобы иметь возможность протестировать определенный фрагмент поведения, тем хуже ваш код. Цель - небольшие тестируемые модули, а также интеграция более высокого уровня и функциональные тесты для проверки правильности взаимодействия модулей.

## внешние интерфейсы API - боль

Внешние API - это то место, где действительно важна «предварительная разработка» и рассмотрение будущих вариантов использования. Изменение API - это боль для нас и наших пользователей, а создание обратной несовместимости ужасно (хотя иногда невозможно избежать). Тщательно создавайте внешние интерфейсы API, придерживаясь принципа «простые вещи должны быть простыми».

## 30 и 500

Если функция или метод превышает 30 строк кода, подумайте о том, чтобы разбить его. Хороший максимальный размер модуля составляет около 500 строк. Файлы тестов, как правило, длиннее этого.

## Туда не пиши - сюда пиши, а то снег «башка» попадёт

Не пиши там, где программисты обычно не ожидают найти код.

## Рефакторинг

Проводите рефакторинг, когда это возможно. Каждое преобразование должно улучшать структуру программы, не изменяя её поведения. Потенциальные преимущества рефакторинга заключаются в повышении читаемости кода и понижении его сложности. Это повысит удобство при сопровождении кода и создаст более простую, чистую и выразительную архитектуру.

'
    ]
];
