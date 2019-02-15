<?php

namespace GestioProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * documentation
 *
 * @ORM\Table(name="documentation")
 * @ORM\Entity(repositoryClass="GestioProjetBundle\Repository\documentationRepository")
 */
class documentation
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
     * @ORM\Column(name="nom_documentation", type="string", length=255)
     */
    private $nomDocumentation;

    /**
     * @var string
     *
     * @ORM\Column(name="extension_documentation", type="string", length=5)
     */
    private $extensionDocumentation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_documentation", type="date")
     */
    private $dateDocumentation;
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
     * Set nomDocumentation
     *
     * @param string $nomDocumentation
     *
     * @return documentation
     */
    public function setNomDocumentation($nomDocumentation)
    {
        $this->nomDocumentation = $nomDocumentation;

        return $this;
    }

    /**
     * Get nomDocumentation
     *
     * @return string
     */
    public function getNomDocumentation()
    {
        return $this->nomDocumentation;
    }

    /**
     * Set extensionDocumentation
     *
     * @param string $extensionDocumentation
     *
     * @return documentation
     */
    public function setExtensionDocumentation($extensionDocumentation)
    {
        $this->extensionDocumentation = $extensionDocumentation;

        return $this;
    }

    /**
     * Get extensionDocumentation
     *
     * @return string
     */
    public function getExtensionDocumentation()
    {
        return $this->extensionDocumentation;
    }

    /**
     * Set dateDocumentation
     *
     * @param \DateTime $dateDocumentation
     *
     * @return documentation
     */
    public function setDateDocumentation($dateDocumentation)
    {
        $this->dateDocumentation = $dateDocumentation;

        return $this;
    }

    /**
     * Get dateDocumentation
     *
     * @return \DateTime
     */
    public function getDateDocumentation()
    {
        return $this->dateDocumentation;
    }

    /**
     * @return mixed
     */
    public function getProjetP()
    {
        return $this->projetP;
    }

    /**
     * @param mixed $projetP
     */
    public function setProjetP($projetP)
    {
        $this->projetP = $projetP;
    }

}

