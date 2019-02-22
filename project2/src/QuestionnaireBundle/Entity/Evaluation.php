<?php

namespace QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="QuestionnaireBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Evaluation
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }






    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationEva", type="datetime")
     */
    protected $dateCreationEva;


    /**
     * @return \DateTime
     */
    public function getDateCreationEva()
    {
        return $this->dateCreationEva;
    }

    /**
     * @param \DateTime $dateCreationEva
     * @return Evaluation
     */
    public function setDateCreationEva(\DateTime $dateCreationEva)
    {
        $this->dateCreationEva = $dateCreationEva;
        return $this;
    }



    /**
     *@ORM\ManyToOne(targetEntity="CategorieQuiz")
     * @ORM\JoinColumn(name="Categorie_id", referencedColumnName="id")
     */

    private $CategorieQuiz;

    /**
     * @return mixed
     */
    public function getCategorieQuiz()
    {
        return $this->CategorieQuiz;
    }

    /**
     * @param mixed $CategorieQuiz
     */
    public function setCategorieQuiz($CategorieQuiz)
    {
        $this->CategorieQuiz = $CategorieQuiz;
    }



}

