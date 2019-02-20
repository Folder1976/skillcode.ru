    <section class="page_top" id="top">
        <header class="page_header wow fadeInDown">
            <nav class="wrapper container"><a class="logo" href="index.php">SkillCode<img src="assets/images/logo.png" alt="SkillCode"></a></nav>
        </header>
        <div class="container">
            <div class="wrapper">
                <div class="inner">
                    <h1>SkillCode</h1>
                    <p class="wow fadeInLeft">Правила вестки</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page_rules">
        <div class="wrapper">
            <div class="container">
                <div class="cell">
                    <p>"Кроссбраузерность" - одинаковый вид в разных браузерах. По умолчанию верстка делается под браузеры начиная от [2 последние версии браузеров, ie9, ios 6, android 4] и выше. </p>
                </div>
                <div class="cell">
                    <p>"Валидная разметка" - разметка без ошибок в html-валидаторе </p>
                </div>
                <div class="cell">
                    <p>"Валидные стили" - стили без грубых ошибок в css-валидаторе (например, css-валидатор обычно "ругается" на вендорные префиксы, но они нужны для обеспечения кроссбраузерности) </p>
                </div>
                <div class="cell">
                    <p>"Спрайты" - группировка мелких изображений, png-иконок, svg-иконок в один файл (png - отдельно, svg - отдельно) для уменьшения количества обращений к серверу и ускорения загрузки страницы. </p>
                </div>
                <div class="cell">
                    <p>Использование html5, css3, предпроцесора scss, javaScript, jQuery (и jQuery библиотек), gulp и прочего</p>
                </div>
                <div class="cell">
                    <p>Все номера телефонов кликабельны и содержат атрибут tel </p>
                </div>
                <div class="cell">
                    <p>Все емайлы кликабельны с атрибутом mailto</p>
                </div>
                <div class="cell">
                    <p>Все ссылки на сторонние ресурсы содержать атрибут target="_blank" и открываются в новой вкладке </p>
                </div>
                <div class="cell">
                    <p>"Минификация" <span class='hint'>на момент сдачи</span> - для уменьшения общего размера (и ускорения загрузки страницы) сжимаются файлы стилей (css), скриптов (js) и изображения (jpg, png, gif). </p>
                </div>
                <div class="cell">
                    <p>"Pixel perfect". Верстка может незначительно отличатся от макета ( +/- 5% ) но если нужен "Pixel perfect" - опционально почасовая (обычно 9-15 часов) </p>
                </div>
                <div class="cell">
                    <p>Разметка schema.org для главной страницы</p>
                    <ul>
                        <li>Название организации</li>
                        <li>Лого картинка</li>
                        <li>Телефон</li>
                        <li>Адрес</li>
                        <li>Укр</li>
                    </ul>
                </div>
                <div class="cell">
                    <p>Разметка schema.org для категорий</p>
                    <ul>
                        <li>Хлебные крошки</li>
                        <li>Название категории</li>
                        <li>Описание категории</li>
                        <li>Количество товаров</li>
                        <li>Минимальная-Максимальная цена товаров</li>
                    </ul>
                </div>
                <div class="cell">
                    <p>Разметка schema.org для товаров</p>
                    <ul>
                        <li>Хлебные крошки</li>
                        <li>Название товара</li>
                        <li>Картинка</li>
                        <li>Цена + Валюта</li>
                        <li>Бренд</li>
                        <li>Описание</li>
                        <li>Наличие</li>
                    </ul>
                </div>
                <div class="cell">
                    <p>Разметка schema.org для страница контактов</p>
                    <ul>
                        <li>Название организации</li>
                        <li>Лого картинка</li>
                        <li>Телефон</li>
                        <li>Адрес</li>
                        <li>Укр</li>
                    </ul>
                </div>
                <div class="cell">
                    <p>Без предоставления макетов мобильной версии сайта - верстается на усмотрение верстальщика с соблюдением общего стиля сайта и общих требований к виду </p>
                </div>
                <div class="cell">
                    <p>Страницы и попапы не имеющие макета верстаются на усмотрение верстальщика с соблюдением общего стиля сайта </p>
                </div>
                <div class="cell">
                    <p>"Тут правее, тут левее" - опционально почасовая </p>
                </div>
            </div>
        </div>
    </section>
    <section class="page_feedback" id="sendmail">
        <div class="wrapper">
            <h2 class="page_title">Напишите нам</h2>
            <div class="divider"></div>
            <p>Пожалуйста, оставьте ваше сообщение. Мы свяжемся с вами в ближайшее время.</p>
            <form class="container form" method="POST" action="mail.php" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Ваше имя" required="required">
                <input type="email" name="email" placeholder="Email" required="required">
                <input type="text" name="theme" placeholder="Тема" required="required">
                <textarea name="message" rows="6" placeholder="Ваше сообщение" required="required"></textarea>
                <button class="btn" type="submit">Отправить</button>
            </form>
        </div>
    </section>
