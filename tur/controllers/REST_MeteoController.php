<?php

    class REST_MeteoController extends REST_Controller
    {
        public $restGeo;

        function __construct()
        {
            $this->restGeo = new REST_GeoController;
            $this->http = 'https://api.open-meteo.com/v1/forecast?';
        }

        function getMeteo()
        {
            $dataREST = $this->restGeo->getGeo();

            $array = [
                'latitude' => $dataREST['latitude'],
                'longitude' => $dataREST['longitude'],
                'daily' => 'weathercode,temperature_2m_max,temperature_2m_min,sunrise,sunset',
                'forecast_days' => 1,
                'timezone' => 'auto'
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