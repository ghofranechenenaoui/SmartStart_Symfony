<?php

namespace ForumBundle\Entity;
use PortfolioBundle\Entity\Membre;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum_Reaction
 *
 *
 * @ORM\Table(name="forum__reaction")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\Forum_ReactionRepository")
 */
class Forum_Reaction
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

     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="Question_id", referencedColumnName="id")
     */

    private $Question;

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->Question;
    }

    /**
     * @param mixed $Question
     */
    public function setQuestion($Question)
    {
        $this->Question = $Question;
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





}

