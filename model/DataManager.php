<?php

    require 'model/Manager.php';

class DataManager extends Manager{
    // function making sql request via PDO
    public function getdata(){

        $db = $this->connexion();
    
        // sql request
        $request = $db->query('SELECT * FROM bilan_electrique_transpose');

        // request result
        return $request;
    }
}