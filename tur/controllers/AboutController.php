<?php

    class AboutController extends Controller
    {
        function Main()
        {
            $this->view->generate('About.php', 'TempView.php');
        }
    }

?>