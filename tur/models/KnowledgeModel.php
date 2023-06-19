<?php

    class KnowledgeModel extends Model
    {

        function getKnowledge($numPage = null)
        {
            global $numPage;
            
            if(!empty($numPage))
            {
                $result = $this->mysqli->query("SELECT * FROM `knowledge_page` WHERE `id` = '$numPage'");

                while($row = $result->fetch_array())
                {
                    $data[] = $row;
                }
            }else{
                $result = $this->mysqli->query("SELECT * FROM `knowledge_page`");

                while($row = $result->fetch_array())
                {
                    $data[] = $row;
                }
            }
            return $data;
        }
    }

?>