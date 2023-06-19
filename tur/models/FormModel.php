<?php

    class FormModel extends Model
    {

        function putOrders($POST)
        {
            date_default_timezone_set('Europe/Ulyanovsk');

            $fname = $POST['fname'];
            $tel = $POST['tel'];
            $message = $POST['message'];
            $policy = $POST['policy'];
            $timeApp = date("Y-m-d H:i:s");

            $result = $this->mysqli->query("INSERT INTO `orders` (`fname`, `phone`, `message`, `data_processing`, `time_app`)
            VALUES ('$fname', '$tel', '$message', $policy, '$timeApp')");

            if($result)
            {
                return true;
            }else{
                return false;
            }
        }
    }

?>