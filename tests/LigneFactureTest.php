<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 2019-01-11
 * Time: 11:26
 */

namespace Tests;

use App\LigneFacture;
use PHPUnit\Framework\TestCase;

class LigneFactureTest extends TestCase
{
    public function testIsSetValue() {
        $ligneFacture = new LigneFacture("Coucou", 34);
        $ligneFacture->setValeur(7);
        $this->assertEquals(7, $ligneFacture->getValeur());
    }
}