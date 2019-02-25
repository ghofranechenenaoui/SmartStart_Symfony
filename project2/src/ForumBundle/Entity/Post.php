<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="postTitle", type="string", length=255)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="postContent", type="string", length=255)
     */
    private $postContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postCreatedAt", type="datetime")
     */
    private $postCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postUpdatedAt", type="datetime")
     */
    private $postUpdatedAt;

    /**
     * @var int
     *
     * @ORM\Column(name="postNbrVotes", type="integer")
     */
    private $postNbrVotes;


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
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return Post
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     *
     * @return Post
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * Get postContent
     *
     * @return string
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postCreatedAt
     *
     * @param \DateTime $postCreatedAt
     *
     * @return Post
     */
    public function setPostCreatedAt($postCreatedAt)
    {
        $this->postCreatedAt = $postCreatedAt;

        return $this;
    }

    /**
     * Get postCreatedAt
     *
     * @return \DateTime
     */
    public function getPostCreatedAt()
    {
        return $this->postCreatedAt;
    }

    /**
     * Set postUpdatedAt
     *
     * @param \DateTime $postUpdatedAt
     *
     * @return Post
     */
    public function setPostUpdatedAt($postUpdatedAt)
    {
        $this->postUpdatedAt = $postUpdatedAt;

        return $this;
    }

    /**
     * Get postUpdatedAt
     *
     * @return \DateTime
     */
    public function getPostUpdatedAt()
    {
        return $this->postUpdatedAt;
    }

    /**
     * Set postNbrVotes
     *
     * @param integer $postNbrVotes
     *
     * @return Post
     */
    public function setPostNbrVotes($postNbrVotes)
    {
        $this->postNbrVotes = $postNbrVotes;

        return $this;
    }

    /**
     * Get postNbrVotes
     *
     * @return int
     */
    public function getPostNbrVotes()
    {
        return $this->postNbrVotes;
    }
}

