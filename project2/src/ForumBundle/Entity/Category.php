<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="ForumBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="categoryName", type="string", length=255)
     */
    private $categoryName;

    /**
     * @var int
     *
     * @ORM\Column(name="categoryPosition", type="integer", options={"unsigned"=true})
     */
    private $categoryPosition;

    /**
     * @ORM\OneToMany(targetEntity="ForumBundle\Entity\Forum", mappedBy="category", cascade={"persist", "remove"})
     * @ORM\OrderBy({"position" = "asc"})
     */
    protected $forums;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->forums = new ArrayCollection();
        //$this->translations = new ArrayCollection();
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
     * Set categoryName
     *
     * @param string $categoryName
     *
     * @return Category
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set categoryPosition
     *
     * @param integer $categoryPosition
     *
     * @return Category
     */
    public function setCategoryPosition($categoryPosition)
    {
        $this->categoryPosition = $categoryPosition;

        return $this;
    }

    /**
     * Get categoryPosition
     *
     * @return int
     */
    public function getCategoryPosition()
    {
        return $this->categoryPosition;
    }

    /**
     * Add forum
     *
     * @param \ForumBundle\Entity\Forum $forum
     *
     * @return Category
     */
    public function addForum(Forum $forum)
    {
        $this->forums[] = $forum;
        return $this;
    }
    /**
     * Remove forum
     *
     * @param \ForumBundle\Entity\Forum $forum
     */
    public function removeForum(Forum $forum)
    {
        $this->forums->removeElement($forum);
    }
    /**
     * Get forums
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getForums()
    {
        return $this->forums;
    }

}

