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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    public function __construct() {
        parent::__construct();
    }


    /**
     * Add articles
     *
     * @param \sil13\VitrineBundle\Entity\Article $articles
     * @return User
     */
    public function addArticle(\sil13\VitrineBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \sil13\VitrineBundle\Entity\Article $articles
     */
    public function removeArticle(\sil13\VitrineBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
