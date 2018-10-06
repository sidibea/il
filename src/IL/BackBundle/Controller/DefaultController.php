<?php

namespace IL\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ILBackBundle:Default:index.html.twig');
    }
}
