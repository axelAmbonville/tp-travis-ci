<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 2019-01-11
 * Time: 11:40
 */

namespace Tests;


use App\Facture;
use PHPUnit\Framework\TestCase;
use App\LigneFacture;

class FactureTest extends TestCase
{
   public function testFactureIsEmpty() {
       $facture = new Facture();
       $ligne1 = new LigneFacture("Coucou", 5);
       $facture->addLigneFacturation($ligne1);
       $ligne2 = new LigneFacture("Coucou", 65);
       $facture->addLigneFacturation($ligne2);
       $this->assertEmpty($facture->getLignesFacture());
   }

}