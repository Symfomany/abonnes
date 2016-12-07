<?php

/**
 * Fichier d'entré de Composer
 * Chargeant toutes les dependances
 * de vos classe depuis src/
 * ET
 * les dependances externes
 */
include "vendor/autoload.php";

use App\Abonne;

$abonne = new Abonne(
    "julien@meetserious",
     123456,
    "img/j.jpg"
);

$abonneTwo = new Abonne(
    "florent@meetserious",
    456789,
    "img/j.jpg"
);
// appartient à Var_Dumper
dump($abonne, $abonneTwo);







/**
 * Ajouter à la classe Book un chemin d'accès relatif vers une image qui sera stocké physiquement dans un dossier img/
 */

/**
 *
 * Utilisé la librairie Finder (composant symfony) pour lister toutes les images de livres contenu dans le dossier /img
http://symfony.com/doc/current/components/finder.html

 */

/**

 * Utilisé la librarie Carbon pour dire il y a combien de temps Un Livre a été crée
http://carbon.nesbot.com/docs/


 * Utilisé la librairie DomPDF pour exporter le titre, le resume et autres détail dans un PDF
https://github.com/dompdf/dompdf


 * Installer la librarie Woops qui permet d'avoir un debugeur sur les FATAL ou Warnins de PHP
https://github.com/filp/whoops

 * Installer la librarie Intervention
qui permet de manipuler les images

+ Intervention: http://image.intervention.io/

+ Créer une méthode qui permet de redimentionner l'image
à partir de s largeur et hauteur

+ Créer une méthode qui permet de cérer autoamtiquemet
une miniature qui conserve les proportions (Largeur et Hauteur) de l'image

+ Créer une méthode qui permet transformer l'image
en noir et blanc

 * Instaler la librarie Capcha
Capcha: https://github.com/Gregwar/Captcha

+ Créer une méthode qui met le titre du livre
dans un capcha

+ Ajouter à la classe Humain la logitude et latitude
et à l'aide de la classe Geocoder pour pouvoir géolocaliser l'humain
au niveau de sa ville, région.

+ CRéer un mot de passe pour l'humain et le crypter
avec la library phppass

http://rchouinard.github.io/phpass/

+ Utilisé la librarie PHPExcel pour exporter sous fichier excel 5
livres
https://github.com/PHPOffice/PHPExcel
 */

*/















