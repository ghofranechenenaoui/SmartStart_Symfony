<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="commentContent", type="string", length=255)
     */
    private $commentContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commentCreatedAt", type="datetime")
     */
    private $commentCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commentUpdatedAt", type="datetime")
     */
    private $commentUpdatedAt;


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
     * Set commentContent
     *
     * @param string $commentContent
     *
     * @return Comments
     */
    public function setCommentContent($commentContent)
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * Get commentContent
     *
     * @return string
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * Set commentCreatedAt
     *
     * @param \DateTime $commentCreatedAt
     *
     * @return Comments
     */
    public function setCommentCreatedAt($commentCreatedAt)
    {
        $this->commentCreatedAt = $commentCreatedAt;

        return $this;
    }

    /**
     * Get commentCreatedAt
     *
     * @return \DateTime
     */
    public function getCommentCreatedAt()
    {
        return $this->commentCreatedAt;
    }

    /**
     * Set commentUpdatedAt
     *
     * @param \DateTime $commentUpdatedAt
     *
     * @return Comments
     */
    public function setCommentUpdatedAt($commentUpdatedAt)
    {
        $this->commentUpdatedAt = $commentUpdatedAt;

        return $this;
    }

    /**
     * Get commentUpdatedAt
     *
     * @return \DateTime
     */
    public function getCommentUpdatedAt()
    {
        return $this->commentUpdatedAt;
    }
}

