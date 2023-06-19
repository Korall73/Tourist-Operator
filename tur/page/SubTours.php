<div class="wrapper-subtours">
    <?php
    
        global $toursData, $meteoData, $hotelData;

        if($meteoData['daily']['weathercode'][0] == 0)
        {
            $weather = 'Ясно';
        }else if($meteoData['daily']['weathercode'][0] == 1)
        {
            $weather = 'В основном ясно';
        }else if($meteoData['daily']['weathercode'][0] == 2)
        {
            $weather = 'Переменная облачность';
        }else if(
            $meteoData['daily']['weathercode'][0] == 3 || $meteoData['daily']['weathercode'][0] == 45 || $meteoData['daily']['weathercode'][0] == 48 || 
            $meteoData['daily']['weathercode'][0] == 51 || $meteoData['daily']['weathercode'][0] == 53 || $meteoData['daily']['weathercode'][0] == 55
        )
        {
            $weather = 'Пасмурно';
        }else if(
            $meteoData['daily']['weathercode'][0] == 56 || $meteoData['daily']['weathercode'][0] == 57 || $meteoData['daily']['weathercode'][0] == 61 || 
            $meteoData['daily']['weathercode'][0] == 63 || $meteoData['daily']['weathercode'][0] == 65 || $meteoData['daily']['weathercode'][0] == 66 || 
            $meteoData['daily']['weathercode'][0] == 67 || $meteoData['daily']['weathercode'][0] == 80 || $meteoData['daily']['weathercode'][0] == 81 || 
            $meteoData['daily']['weathercode'][0] == 82
        )
        {
            $weather = 'Дождь';
        }else if(
            $meteoData['daily']['weathercode'][0] == 71 || $meteoData['daily']['weathercode'][0] == 73 || $meteoData['daily']['weathercode'][0] == 75 || 
            $meteoData['daily']['weathercode'][0] == 77)
        {
            $weather = 'Снег';
        }else{
            $weather = 'Погода неизвестна';
        };

        $tempMax = $meteoData['daily']['temperature_2m_max'][0];
        $tempMin = $meteoData['daily']['temperature_2m_min'][0];
        $sunrise = strstr($meteoData['daily']['sunrise'][0], 'T', false);
        $sunset = strstr($meteoData['daily']['sunset'][0], 'T', false);

        if(is_array($toursData) || is_object($toursData))
        {
            foreach($toursData as $row)
            {
                echo
                (
                    '<div class="header-subtours" style="background-image: url(/static/img/city/' . $row['img_city'] . ');">
                        <p class="h1 bold city-txt">' . $row['city'] . '</p>
                        <div class="wrapper-weather">
                            <p class="txt bold">Погода сегодня:</p>
                            <p class="txt">' . $weather . '</p>
                            <p class="txt">Макс. столбик термометра: ' . $tempMax . '</p>
                            <p class="txt">Мин. столбик термометра: ' . $tempMin . '</p>
                            <p class="txt">Рассвет: ' . $sunrise . '</p>
                            <p class="txt">Закат: ' . $sunset . '</p>
                        </div>
                        <button class="header-btn bold" onclick="myModal()">Заказать тур &rarr;</button>
                    </div>
                    <div class="main-subtours">
                        <p class="txt">' . $row['description'] . '</p>
                        <p class="h1 bold">Ближайшие отели</p>
                        <div class="wrapper-hotel">'
                );
            }
            unset($row);
        }

        if(!empty($hotelData) || !isset($hotelData))
        {
            $row[] = $hotelData['results']['hotels'];
            
            for($i = 0; $i < 4; $i++)
            {
                echo
                (
                    '<p class="txt hotel">' . $row[0][$i]['name'] . '</p>'
                );
            }
        }

    ?>
</div>
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