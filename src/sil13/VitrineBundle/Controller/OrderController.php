<?php
/**
 * @author LEBOC Philippe.
 * Date: 12/12/2016
 * Time: 23:41
 */
namespace sil13\VitrineBundle\Controller;

use sil13\VitrineBundle\Entity\Article;
use sil13\VitrineBundle\Entity\BuyOrder;
use sil13\VitrineBundle\Entity\Cart;
use sil13\VitrineBundle\Utils\Constants;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrderController extends Controller
{
    public function showCartAction(Request $request) {
        $session = $request->getSession();
        $cart = $session->get(Constants::CART);
        return $this->render('@sil13Vitrine/article/cart.html.twig', [
            'cart' => $cart
        ]);
    }

    public function addToCartAction(Request $request, Article $article) {
        $quantity = $request->get('quantity', 1);
        $session = $request->getSession();

        $cart = $session->get(Constants::CART);

        if($cart == null) {
            $cart = new Cart();
        }

        $wasInCart = true;
        $order = $cart->getOrderForArticle($article->getId());

        if($order == null){
            $wasInCart = false;
            $order = new BuyOrder();
            $order
                ->setUser($this->getUser())
                ->setArticle($article)
                ->setCount(0);
        }

        $order->increaseCount($quantity);

        if(!$wasInCart) $cart->addOrder($order);

        // fixme Check si ca ecrase le panier courant
        $session->set(Constants::CART, $cart);

        return $this->redirectToRoute('article_index');
    }


    public function removeFromCartAction(Request $request, Article $article, $quantity) {
        $session = $request->getSession();

        $cart = $session->get(Constants::CART);

        if($cart == null) {
            $cart = new Cart();
        }

        $order = $cart->getOrderForArticle($article->getId());

        if($order == null){
            $order = new BuyOrder();
            $order
                ->setUser($this->getUser())
                ->setArticle($article)
                ->setCount(0);
        }

        $order->decreaseCount($quantity);

        // fixme Check si ca ecrase le panier courant
        $session->set(Constants::CART, $cart);

        return $this->redirectToRoute('article_index');
    }
}