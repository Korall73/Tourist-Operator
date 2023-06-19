<div class="wrapper-subknowledge">
    <?php
    
        global $knowledgeData;

        if(is_array($knowledgeData) || is_object($knowledgeData))
        {
            foreach($knowledgeData as $row)
            {
                echo
                (
                    '<div class="header-subknowledge" style="background-image: url(/static/img/place/' . $row['img_place'] . ');">
                        <p class="h1 bold knowledge-txt">' . $row['place'] . '</p>
                        <button class="header-btn bold" onclick="myModal()">Заказать тур &rarr;</button>
                    </div>
                    <div class="main-subknowledge">
                        <p class="txt">' . $row['description'] . '</p>
                    </div>'
                );
            }
            unset($row);
        }
    
    ?>
    
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