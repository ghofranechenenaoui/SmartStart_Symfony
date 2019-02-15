<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire_Forum
 *
 * @ORM\Table(name="commentaire__forum")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\Commentaire_ForumRepository")
 */
class Commentaire_Forum
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
     * @ORM\Column(name="description_Comment", type="string", length=255)
     */
    private $descriptionComment;


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
     * Set descriptionComment
     *
     * @param string $descriptionComment
     *
     * @return Commentaire_Forum
     */
    public function setDescriptionComment($descriptionComment)
    {
        $this->descriptionComment = $descriptionComment;

        return $this;
    }

    /**
     * Get descriptionComment
     *
     * @return string
     */
    public function getDescriptionComment()
    {
        return $this->descriptionComment;
    }
}

