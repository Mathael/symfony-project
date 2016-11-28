<?php

namespace sil13\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('sil13VitrineBundle:Default:index.html.twig');
    }
}
