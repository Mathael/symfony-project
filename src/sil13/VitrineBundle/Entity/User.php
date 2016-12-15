<?php
/**
 * @author LEBOC Philippe.
 * Date: 30/11/2016
 * Time: 09:16
 */
namespace sil13\VitrineBundle\Entity;

use Doctrine\Common\Collections\Collection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
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
     * @var Collection
     */
    private $orders;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Add order
     *
     * @param BuyOrder $order
     *
     * @return User
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
}
