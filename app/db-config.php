<?php
const DB_DSN = 'mysql:host=db;dbname=test;charset=utf8'; // Ajout de charset=utf8 pour éviter les problèmes d'encodage
const DB_USER = "test";
const DB_PASS = "test";

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gérer les erreurs en tant qu'exception
    PDO::ATTR_EMULATE_PREPARES => false // Désactiver l'émulation des requêtes préparées
);

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS, $options);
    echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

