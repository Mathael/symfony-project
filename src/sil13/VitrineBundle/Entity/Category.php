<?php

namespace sil13\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \sil13\VitrineBundle\Entity\Article
     */
    private $articles;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set articles
     *
     * @param \sil13\VitrineBundle\Entity\Article $articles
     * @return Category
     */
    public function setArticles(\sil13\VitrineBundle\Entity\Article $articles = null)
    {
        $this->articles = $articles;

        return $this;
    }

    /**
     * Get articles
     *
     * @return \sil13\VitrineBundle\Entity\Article 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
