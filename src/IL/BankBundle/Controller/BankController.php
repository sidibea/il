<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/5/18
 * Time: 5:56 PM
 */

namespace IL\BankBundle\Controller;


use IL\CoreBundle\Entity\Resiliation;
use IL\CoreBundle\Entity\Souscription;
use IL\CoreBundle\Form\LinkageType;
use IL\CoreBundle\Form\SouscriptionEditType;
use IL\CoreBundle\Form\SouscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BankController extends Controller
{

    public function dashboardAction()
    {
        return $this->render('ILBankBundle:Homepage:index.html.twig');
    }

    public function souscriptionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = new Souscription();
        $form = $this->createForm(SouscriptionType::class, $souscription);
        if($form->handleRequest($request)->isValid())
        {
            $souscription->setStatutLiaison('Pending');


            $em->persist($souscription);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le wallet a bien été enregistré.');

            return $this->redirect($this->generateUrl('il_bank_souscription_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:Souscription:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function sousEditAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:Souscription')->find($id);
        $form = $this->createForm(SouscriptionEditType::class, $souscription);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le wallet a bien été modifié.');

            return $this->redirect($this->generateUrl('il_bank_souscription_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:Souscription:edit.html.twig', [
            'form' => $form->createView()
        ]);


    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:Souscription')->findAll();

        return $this->render('ILBankBundle:Souscription:list.html.twig', [
            'souscriptions' => $list
        ]);
    }

    public function banqueListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:Souscription')->findAll();

        return $this->render('ILBankBundle:Souscription:BanqueList.html.twig', [
            'souscriptions' => $list
        ]);
    }

    public function resiliationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:Souscription')->find($id);

        $resiliation = new Resiliation();
        $resiliation->setOperateur($souscription->getOperateur());
        $resiliation->setRaison($souscription->getRaison());
        $resiliation->setBalanceInquery($souscription->getBalanceInquery());
        $resiliation->setStatutLiaison($souscription->getStatutLiaison());
        $resiliation->setNomCarte($souscription->getNomCarte());
        $resiliation->setStatutCarte($souscription->getStatutCarte());
        $resiliation->setAliasAccount($souscription->getAliasAccount());
        $resiliation->setNumCartePrepaye($souscription->getNumCartePrepaye());
        $resiliation->setLabelCarte($souscription->getLabelCarte());
        $resiliation->setMiniStatement($souscription->getMiniStatement());
        $resiliation->setMobileNo($souscription->getMobileNo());
        $resiliation->setC2w($souscription->getC2w());
        $resiliation->setAliasAccount($souscription->getAliasAccount());
        $resiliation->setW2c($souscription->getW2c());

        $em->remove($souscription);
        $em->persist($resiliation);
        $em->flush();

        return $this->redirect($this->generateUrl('il_bank_souscription_list'));


    }


    public function linkageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = new Souscription();
        $form = $this->createForm(LinkageType::class, $souscription);
        if($form->handleRequest($request)->isValid())
        {
            $souscription->setStatutLiaison('Pending');


            $em->persist($souscription);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le wallet a bien été enregistré.');

            return $this->redirect($this->generateUrl('il_bank_souscription_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:Linkage:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function reportAction()
    {
        return $this->render('ILBankBundle::report.html.twig');
    }

}