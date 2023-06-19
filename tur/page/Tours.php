<div class="wrapper-tours">
    <p class="h1 bold">Туры</p>
    <div class="wrapper-carts">

    <?php
        global $toursData;
        
        if(is_array($toursData) || is_object($toursData))
        {
            foreach($toursData as $row)
            {
                echo
                (
                    '<div class="cart-tours">
                        <img src="/static/img/city/' . $row['img_city'] . '" alt="' . $row['city'] . '" class="cart-img">
                        <p class="cart-city bold">' . $row['city'] . '</p>
                        <div class="link-city">
                            <a href="/tours/' . $row['id'] . '"><button class="tours-btn">Подробнее</button></a>
                            <p class="price-cart bold">От ' . $row['price'] . ' руб.</p>
                        </div>
                    </div>'
                );
            }
            unset($row);
        }

    ?>
    </div>
</div>