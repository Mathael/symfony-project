<?php

namespace sil13\VitrineBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $marque;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var string
     */
    private $imageName;

    /**
     * @var boolean
     */
    private $isSoldOut;

    /**
     * @var Collection
     */
    private $orders;

    /**
     * @var Category
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }

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
     *
     * @return Article
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
     * Set description
     *
     * @param string $description
     *
     * @return Article
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Article
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Article
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     *
     * @return Article
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set isSoldOut
     *
     * @param boolean $isSoldOut
     *
     * @return Article
     */
    public function setIsSoldOut($isSoldOut)
    {
        $this->isSoldOut = $isSoldOut;

        return $this;
    }

    /**
     * Get isSoldOut
     *
     * @return boolean
     */
    public function getIsSoldOut()
    {
        return $this->isSoldOut;
    }

    /**
     * Add order
     *
     * @param BuyOrder $order
     *
     * @return Article
     */
    public function addOrder(BuyOrder $order)
    {
        $this->orders[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param BuyOrder $order
     */
    public function removeOrder(BuyOrder $order)
    {
        $this->orders->removeElement($order);
    }

    /**
     * Get orders
     *
     * @return Collection
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set category
     *
     * @param Category $category
     *
     * @return Article
     */
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
