<?php

namespace GestioProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="GestioProjetBundle\Repository\proprietaireRepository")
 */
class proprietaire
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
     * @return mixed
     */
    public function getProjetP()
    {
        return $this->projetP;
    }

    /**
     * @param mixed $projet
     */
    public function setProjetP($projeP)
    {
        $this->projetP = $projetP;
    }

}

