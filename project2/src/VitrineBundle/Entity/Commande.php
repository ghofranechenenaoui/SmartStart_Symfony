<?php

namespace VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="VitrineBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommande;



    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="produit_id",referencedColumnName="idProduit")
     */
    private $produit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="datetime")
     */
    private $dateCommande;

    /**
     * @var bool
     *
     * @ORM\Column(name="paiment", type="boolean")
     */
    private $paiment;

    /**
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }





    /**
     * Set produit
     *
     * @param integer $produit
     *
     * @return Commande
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return int
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set paiment
     *
     * @param boolean $paiment
     *
     * @return Commande
     */
    public function setPaiment($paiment)
    {
        $this->paiment = $paiment;

        return $this;
    }

    /**
     * Get paiment
     *
     * @return bool
     */
    public function getPaiment()
    {
        return $this->paiment;
    }
}

