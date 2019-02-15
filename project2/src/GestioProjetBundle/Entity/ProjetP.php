<?php

namespace GestioProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetP
 *
 * @ORM\Table(name="projetP")
 * @ORM\Entity(repositoryClass="GestioProjetBundle\Repository\ProjetPRepository")
 */
class ProjetP
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
     * @var string
     *
     * @ORM\Column(name="nom_projet", type="string", length=255)
     */
    private $nomProjet;
    /**
 * @var float
 *
 * @ORM\Column(name="renumeration_projet", type="float")
 */
    private $renumerationProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="description_projet", type="string", length=1000)
     */
    private $descriptionProjet;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_projet", type="integer")
     */
    private $dureeProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine_activite_projet", type="string", length=100)
     */
    private $domaineActiviteProjet;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return ProjetP
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set descriptionProjet
     *
     * @param string $descriptionProjet
     *
     * @return ProjetP
     */
    public function setDescriptionProjet($descriptionProjet)
    {
        $this->descriptionProjet = $descriptionProjet;

        return $this;
    }

    /**
     * Get descriptionProjet
     *
     * @return string
     */
    public function getDescriptionProjet()
    {
        return $this->descriptionProjet;
    }

    /**
     * Set dureeProjet
     *
     * @param integer $dureeProjet
     *
     * @return ProjetP
     */
    public function setDureeProjet($dureeProjet)
    {
        $this->dureeProjet = $dureeProjet;

        return $this;
    }

    /**
     * Get dureeProjet
     *
     * @return int
     */
    public function getDureeProjet()
    {
        return $this->dureeProjet;
    }

    /**
     * Set domaineActiviteProjet
     *
     * @param string $domaineActiviteProjet
     *
     * @return ProjetP
     */
    public function setDomaineActiviteProjet($domaineActiviteProjet)
    {
        $this->domaineActiviteProjet = $domaineActiviteProjet;

        return $this;
    }

    /**
     * Get domaineActiviteProjet
     *
     * @return string
     */
    public function getDomaineActiviteProjet()
    {
        return $this->domaineActiviteProjet;
    }

    /**
     * @return float
     */
    public function getRenumerationProjet()
    {
        return $this->renumerationProjet;
    }

    /**
     * @param float $renumerationProjet
     */
    public function setRenumerationProjet($renumerationProjet)
    {
        $this->renumerationProjet = $renumerationProjet;
    }

}

