<?php

    class KnowledgeController extends Controller
    {
        function __construct()
        {
            $this->view = new View;
            $this->model = new KnowledgeModel;
        }

        function Main()
        {
            global $knowledgeData;
            
            $knowledgeData = $this->model->getKnowledge();
            $this->view->generate('Knowledge.php', 'TempView.php', $knowledgeData);
        }

        function Sub($numpage)
        {
            global $knowledgeData, $numPage;

            $knowledgeData = $this->model->getKnowledge($numPage);
            $this->view->generateSub('SubKnowledge.php', 'TempView.php', $knowledgeData);
        }
    }

?>