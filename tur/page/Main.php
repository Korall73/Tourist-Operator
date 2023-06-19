<div class="header-main">
    <p class="h1 bold">Путешествуйте без забот по России: с нами вы точно не пропустите ни одного интересного места!</p>
    <p class="txt bold">Откройте Россию с новой стороны: увлекательные маршруты и уникальные впечатления ждут вас!</p>
    <button class="header-btn bold" onclick="myModal()">Заказать тур &rarr;</button>
</div>
<div class="wrapper-cart">
    <div class="cart">
        <img src="/static/img/tours.png" alt="cart">
        <div class="text-cart">
            <p class="bold">Большой выбор туров!</p>
            <p>Города, походы, горные хребты.</p>
        </div>
    </div>
    <div class="cart">
        <img src="/static/img/price.png" alt="cart">
        <div class="text-cart">
            <p class="bold">Доступные цены!</p>
            <p>Выгодные цены на все туры и маршруты.</p>
        </div>
    </div>
    <div class="cart">
        <img src="/static/img/sale.png" alt="cart">
        <div class="text-cart">
            <p class="bold">Скидки клиентам!</p>
            <p>Скидка 10% постоянным клиентам, а также корпоративным клиентам.</p>
        </div>
    </div>
    <div class="cart">
        <img src="/static/img/support.png" alt="cart">
        <div class="text-cart">
            <p class="bold">Поддержка клиентов!</p>
            <p>Онлайн оформление туров. Поддержка в путешествии.</p>
        </div>
    </div>
    <div class="cart">
        <img src="/static/img/free.png" alt="cart">
        <div class="text-cart">
            <p class="bold">Бесплатная "База знаний"</p>
            <p>Изучите интересные места на основе опыта других путешественников.</p>
        </div>
    </div>
</div>
<div class="wrapper-aviasales">
<script src="https://tp.media/content?trs=238397&shmarker=446794&show_hotels=false&powered_by=true&locale=ru&currency=rub&searchUrl=www.aviasales.ru%2Fsearch&color_button=%23FF6400ff&color_icons=%23FF6400ff&dark=%23262626&light=%23FFFFFF&secondary=%23FFFFFF&special=%23000000ff&color_focused=%23FF6400FF&border_radius=12&no_labels=&plain=true&promo_id=7879&campaign_id=100" charset="utf-8"></script>
</div>
<div class="wrapper-application">
    <form method="post" action="/form">
        <p class="bold h1">Мы поможем подобрать тур</p>
        <input type="text" name="fname" placeholder="Имя*" required>
        <input type="tel" name="tel" placeholder="Контактный комер телефона*" required>
        <input type="text" name="message" placeholder="Сообщение">
        <input type="checkbox" id="policy" name="policy" value="1" required>
        <label for="policy">Я ознакомился с условиями  Пользовательского соглашения и Политики конфиденциальности и выражаю свое согласие на обработку переданных мной персональных данных</label>
        <input type="submit" value="Отправить">
    </form>
</div>
<div class="wrapper-feedback">
    <p class="h1 bold">Отзывы</p>
    <div class="gallery">
        <div class="slides">
            <div class="user-feedback">
                <img src="/static/img/ekaterina.jpeg" alt="ekaterina">
                <p class="txt italic bold">Екатерина</p>
            </div>
            <p class="txt">
                "Я очень довольна работой этого туроператора! 
                Они помогли мне организовать незабываемый отпуск, подобрав лучшие туры и отели по моим предпочтениям. 
                Все было организовано очень ответственно и профессионально. Рекомендую!"
            </p>
        </div>
        <div class="slides">
            <div class="user-feedback">
                <img src="/static/img/michail.jpg" alt="mikhail">
                <p class="txt italic bold">Михаил</p>
            </div>
            <p class="txt">
                "Как часто бывает, что туроператор обещает одно, а в итоге получается совсем не так. 
                Но этот туроператор - исключение из правил! Я остался под впечатлением от их уровня сервиса и внимания к деталям. 
                Все было организовано до мелочей, а команда туроператора была всегда на связи".
            </p>
        </div>
        <div class="slides">
            <div class="user-feedback">
                <img src="/static/img/olga.jpg" alt="olga">
                <p class="txt italic bold">Ольга</p>
            </div>
            <p class="txt">
                "Прекрасный туроператор! Они помогли мне и моим друзьям организовать 
                незабываемый отпуск, позволив нам полностью расслабиться и насладиться путешествием. 
                Я очень благодарна за их профессионализм и заботу о каждом клиенте".
            </p>
        </div>
        <div class="slides">
            <div class="user-feedback">
                <img src="/static/img/dmitry.jpg" alt="dmitry">
                <p class="txt italic bold">Дмитрий</p>
            </div>
            <p class="txt">
                "Мы купили у этого туроператора путешествие в Крым, и это было самое лучшее, что мы могли себе представить! 
                Они подобрали нам идеальный отель на прекрасном пляже, организовали множество развлечений и экскурсий. 
                Этот туроператор точно знает, как сделать путешествие незабываемым!"
            </p>
        </div>
    </div>
</div>
<div class="wrapper-contacts">
    <p class="h1 bold">Контакты</p>
    <div class="contacts">
        <p class="txt">Телефон: <a href="tel:+79998886655">+79998886655</a></p>
        <p class="txt">Электронная почта: <a href="mailto:example@mail.ru">example@mail.ru</a></p>
    </div>
    <div class="socpublic">
        <img class="img-telegram" src="/static/img/telegram.png" alt="telegram">
        <img class="img-whatsapp" src="/static/img/whatsapp.png" alt="whatsapp">
    </div>
</div>
<div class="wrapper-modal" id="wrapper-modal">
    <div class="modal-window" aria-modal="true">
        <form method="post" action="/form">
            <img src="/static/img/close.png " alt="close" class="close-modal" onclick="closeMyModal()">
            <p class="bold h1">Мы поможем подобрать тур</p>
            <input type="text" name="fname" placeholder="Имя*" required>
            <input type="tel" name="tel" placeholder="Контактный комер телефона*" required>
            <input type="text" name="message" placeholder="Сообщение">
            <input type="checkbox" id="policy" name="policy" value="1" required>
            <label for="policy">Я ознакомился с условиями  Пользовательского соглашения и Политики конфиденциальности и выражаю свое согласие на обработку переданных мной персональных данных</label>
            <input type="submit" value="Отправить">
        </form>
    </div>
</div>