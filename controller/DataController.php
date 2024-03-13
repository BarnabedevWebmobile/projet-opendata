<?php

    require 'model/DataManager.php';

    class DataController{
        function getthedata(){

            $data = new DataManager();
            $takedata = $data->getdata();

            require'view/dataView.php';
        }

    }