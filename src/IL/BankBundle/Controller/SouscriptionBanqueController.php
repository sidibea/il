<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/27/18
 * Time: 9:03 PM
 */

namespace IL\BankBundle\Controller;


use IL\CoreBundle\Entity\SouscriptionBanque;
use IL\CoreBundle\Form\SouscriptionBanqueType;
use IL\CoreBundle\Form\SouscriptionMobileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SouscriptionBanqueController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionBanque')->findAll();
        return $this->render('ILBankBundle:SouscriptionBanque:list.html.twig', [
            'souscriptions' => $list
        ]);
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = new SouscriptionBanque();
        $form = $this->createForm(SouscriptionBanqueType::class, $souscription);

        if($form->handleRequest($request)->isValid())
        {
            $souscription->setCreatedAt(new \datetime);
            $souscription->setUpdatedAt(new \datetime);
            $souscription->setEffectuerPar($this->getUser());

            $em->persist($souscription);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La liaison  a bien été éffectuée.');

            return $this->redirect($this->generateUrl('il_bank_souscription_banque_edit', ['id' => $souscription->getId()]));
        }


        return $this->render('ILBankBundle:SouscriptionBanque:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:SouscriptionBanque')->find($id);
        $form = $this->createForm(SouscriptionBanqueType::class, $souscription);

        if($form->handleRequest($request)->isValid())
        {
            $souscription->setUpdatedAt(new \datetime);

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La liaison  a bien été éffectuée.');

            return $this->redirect($this->generateUrl('il_bank_souscription_banque_edit', ['id' => $souscription->getId()]));
        }


        return $this->render('ILBankBundle:SouscriptionBanque:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function resiliationListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionBanque')->findBy([
            'statutLiaison' => 'Resiliated'
        ]);
        return $this->render('ILBankBundle:SouscriptionBanque:listResiliation.html.twig', [
            'souscriptions' => $list
        ]);

    }

    public function reportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if($request->getMethod() == 'GET'){

            if($request->get('operateur') != null && $request->get('type_transaction') != null && $request->get('type_transaction') == null){
                //dump('C2W'); exit;
             //   $souscription = $em->getRepository('ILCoreBundle:SouscriptionMobile')->find

            }
        }

        return $this->render('ILBankBundle::report.html.twig', [
        ]);

    }

}