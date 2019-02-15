<?php

namespace QuestionnaireBundle\Entity;
use PortfolioBundle\Entity\Membre;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passage_questionnaire
 *
 * @ORM\Table(name="passage_questionnaire")
 * @ORM\Entity(repositoryClass="QuestionnaireBundle\Repository\Passage_questionnaireRepository")
 */
class Passage_questionnaire
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     *@ORM\ManyToOne(targetEntity="PortfolioBundle\Entity\Membre")
     * @ORM\JoinColumn(name="membre_id", referencedColumnName="id")
     */

    private $membre;

    /**
     * @return mixed
     */
    public function getMembre()
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

    /**
     *@ORM\ManyToOne(targetEntity="Evaluation")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     */

    private $evaluation;

    /**
     * @return mixed
     */
    public function getEevaluation()
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


}

