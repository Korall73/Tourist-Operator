<?php

    class REST_HotelController extends REST_Controller
    {
        public $restGeo;

        function __construct()
        {
            $this->restGeo = new REST_GeoController;
            $this->http = 'http://engine.hotellook.com/api/v2/lookup.json?';
        }

        function getHotel()
        {
            $dataREST = $this->restGeo->getGeo();

            $lat = $dataREST['latitude'];
            $lon = $dataREST['longitude'];
            $coordinates = "$lat,$lon";

            $array = [
                'query' =>  $coordinates,
                'lang' => 'ru',
                'lookFor' => 'hotel'
            ];

            $ch = curl_init($this->http . http_build_query($array));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $data = curl_exec($ch);
            curl_close($ch);

            $data_decode = json_decode($data, true);

            return $data_decode;
        }
    }

?>