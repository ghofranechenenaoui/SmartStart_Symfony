<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComentEvent
 *
 * @ORM\Table(name="coment_event")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\ComentEventRepository")
 */
class ComentEvent
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
     * @ORM\Column(name="dateComment", type="date")
     */
    private $dateComment;

    /**
     * @var string
     *
     * @ORM\Column(name="noteComment", type="string", length=255)
     */
    private $noteComment;

    /**
     * @var string
     *
     * @ORM\Column(name="contenueComment", type="string", length=255)
     */
    private $contenueComment;


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
     * Set dateComment
     *
     * @param \DateTime $dateComment
     *
     * @return ComentEvent
     */
    public function setDateComment($dateComment)
    {
        $this->dateComment = $dateComment;

        return $this;
    }

    /**
     * Get dateComment
     *
     * @return \DateTime
     */
    public function getDateComment()
    {
        return $this->dateComment;
    }

    /**
     * Set noteComment
     *
     * @param string $noteComment
     *
     * @return ComentEvent
     */
    public function setNoteComment($noteComment)
    {
        $this->noteComment = $noteComment;

        return $this;
    }

    /**
     * Get noteComment
     *
     * @return string
     */
    public function getNoteComment()
    {
        return $this->noteComment;
    }

    /**
     * Set contenueComment
     *
     * @param string $contenueComment
     *
     * @return ComentEvent
     */
    public function setContenueComment($contenueComment)
    {
        $this->contenueComment = $contenueComment;

        return $this;
    }

    /**
     * Get contenueComment
     *
     * @return string
     */
    public function getContenueComment()
    {
        return $this->contenueComment;
    }
}

