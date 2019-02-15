<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="employeur", type="string", length=255)
     */
    private $employeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode", type="date")
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="naturemission", type="string", length=255)
     */
    private $naturemission;


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
     * Set employeur
     *
     * @param string $employeur
     *
     * @return Experience
     */
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * Get employeur
     *
     * @return string
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * Set periode
     *
     * @param \DateTime $periode
     *
     * @return Experience
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \DateTime
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set naturemission
     *
     * @param string $naturemission
     *
     * @return Experience
     */
    public function setNaturemission($naturemission)
    {
        $this->naturemission = $naturemission;

        return $this;
    }

    /**
     * Get naturemission
     *
     * @return string
     */
    public function getNaturemission()
    {
        return $this->naturemission;
    }
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumn(name="membre_id", referencedColumnName="id")
     */
    private $membre;

    /**
     * @return mixed
     */
    public function getProjet()
    {
        return $this->membre;
    }

    /**
     * @param mixed $membre
     */
    public function setMembre($membre)
    {
        $this->membre = $membre;
    }
}

