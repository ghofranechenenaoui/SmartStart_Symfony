<?php

namespace GestioProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * conditature
 *
 * @ORM\Table(name="conditature")
 * @ORM\Entity(repositoryClass="GestioProjetBundle\Repository\conditatureRepository")
 */
class conditature
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
     * @var int
     *
     * @ORM\Column(name="etat_conditature", type="integer", nullable=true)
     */
    private $etatConditature;

    /**
     * @var bool
     *
     * @ORM\Column(name="livraison_conditature", type="boolean", nullable=true)
     */
    private $livraisonConditature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison_conditature", type="date", nullable=true)
     */
    private $dateLivraisonConditature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_acceptation_conditature", type="date", nullable=true)
     */
    private $dateAcceptationConditature;

    /**
     * @var string
     *
     * @ORM\Column(name="contract_conditature", type="string", length=255, nullable=true)
     */
    private $contractConditature;

    /**
     * @ORM\ManyToOne(targetEntity="ProjetP")
     * @ORM\JoinColumn(name="id_projetP", referencedColumnName="id")
     */
    private $projetP;
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
     * Set etatConditature
     *
     * @param integer $etatConditature
     *
     * @return conditature
     */
    public function setEtatConditature($etatConditature)
    {
        $this->etatConditature = $etatConditature;

        return $this;
    }

    /**
     * Get etatConditature
     *
     * @return int
     */
    public function getEtatConditature()
    {
        return $this->etatConditature;
    }

    /**
     * Set livraisonConditature
     *
     * @param boolean $livraisonConditature
     *
     * @return conditature
     */
    public function setLivraisonConditature($livraisonConditature)
    {
        $this->livraisonConditature = $livraisonConditature;

        return $this;
    }

    /**
     * Get livraisonConditature
     *
     * @return bool
     */
    public function getLivraisonConditature()
    {
        return $this->livraisonConditature;
    }

    /**
     * Set dateLivraisonConditature
     *
     * @param \DateTime $dateLivraisonConditature
     *
     * @return conditature
     */
    public function setDateLivraisonConditature($dateLivraisonConditature)
    {
        $this->dateLivraisonConditature = $dateLivraisonConditature;

        return $this;
    }

    /**
     * Get dateLivraisonConditature
     *
     * @return \DateTime
     */
    public function getDateLivraisonConditature()
    {
        return $this->dateLivraisonConditature;
    }

    /**
     * Set dateAcceptationConditature
     *
     * @param \DateTime $dateAcceptationConditature
     *
     * @return conditature
     */
    public function setDateAcceptationConditature($dateAcceptationConditature)
    {
        $this->dateAcceptationConditature = $dateAcceptationConditature;

        return $this;
    }

    /**
     * Get dateAcceptationConditature
     *
     * @return \DateTime
     */
    public function getDateAcceptationConditature()
    {
        return $this->dateAcceptationConditature;
    }

    /**
     * Set contractConditature
     *
     * @param string $contractConditature
     *
     * @return conditature
     */
    public function setContractConditature($contractConditature)
    {
        $this->contractConditature = $contractConditature;

        return $this;
    }

    /**
     * Get contractConditature
     *
     * @return string
     */
    public function getContractConditature()
    {
        return $this->contractConditature;
    }/**
 * @return mixed
 */
public function getProjetP()
{
    return $this->projetP;
}/**
 * @param mixed $projetP
 */
public function setProjeP($projetP)
{
    $this->projetP = $projetP;
}

}

