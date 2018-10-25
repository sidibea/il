<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/23/18
 * Time: 2:18 PM
 */

namespace IL\BackBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller
{

    public function indexAction()
    {
        return $this->render('ILBackBundle::index.html.twig');
    }

}