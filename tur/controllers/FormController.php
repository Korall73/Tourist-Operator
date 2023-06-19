<?php

    require_once './phpmailer/send.php';

    class FormController extends Controller
    {
        function __construct()
        {
            $this->view = new View;
            $this->model = new FormModel;
        }

        function Main()
        {
            $result = $this->model->putOrders($_POST);

            if($result)
            {
                $this->view->generate('Form.php', 'TempView.php');
                sendMail::send($_POST);
            }else{
                $controller = new ErrorController();
                $action = 'Main';
                $controller->$action();
            }
        }
    }

?>