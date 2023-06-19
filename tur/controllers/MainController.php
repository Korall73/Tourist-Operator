<?php

    class MainController extends Controller
    {
        function Main()
        {
            $this->view->generate('Main.php', 'TempView.php');
        }
    }

?>