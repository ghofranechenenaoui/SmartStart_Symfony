<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Label
 *
 * @ORM\Table(name="label")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\LabelRepository")
 */
class Label
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
     * @ORM\Column(name="labelName", type="string", length=255)
     */
    private $labelName;

    /**
     * @var int
     *
     * @ORM\Column(name="labelNbrTopics", type="integer")
     */
    private $labelNbrTopics;

    /**
     * @ORM\ManyToMany(targetEntity="ForumBundle\Entity\Topic", mappedBy="labels", cascade={"persist", "remove"}))
     * @ORM\OrderBy({ "lastPost" = "desc"})
     */
    protected $topics;

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
     * Set labelName
     *
     * @param string $labelName
     *
     * @return Label
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;

        return $this;
    }

    /**
     * Get labelName
     *
     * @return string
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Set labelNbrTopics
     *
     * @param integer $labelNbrTopics
     *
     * @return Label
     */
    public function setLabelNbrTopics($labelNbrTopics)
    {
        $this->labelNbrTopics = $labelNbrTopics;

        return $this;
    }

    /**
     * Get labelNbrTopics
     *
     * @return int
     */
    public function getLabelNbrTopics()
    {
        return $this->labelNbrTopics;
    }

    /**
     * Add labelTopic
     *
     * @param \ForumBundle\Entity\Topic $topic
     *
     * @return Label
     */
    public function addLabelTopic(Topic $topic)
    {
        $this->topics[] = $topic;
        return $this;
    }
    /**
     * Remove topic
     *
     * @param \ForumBundle\Entity\Topic $topic
     */
    public function removeLabelTopic(Topic $topic)
    {
        $this->topics->removeElement($topic);
    }
    /**
     * Get topics
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLabelTopics()
    {
        return $this->topics;
    }
}

