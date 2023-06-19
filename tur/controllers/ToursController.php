<?php

    class ToursController extends Controller
    {
        public $meteo;
        public $hotel;

        function __construct()
        {
            $this->view = new View;
            $this->model = new ToursModel;
        }

        function Main()
        {
            global $toursData;
            
            $toursData = $this->model->getTours();
            $this->view->generate('Tours.php', 'TempView.php', $toursData);
        }

        function Sub($numPage)
        {
            global $toursData, $numPage, $meteoData, $hotelData;

            $this->meteo = new REST_MeteoController;
            $meteoData = $this->meteo->getMeteo();

            $this->hotel = new REST_HotelController;
            $hotelData = $this->hotel->getHotel();

            $toursData = $this->model->getTours($numPage);
            $this->view->generateSub('SubTours.php', 'TempView.php', $toursData, $meteoData, $hotelData);

        }
    }

?>