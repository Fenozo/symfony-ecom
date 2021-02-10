<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $array = ['A', 'B', 'C', 'D', 'A'];
        $html = "";
        foreach ($array as $key => $value) {
            $checker = $this->get('app_checker');

            $checker->isValid($value);

            $html .= 'is Valid '.$value.' ('. json_encode($checker->getValid()). ') </br>';       
        }

        // exit;

        // replace this example code with whatever you need
        return $this->render('home/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'kernel.root_dir' => $this->container->getParameter('kernel.root_dir'), 
            'directory' => DIRECTORY_SEPARATOR,
            'html' => $html
        ));
    }
}
