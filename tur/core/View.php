<?php

    class View
    {
        function generate($mainView, $tempView, array $data = null)
        {
            include_once './tur/page/' . $tempView;
        }

        function generateSub($mainView, $tempView, array $data, array $meteo = null, array $hotel = null)
        {
            include_once './tur/page/' . $tempView;
        }
    }

?>