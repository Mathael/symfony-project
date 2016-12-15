<?php
/**
 * @author LEBOC Philippe.
 * Date: 30/11/2016
 * Time: 09:16
 */
namespace sil13\VitrineBundle\Entity;

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
     * @var \sil13\VitrineBundle\Entity\Kart
     */
    private $kart;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Set kart
     *
     * @param \sil13\VitrineBundle\Entity\Kart $kart
     *
     * @return User
     */
    public function setKart(\sil13\VitrineBundle\Entity\Kart $kart = null)
    {
        $this->kart = $kart;

        return $this;
    }

    /**
     * Get kart
     *
     * @return \sil13\VitrineBundle\Entity\Kart
     */
    public function getKart()
    {
        return $this->kart;
    }

    /**
     * Add kart
     *
     * @param \sil13\VitrineBundle\Entity\Kart $kart
     *
     * @return User
     */
    public function addKart(\sil13\VitrineBundle\Entity\Kart $kart)
    {
        $this->kart[] = $kart;

        return $this;
    }

    /**
     * Remove kart
     *
     * @param \sil13\VitrineBundle\Entity\Kart $kart
     */
    public function removeKart(\sil13\VitrineBundle\Entity\Kart $kart)
    {
        $this->kart->removeElement($kart);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $order;


    /**
     * Add order
     *
     * @param \sil13\VitrineBundle\Entity\BuyOrder $order
     *
     * @return User
     */
    public function addOrder(\sil13\VitrineBundle\Entity\BuyOrder $order)
    {
        $this->order[] = $order;

        return $this;
    }

    /**
     * Remove order
     *
     * @param \sil13\VitrineBundle\Entity\BuyOrder $order
     */
    public function removeOrder(\sil13\VitrineBundle\Entity\BuyOrder $order)
    {
        $this->order->removeElement($order);
    }

    /**
     * Get order
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrder()
    {
        return $this->order;
    }
}
