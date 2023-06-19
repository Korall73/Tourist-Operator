<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/static/img/favicon.png" type="image/x-icon">
    <title>Пепелац: Русские виражи</title>
</head>
<body>
    <nav class="wrapper-navbar">
        <a href="/"><img src="/static/img/logo-black.png" alt="logo-black"></a>
        <ul>
            <a href="/"><li>Главная</li></a>
            <a href="/tours"><li>Туры</li></a>
            <a href="/about"><li>О нас</li></a>
        </ul>
    </nav>
    <main class="wrapper-main">
        <?php include_once './tur/page/' . $mainView; ?>
    </main>
    <footer class="wrapper-footer">
        <div class="footer">
            <a href="/"><img src="/static/img/logo-white.png" alt="logo-white"></a>
            <ul>
                <a href="/tours"><li>Туры</li></a>
                <a href="/about"><li>О нас</li></a>
            </ul>
        </div>
        <p class="copyright">Copyright &copy; "Пепелац: Русские виражи" 2023</p>
    </footer>
    <style>
        <?php
        
            include_once './static/css/TempView.css';
            $mainCSS = strstr($mainView, '.php', true);
            $mainCSS .= '.css';
            include_once './static/css/' . $mainCSS;
        
        ?>
    </style>
    <script>
        <?php
    
            $mainJS = strstr($mainView, '.php', true);
            $mainJS .= '.js';
            $pathMainJS = './static/js/' . $mainJS;
            if(file_exists($pathMainJS))
            {
                include_once './static/js/' . $mainJS;
            }

        ?>
    </script>
</body>
</html>