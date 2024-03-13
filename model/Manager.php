<?php 

class Manager{

    protected function connexion(){
        // PDO reqest
        try {
            $db = new PDO('mysql:host=localhost;dbname=consommation-journalière-par-catégorie-client;charset=utf8', 'root', '');
            return $db;
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
}