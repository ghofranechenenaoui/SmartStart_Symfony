<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\QuestionRepository")
 */
class Question
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_question", type="date")
     */
    private $dateQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="description_question", type="string", length=255)
     */
    private $descriptionQuestion;


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
     * Set dateQuestion
     *
     * @param \DateTime $dateQuestion
     *
     * @return Question
     */
    public function setDateQuestion($dateQuestion)
    {
        $this->dateQuestion = $dateQuestion;

        return $this;
    }

    /**
     * Get dateQuestion
     *
     * @return \DateTime
     */
    public function getDateQuestion()
    {
        return $this->dateQuestion;
    }

    /**
     * Set descriptionQuestion
     *
     * @param string $descriptionQuestion
     *
     * @return Question
     */
    public function setDescriptionQuestion($descriptionQuestion)
    {
        $this->descriptionQuestion = $descriptionQuestion;

        return $this;
    }

    /**
     * Get descriptionQuestion
     *
     * @return string
     */
    public function getDescriptionQuestion()
    {
        return $this->descriptionQuestion;
    }


    /**

     * @ORM\ManyToOne(targetEntity="Reponse")
     * @ORM\JoinColumn(name="Reponse_id", referencedColumnName="id")
     */

    private $reponse;

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse($reponse)
    {
        $this->reponse = $reponse;
    }




}

