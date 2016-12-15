<?php

namespace sil13\VitrineBundle\Entity;

/**
 * BuyOrder
 */
class BuyOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Article
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct(){}

    /**
     * Decrease order quantity by $quantity
     * @param $quantity integer
     * @return BuyOrder
     */
    public function decreaseCount($quantity) {
        if(($this->getCount() - $quantity) < 0)
            $this->setCount(0);
        else
            $this->setCount($this->getCount() - $quantity);
        return $this;
    }

    /**
     * Increase order quantity by $quantity
     * Negative quantity value is ignored
     * @param $quantity integer
     * @return BuyOrder
     */
    public function increaseCount($quantity) {
        if($quantity < 0) return $this;
        $this->setCount($this->getCount() + $quantity);
        return $this;
    }

    public function __toString() {
        return $this->id . '';
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
     * Set count
     *
     * @param integer $count
     *
     * @return BuyOrder
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return BuyOrder
     */
    public function setUser(User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set article
     *
     * @param Article $article
     *
     * @return BuyOrder
     */
    public function setArticle(Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
