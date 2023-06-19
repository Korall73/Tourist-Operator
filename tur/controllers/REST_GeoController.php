<?php

    class REST_GeoController extends REST_Controller
    {
        function __construct()
        {
            $this->model = new ToursModel;
            $this->http = 'http://htmlweb.ru/geo/api.php?json&';
            $this->key = 'Your Token';
        }

        function getGeo()
        {
            global $numPage;

            $data = $this->model->getTours($numPage);
            
            foreach($data as $row)
            {
                $array = [
                    'city_name' => $row['city'],
                    'api_key' => $this->key
                ];
            }

            $ch = curl_init($this->http . http_build_query($array));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $data = curl_exec($ch);
            curl_close($ch);

            $data_decode = json_decode($data, true);

            $coordinates = [
                'latitude' => $data_decode[0]['latitude'],
                'longitude' => $data_decode[0]['longitude']
            ];

            return $coordinates;
        }
    }

?>