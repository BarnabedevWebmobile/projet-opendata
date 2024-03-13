<?php

    require 'model/DataManager.php';

    class DataController{
        function getthedata(){

            $data = new DataManager();
            $takedata = $data->getdata();

            require 'view/dataView.php';
        }
        function makegraph(){

            $data = new DataManager();
            $takedata = $data->graphdata();

            require 'view/graphView.php';
        }
    }