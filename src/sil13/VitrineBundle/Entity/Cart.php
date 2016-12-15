<?php
/**
 * @author LEBOC Philippe.
 * Date: 14/12/2016
 * Time: 10:51
 */
namespace sil13\VitrineBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Cart
{
    /** @var ArrayCollection<BuyOrder> */
    private $orders;

    /**
     * Cart constructor.
     */
    public function __construct(){
        $this->setOrders(new ArrayCollection());
    }

    /**
     * @return ArrayCollection<BuyOrder>
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param ArrayCollection<BuyOrder> $orders
     * @return Cart
     */
    private function setOrders($orders)
    {
        $this->orders = $orders;
        return $this;
    }

    public function getOrderForArticle($articleId) {
        $orders = $this->getOrders();
        $found = false;
        $index = 0;
        while(!$found && $index < count($orders)) {
            /** @var BuyOrder $order */
            $order = $orders[$index];
            if($order->getArticle()->getId() == $articleId) $found = true;
            $index++;
        }
        return $found ? $orders[$index-1] : null;
    }

    /**
     * @param BuyOrder $order
     * @return $this
     */
    public function addOrder($order) {
        $this->getOrders()->add($order);
        return $this;
    }

    public function addMultipleOrder($orders = []) {
        for($i = 0; $i < count($orders); $i++) $this->addOrder($orders[$i]);
    }

    /**
     * @param BuyOrder $order
     */
    public function removeOrder($order) {
        $this->getOrders()->remove($order);
    }
}