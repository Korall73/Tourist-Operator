<?php

    class ErrorController extends Controller
    {
        function Main()
        {
            $this->view->generate('404.php', 'TempView.php');
        }
    }

?>