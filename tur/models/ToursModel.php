<?php

    class ToursModel extends Model
    {

        function getTours($numPage = null)
        {
            global $numPage;
            
            if(!empty($numPage))
            {
                $result = $this->mysqli->query("SELECT * FROM `tours_page` WHERE `id` = '$numPage'");

                while($row = $result->fetch_array())
                {
                    $data[] = $row;
                }
            }else{
                $result = $this->mysqli->query("SELECT * FROM `tours_page`");

                while($row = $result->fetch_array())
                {
                    $data[] = $row;
                }
            }
            return $data;
        }
    }

?>