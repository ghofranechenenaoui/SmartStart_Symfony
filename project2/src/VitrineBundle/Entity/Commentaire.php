<?php

namespace VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="eventcommentaire")
 * @ORM\Entity(repositoryClass="VitrineBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommentaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCommentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commentaire", type="datetime")
     */
    private $dateCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description_commentaire", type="string", length=255)
     */
    private $descriptionCommentaire;

    /**
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }




    /**
     * Set dateCommentaire
     *
     * @param \DateTime $dateCommentaire
     *
     * @return Commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return \DateTime
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set descriptionCommentaire
     *
     * @param string $descriptionCommentaire
     *
     * @return Commentaire
     */
    public function setDescriptionCommentaire($descriptionCommentaire)
    {
        $this->descriptionCommentaire = $descriptionCommentaire;

        return $this;
    }

    /**
     * Get descriptionCommentaire
     *
     * @return string
     */
    public function getDescriptionCommentaire()
    {
        return $this->descriptionCommentaire;
    }
}

