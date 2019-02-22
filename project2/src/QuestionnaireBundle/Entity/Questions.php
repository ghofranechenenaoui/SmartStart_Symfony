<?php

namespace QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="Questions")
 * @ORM\Entity(repositoryClass="QuestionnaireBundle\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="rep1", type="string", length=255)
     */
    private $rep1;

    /**
     * @var string
     *
     * @ORM\Column(name="rep2", type="string", length=255)
     */
    private $rep2;

    /**
     * @var string
     *
     * @ORM\Column(name="rep3", type="string", length=255)
     */
    private $rep3;

    /**
     * @var string
     *
     * @ORM\Column(name="rep4", type="string", length=255)
     */
    private $rep4;

    /**
     * @var string
     *
     * @ORM\Column(name="correctReq", type="string", length=255)
     */
    private $correctReq;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set rep1
     *
     * @param string $rep1
     *
     * @return Questions
     */
    public function setRep1($rep1)
    {
        $this->rep1 = $rep1;

        return $this;
    }

    /**
     * Get rep1
     *
     * @return string
     */
    public function getRep1()
    {
        return $this->rep1;
    }

    /**
     * Set rep2
     *
     * @param string $rep2
     *
     * @return Questions
     */
    public function setRep2($rep2)
    {
        $this->rep2 = $rep2;

        return $this;
    }

    /**
     * Get rep2
     *
     * @return string
     */
    public function getRep2()
    {
        return $this->rep2;
    }

    /**
     * Set rep3
     *
     * @param string $rep3
     *
     * @return Questions
     */
    public function setRep3($rep3)
    {
        $this->rep3 = $rep3;

        return $this;
    }

    /**
     * Get rep3
     *
     * @return string
     */
    public function getRep3()
    {
        return $this->rep3;
    }

    /**
     * Set rep4
     *
     * @param string $rep4
     *
     * @return Questions
     */
    public function setRep4($rep4)
    {
        $this->rep4 = $rep4;

        return $this;
    }

    /**
     * Get rep4
     *
     * @return string
     */
    public function getRep4()
    {
        return $this->rep4;
    }

    /**
     * Set correctReq
     *
     * @param string $correctReq
     *
     * @return Questions
     */
    public function setCorrectReq($correctReq)
    {
        $this->correctReq = $correctReq;

        return $this;
    }

    /**
     * Get correctReq
     *
     * @return string
     */
    public function getCorrectReq()
    {
        return $this->correctReq;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Questions
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
     *@ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumn(name="Niveau_id", referencedColumnName="id")
     */

    private $niveau;

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     *@ORM\ManyToOne(targetEntity="CategorieQuiz")
     * @ORM\JoinColumn(name="CategorieQuiz_id", referencedColumnName="id")
     */

    private $categorieQuiz;

    /**
     * @return mixed
     */
    public function getCategorieQuiz()
    {
        return $this->categorieQuiz;
    }

    /**
     * @param mixed $categorieQuiz
     */
    public function setCategorieQuiz($categorieQuiz)
    {
        $this->categorieQuiz = $categorieQuiz;
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
     * @ORM\Column(name="dateCreationQuestion", type="datetime")
     */
    protected $dateCreationQuestion;


    /**
     * @return \DateTime
     */
    public function getDateCreationQuestion()
    {
        return $this->dateCreationQuestion;
    }

    /**
     * @param \DateTime $dateCreationQuestion
     * @return Questions
     */
    public function setDateCreationQuestion(\DateTime $dateCreationQuestion)
    {
        $this->dateCreationQuestion = $dateCreationQuestion;
        return $this;
    }





















}

