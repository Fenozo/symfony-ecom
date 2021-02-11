<?php

namespace Acme\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prix
 *
 * @ORM\Table(name="prix")
 * @ORM\Entity(repositoryClass="Acme\EcommerceBundle\Repository\PrixRepository")
 */
class Prix
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_unitaire", type="float", nullable=true)
     */
    private $prixUnitaire;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_htt", type="float", nullable=true)
     */
    private $prixHtt;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ttc", type="float", nullable=true)
     */
    private $prixTtc;

    /**
     * @var int
     *
     * @ORM\Column(name="fournisseur_id", type="integer", nullable=true)
     */
    private $fournisseurId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     *
     * @return Prix
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set prixHtt
     *
     * @param float $prixHtt
     *
     * @return Prix
     */
    public function setPrixHtt($prixHtt)
    {
        $this->prixHtt = $prixHtt;

        return $this;
    }

    /**
     * Get prixHtt
     *
     * @return float
     */
    public function getPrixHtt()
    {
        return $this->prixHtt;
    }

    /**
     * Set prixTtc
     *
     * @param float $prixTtc
     *
     * @return Prix
     */
    public function setPrixTtc($prixTtc)
    {
        $this->prixTtc = $prixTtc;

        return $this;
    }

    /**
     * Get prixTtc
     *
     * @return float
     */
    public function getPrixTtc()
    {
        return $this->prixTtc;
    }

    /**
     * Set fournisseurId
     *
     * @param integer $fournisseurId
     *
     * @return Prix
     */
    public function setFournisseurId($fournisseurId)
    {
        $this->fournisseurId = $fournisseurId;

        return $this;
    }

    /**
     * Get fournisseurId
     *
     * @return int
     */
    public function getFournisseurId()
    {
        return $this->fournisseurId;
    }
}

