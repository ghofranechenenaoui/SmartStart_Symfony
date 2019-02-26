<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use ForumBundle\Entity\Topic;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="FOSuser")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="ForumBundle\Entity\Topic", mappedBy="user", cascade={"persist", "remove"}))
     * @ORM\OrderBy({"lastPost" = "desc"})
     */
    protected $topics;


    public function __construct()
    {
        $this->topics = new ArrayCollection();
        parent::__construct();

    }

    /**
     * Add topic
     *
     * @param \ForumBundle\Entity\Topic $topic
     *
     * @return User
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
}