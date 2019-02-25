<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;


/**
 * Topic
 *
 * @ORM\Table(name="topic")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\TopicRepository")
 */
class Topic
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
     * @ORM\Column(name="topicTitle", type="string", length=255)
     */
    private $topicTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="topicContent", type="string", length=255)
     */
    private $topicContent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topicCreatedAt", type="datetime")
     */
    private $topicCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="topicUpdatedAt", type="datetime")
     */
    private $topicUpdatedAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="topicResolved", type="boolean")
     */
    private $topicResolved;

    /**
     * @var bool
     *
     * @ORM\Column(name="topicClosed", type="boolean")
     */
    private $topicClosed;

    /**
     * @var int
     *
     * @ORM\Column(name="topicNbrViews", type="integer")
     */
    private $topicNbrViews;

    /**
     * @var int
     *
     * @ORM\Column(name="topicNbrVotes", type="integer")
     */
    private $topicNbrVotes;

    /**
     * @var int
     *
     * @ORM\Column(name="topicNbrPosts", type="integer")
     */
    private $topicNbrPosts;

    /**
     * @var bool
     *
     * @ORM\Column(name="topicIsPinned", type="boolean")
     */
    private $topicIsPinned;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $lastPost;


    /**
     * @ORM\ManyToOne(targetEntity="ForumBundle\Entity\Forum", inversedBy="topics")
     * @ORM\JoinColumn(name="forum_id", referencedColumnName="forumId", nullable=false)
     */
    protected $forum;

    /**
     * @ORM\ManyToMany(targetEntity="ForumBundle\Entity\Label", inversedBy="topics")
     * @ORM\JoinTable(name="topics_labels")
     */
    protected $labels;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->labels = new ArrayCollection();
    }


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
     * Set topicTitle
     *
     * @param string $topicTitle
     *
     * @return Topic
     */
    public function setTopicTitle($topicTitle)
    {
        $this->topicTitle = $topicTitle;

        return $this;
    }

    /**
     * Get topicTitle
     *
     * @return string
     */
    public function getTopicTitle()
    {
        return $this->topicTitle;
    }

    /**
     * Set topicContent
     *
     * @param string $topicContent
     *
     * @return Topic
     */
    public function setTopicContent($topicContent)
    {
        $this->topicContent = $topicContent;

        return $this;
    }

    /**
     * Get topicContent
     *
     * @return string
     */
    public function getTopicContent()
    {
        return $this->topicContent;
    }

    /**
     * Set topicCreatedAt
     *
     * @param \DateTime $topicCreatedAt
     *
     * @return Topic
     */
    public function setTopicCreatedAt($topicCreatedAt)
    {
        $this->topicCreatedAt = $topicCreatedAt;

        return $this;
    }

    /**
     * Get topicCreatedAt
     *
     * @return \DateTime
     */
    public function getTopicCreatedAt()
    {
        return $this->topicCreatedAt;
    }

    /**
     * Set topicUpdatedAt
     *
     * @param \DateTime $topicUpdatedAt
     *
     * @return Topic
     */
    public function setTopicUpdatedAt($topicUpdatedAt)
    {
        $this->topicUpdatedAt = $topicUpdatedAt;

        return $this;
    }

    /**
     * Get topicUpdatedAt
     *
     * @return \DateTime
     */
    public function getTopicUpdatedAt()
    {
        return $this->topicUpdatedAt;
    }

    /**
     * Set topicResolved
     *
     * @param boolean $topicResolved
     *
     * @return Topic
     */
    public function setTopicResolved($topicResolved)
    {
        $this->topicResolved = $topicResolved;

        return $this;
    }

    /**
     * Get topicResolved
     *
     * @return bool
     */
    public function getTopicResolved()
    {
        return $this->topicResolved;
    }

    /**
     * Set topicClosed
     *
     * @param boolean $topicClosed
     *
     * @return Topic
     */
    public function setTopicClosed($topicClosed)
    {
        $this->topicClosed = $topicClosed;

        return $this;
    }

    /**
     * Get topicClosed
     *
     * @return bool
     */
    public function getTopicClosed()
    {
        return $this->topicClosed;
    }

    /**
     * Set topicNbrViews
     *
     * @param integer $topicNbrViews
     *
     * @return Topic
     */
    public function setTopicNbrViews($topicNbrViews)
    {
        $this->topicNbrViews = $topicNbrViews;

        return $this;
    }

    /**
     * Get topicNbrViews
     *
     * @return int
     */
    public function getTopicNbrViews()
    {
        return $this->topicNbrViews;
    }

    /**
     * Set topicNbrVotes
     *
     * @param integer $topicNbrVotes
     *
     * @return Topic
     */
    public function setTopicNbrVotes($topicNbrVotes)
    {
        $this->topicNbrVotes = $topicNbrVotes;

        return $this;
    }

    /**
     * Get topicNbrVotes
     *
     * @return int
     */
    public function getTopicNbrVotes()
    {
        return $this->topicNbrVotes;
    }

    /**
     * Set topicNbrPosts
     *
     * @param integer $topicNbrPosts
     *
     * @return Topic
     */
    public function setTopicNbrPosts($topicNbrPosts)
    {
        $this->topicNbrPosts = $topicNbrPosts;

        return $this;
    }

    /**
     * Get topicNbrPosts
     *
     * @return int
     */
    public function getTopicNbrPosts()
    {
        return $this->topicNbrPosts;
    }

    /**
     * Set topicIsPinned
     *
     * @param boolean $topicIsPinned
     *
     * @return Topic
     */
    public function setTopicIsPinned($topicIsPinned)
    {
        $this->topicIsPinned = $topicIsPinned;

        return $this;
    }

    /**
     * Get topicIsPinned
     *
     * @return bool
     */
    public function getTopicIsPinned()
    {
        return $this->topicIsPinned;
    }

    /**
     * Set lastPost
     *
     * @param \DateTime $lastPost
     *
     * @return Topic
     */
    public function setLastPost($lastPost)
    {
        $this->lastPost = $lastPost;
        return $this;
    }
    /**
     * Get lastPost
     *
     * @return \DateTime
     */
    public function getLastPost()
    {
        return $this->lastPost;
    }

    /**
     * Set forum
     *
     * @param \ForumBundle\Entity\Forum $forum
     *
     * @return Topic
     */
    public function setForum(Forum $forum)
    {
        $this->forum = $forum;
        return $this;
    }
    /**
     * Get forum
     *
     * @return \ForumBundle\Entity\Forum
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * Add view
     *
     * @return Topic
     */
    public function addView()
    {
        $this->topicNbrViews = $this->topicNbrViews + 1;
        return $this;
    }

    /**
     * Add label
     *
     * @param \ForumBundle\Entity\Label $label
     *
     * @return Topic
     */
    public function addLabel(Label $label)
    {
        $this->labels[] = $label;
        $label->addLabelTopic($this);
        return $this;
    }
    /**
     * Remove label
     *
     * @param \ForumBundle\Entity\Label $label
     */
    public function removeLabel(Label $label)
    {
        $this->labels->removeElement($label);
        $label->removeLabelTopic($this);
    }
    /**
     * Get labels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLabels()
    {
        return $this->labels;
    }
}

