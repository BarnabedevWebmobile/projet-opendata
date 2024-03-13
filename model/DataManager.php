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
    public function graphdata(){
        $db = $this->connexion();

        $request = $db->query('SELECT year(`Jour`) AS "annee", ROUND(SUM(`Puissance moyenne journalière (W)`)/1000000000,2) as "kw", "PROD" FROM `bilan_electrique_transpose` WHERE `Catégorie client` LIKE "%production%" GROUP BY YEAR(`Jour`)
        UNION
        SELECT year(`Jour`), ROUND(SUM(`Puissance moyenne journalière (W)`)/1000000000,2), "CONSO" FROM `bilan_electrique_transpose` WHERE `Catégorie client` LIKE "%consommation%" GROUP BY YEAR(`Jour`);');
    
        return $request;
    }
}