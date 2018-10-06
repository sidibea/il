<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/23/18
 * Time: 2:18 PM
 */

namespace IL\BackBundle\Controller;


use IL\UserBundle\Entity\User;
use IL\UserBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BackController extends Controller
{

    public function indexAction()
    {
        return $this->render('ILBackBundle::index.html.twig');
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        return $this->render('ILBackBundle::user.html.twig', [
            'form' => $form->createView()
        ]);


    }

}