<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 2019-01-11
 * Time: 10:40
 */

namespace App;


class LigneFacture
{
    private $description;

    private $valeur;

    /**
     * LigneFacture constructor.
     * @param $description
     * @param $valeur
     */
    public function __construct($description, $valeur)
    {
        $this->description = $description;
        $this->valeur = $valeur;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param mixed $valeur
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;
    }


}