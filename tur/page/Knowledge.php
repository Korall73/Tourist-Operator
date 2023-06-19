<div class="wrapper-knowledge">
    <p class="h1 bold">База знаний</p>
    <div class="wrapper-carts">

    <?php
        global $knowledgeData;
        
        if(is_array($knowledgeData) || is_object($knowledgeData))
        {
            foreach($knowledgeData as $row)
            {
                echo
                (
                    '<div class="cart-knowledge">
                        <img src="/static/img/place/' . $row['img_place'] . '" alt="' . $row['place'] . '" class="cart-img">
                        <p class="cart-place bold">' . $row['place'] . '</p>
                        <div class="link-knowledge">
                            <a href="/knowledge/' . $row['id'] . '"><button class="knowledge-btn">Подробнее</button></a>
                        </div>
                    </div>'
                );
            }
            unset($row);
        }

    ?>
    </div>
</div>