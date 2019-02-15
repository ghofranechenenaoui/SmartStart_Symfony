<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="description_Rep", type="string", length=255)
     */
    private $descriptionRep;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire_forum", type="string", length=255)
     */
    private $commentaireForum;


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
     * Set descriptionRep
     *
     * @param string $descriptionRep
     *
     * @return Reponse
     */
    public function setDescriptionRep($descriptionRep)
    {
        $this->descriptionRep = $descriptionRep;

        return $this;
    }

    /**
     * Get descriptionRep
     *
     * @return string
     */
    public function getDescriptionRep()
    {
        return $this->descriptionRep;
    }

    /**

     * @ORM\ManyToOne(targetEntity="Commentaire_Forum")
     * @ORM\JoinColumn(name="Commentaire_Forum_id", referencedColumnName="id")
     */

    private $commentaire_Forum;

    /**
     * @return mixed
     */
    public function getCommentaire_Forum()
    {
        return $this->commentaire_Forum;
    }

    /**
     * @param mixed $commentaire_Forum
     */
    public function setCommentaire_Forum($commentaire_Forum)
    {
        $this->commentaire_Forum = $commentaire_Forum;
    }


}

