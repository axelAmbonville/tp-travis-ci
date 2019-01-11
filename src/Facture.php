<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 2019-01-11
 * Time: 10:45
 */

namespace App;


class Facture
{
    private $lignesFacture = [];

    public function __construct($lignesFacture = [])
    {
        $this->lignesFacture = $lignesFacture;
    }


    function addLigneFacturation(LigneFacture $facturation) {
        $this->lignesFacture[] = $facturation;
    }

    function getTotalFacture() {
        $total = 0;
        foreach($this->lignesFacture as $ligne) {
            $total += $ligne->getValeur();
        }
        return $total;
    }

    function getTotalFactureTVA($tva) {
        return $this->getTotalFacture() * $tva;
    }

    /**
     * @return array
     */
    public function getLignesFacture()
    {
        return $this->lignesFacture;
    }

    /**
     * @param array $lignesFacture
     */
    public function setLignesFacture($lignesFacture)
    {
        $this->lignesFacture = $lignesFacture;
    }


}

