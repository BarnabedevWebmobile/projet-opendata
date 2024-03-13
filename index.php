<?php

    require ('controller/DataController.php');

    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'data':
                $datas = new DataController();
                $showdata = $datas->getthedata();
            break;
            case 'graph':
                require 'view/graphView.php';
            break;
            case 'alt':
                $graph = new DataController();
                $showdata = $graph->makegraph();
            break;
        }
    }