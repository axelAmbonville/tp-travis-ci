<?php
require_once 'vendor/autoload.php';

use App\LigneFacture;
use App\Facture;

$ligne1 = new LigneFacture("Coucou", 2);
$ligne2 = new LigneFacture("Coucou", 6);
$facture = new Facture();
$facture->addLigneFacturation($ligne1);
$facture->addLigneFacturation($ligne2);

echo $facture->getTotalFactureTVA(1.20);

