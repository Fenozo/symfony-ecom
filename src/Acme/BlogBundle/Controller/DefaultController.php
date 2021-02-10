<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        // exit;
        return $this->render('BlogBundle:Default:index.html.twig');
    }

    /**
     * @Route("/other")
     */
    public function otherction()
    {
        // exit;
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
