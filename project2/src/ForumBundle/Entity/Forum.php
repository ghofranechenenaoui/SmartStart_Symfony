<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Forum
 *
 * @ORM\Table(name="forum")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\ForumRepository")
 */
class Forum
{
    /**
     * @var int
     *
     * @ORM\Column(name="forumId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="forumName", type="string", length=255)
     */
    private $forumName;

    /**
     * @var string
     *
     * @ORM\Column(name="forumDescription", type="string", length=255)
     */
    private $forumDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="forumNbrViews", type="integer")
     */
    private $forumNbrViews;

    /**
     * @ORM\Column(name="forumImage", type="string", length=255, nullable=true)
     */
    protected $forumImage;

    /**
     * @ORM\OneToMany(targetEntity="ForumBundle\Entity\Topic", mappedBy="forum", cascade={"persist", "remove"}))
     * @ORM\OrderBy({"topicIsPinned" = "desc", "lastPost" = "desc"})
     */
    protected $topics;

    /**
     * @ORM\ManyToOne(targetEntity="ForumBundle\Entity\Category", inversedBy="forums")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    protected $category;

    /**
     * @var integer
     *
     * @ORM\Column(name="disp_position", type="integer")
     */
    protected $position = 0;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->topics = new ArrayCollection();
        //$this->readAuthorisedRoles = array();
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
     * Set forumName
     *
     * @param string $forumName
     *
     * @return Forum
     */
    public function setForumName($forumName)
    {
        $this->forumName = $forumName;

        return $this;
    }

    /**
     * Get forumName
     *
     * @return string
     */
    public function getForumName()
    {
        return $this->forumName;
    }

    /**
     * Set forumDescription
     *
     * @param string $forumDescription
     *
     * @return Forum
     */
    public function setForumDescription($forumDescription)
    {
        $this->forumDescription = $forumDescription;

        return $this;
    }

    /**
     * Get forumDescription
     *
     * @return string
     */
    public function getForumDescription()
    {
        return $this->forumDescription;
    }

    /**
     * Set forumNbrViews
     *
     * @param integer $forumNbrViews
     *
     * @return Forum
     */
    public function setForumNbrViews($forumNbrViews)
    {
        $this->forumNbrViews = $forumNbrViews;

        return $this;
    }

    /**
     * Get forumNbrViews
     *
     * @return int
     */
    public function getForumNbrViews()
    {
        return $this->forumNbrViews;
    }

    /**
     * Set forumImage
     *
     * @param string $forumImage
     *
     * @return Forum
     */
    public function setForumImage($forumImage)
    {
        $this->forumImage = $forumImage;
        return $this;
    }

    /**
     * Get forumImage
     */
    public function getForumImage()
    {
        return $this->forumImage;
    }

    /**
     * Add topic
     *
     * @param \ForumBundle\Entity\Topic $topic
     *
     * @return Forum
     */
    public function addTopic(Topic $topic)
    {
        $this->topics[] = $topic;
        return $this;
    }
    /**
     * Remove topic
     *
     * @param \ForumBundle\Entity\Topic $topic
     */
    public function removeTopic(Topic $topic)
    {
        $this->topics->removeElement($topic);
    }
    /**
     * Get topics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Set category
     *
     * @param \ForumBundle\Entity\Category $category
     *
     * @return Forum
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * Get category
     *
     * @return \ForumBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Forum
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }
    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }


    /*/**
     * Get topics by locale
     *
     * @param array $locales
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getTopicsByLocale($locales)
    {
        if (false === is_array($locales)) {
            $locales = array($locales => $locales);
        }

        $topics = $this->getTopics()->filter(
            function(Topic $entry) use ($locales) {
                return in_array($entry->getLocale(), $locales);
            }
        );
        return $topics;
    }*/

}

