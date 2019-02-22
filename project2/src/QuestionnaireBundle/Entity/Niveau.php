<?php

namespace QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="niveau")
 * @ORM\Entity(repositoryClass="QuestionnaireBundle\Repository\NiveauRepository")
 */
class Niveau
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
     * @ORM\Column(name="temps", type="integer")
     */
    private $temps;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="rangeLevel", type="string", length=255)
     */
    private $rangeLevel;


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
     * Set temps
     *
     * @param integer $temps
     *
     * @return Niveau
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return int
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return Niveau
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set rangeLevel
     *
     * @param string $rangeLevel
     *
     * @return Niveau
     */
    public function setRangeLevel($rangeLevel)
    {
        $this->rangeLevel = $rangeLevel;

        return $this;
    }

    /**
     * Get rangeLevel
     *
     * @return string
     */
    public function getRangeLevel()
    {
        return $this->rangeLevel;
    }


    /**
     *@ORM\ManyToOne(targetEntity="Evaluation")
     * @ORM\JoinColumn(name="NameEvaluation_id", referencedColumnName="id")
     */

    private $evaluation;

    /**
     * @return mixed
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param mixed $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationNiveau", type="datetime")
     */
    protected $dateCreationNiveau;


    /**
     * @return \DateTime
     */
    public function getDateCreationNiveau()
    {
        return $this->dateCreationNiveau;
    }

    /**
     * @param \DateTime $dateCreationNiveau
     * @return Niveau
     */
    public function setDateCreationNiveau(\DateTime $dateCreationNiveau)
    {
        $this->dateCreationNiveau = $dateCreationNiveau;
        return $this;
    }




}

