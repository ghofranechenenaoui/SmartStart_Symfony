<?php

namespace VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="VitrineBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="createur", type="string", length=255)
     */
    private $createur;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_photo", type="string", length=255)
     */
    private $nomPhoto;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_photo", type="string", length=255)
     */
    private $extensionPhoto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_produit", type="datetime")
     */
    private $dateProduit;

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }




    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createur
     *
     * @param string $createur
     *
     * @return Produit
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return string
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Produit
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Produit
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set nomPhoto
     *
     * @param string $nomPhoto
     *
     * @return Produit
     */
    public function setNomPhoto($nomPhoto)
    {
        $this->nomPhoto = $nomPhoto;

        return $this;
    }

    /**
     * Get nomPhoto
     *
     * @return string
     */
    public function getNomPhoto()
    {
        return $this->nomPhoto;
    }

    /**
     * Set extensionPhoto
     *
     * @param string $extensionPhoto
     *
     * @return Produit
     */
    public function setExtensionPhoto($extensionPhoto)
    {
        $this->extensionPhoto = $extensionPhoto;

        return $this;
    }

    /**
     * Get extensionPhoto
     *
     * @return string
     */
    public function getExtensionPhoto()
    {
        return $this->extensionPhoto;
    }

    /**
     * Set dateProduit
     *
     * @param \DateTime $dateProduit
     *
     * @return Produit
     */
    public function setDateProduit($dateProduit)
    {
        $this->dateProduit = $dateProduit;

        return $this;
    }

    /**
     * Get dateProduit
     *
     * @return \DateTime
     */
    public function getDateProduit()
    {
        return $this->dateProduit;
    }
}

