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
     * @ORM\Column(name="Durée", type="integer")
     */
    private $durée;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;

    /**
     * @var int
     *
     * @ORM\Column(name="rangeLevel", type="integer")
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
     * Set durée
     *
     * @param integer $durée
     *
     * @return Niveau
     */
    public function setDurée($durée)
    {
        $this->durée = $durée;

        return $this;
    }

    /**
     * Get durée
     *
     * @return int
     */
    public function getDurée()
    {
        return $this->durée;
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
     * @param integer $rangeLevel
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
     * @return int
     */
    public function getRangeLevel()
    {
        return $this->rangeLevel;
    }

    /**
     *@ORM\ManyToOne(targetEntity="Questions")
     * @ORM\JoinColumn(name="questions_id", referencedColumnName="id")
     */

    private $question;

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setMembre($question)
    {
        $this->question = $question;
    }
}

