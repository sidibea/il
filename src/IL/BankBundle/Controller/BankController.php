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
use IL\CoreBundle\Entity\SouscriptionBanque;
use IL\CoreBundle\Entity\SouscriptionMobile;
use IL\CoreBundle\Form\LinkageType;
use IL\CoreBundle\Form\SouscriptionBanqueType;
use IL\CoreBundle\Form\SouscriptionEditType;
use IL\CoreBundle\Form\SouscriptionMobileEditType;
use IL\CoreBundle\Form\SouscriptionMobileType;
use IL\CoreBundle\Form\SouscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BankController extends Controller
{

    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('ILUserBundle:User')->findAll();
        $transaction = $em->getRepository('ILCoreBundle:SouscriptionMobile')->NumberOfTransfert();
        return $this->render('ILBankBundle:Homepage:index.html.twig', [
            'user' => $user,
            'transaction' => $transaction
        ]);
    }

    public function souscriptionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = new SouscriptionMobile();
        $form = $this->createForm(SouscriptionMobileType::class, $souscription);
        if($form->handleRequest($request)->isValid())
        {

            //dump($form->get('operateur')->getData()); exit;
            $souscription->setOperateur('Orange ML');
            $souscription->setTypeCarte('VISA');
            $souscription->setEffectuerPar($this->getUser());
            $souscription->setCreatedAt(new \datetime);
            $souscription->setUpdatedAt(new \datetime);


            $em->persist($souscription);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le wallet a bien été enregistré.');

            return $this->redirect($this->generateUrl('il_bank_souscription_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:SouscriptionMobile:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function sousEditAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:SouscriptionMobile')->find($id);
        $form = $this->createForm(SouscriptionMobileEditType::class, $souscription);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le wallet a bien été modifié.');

            return $this->redirect($this->generateUrl('il_bank_souscription_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:SouscriptionMobile:add.html.twig', [
            'form' => $form->createView()
        ]);


    }

    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionMobile')->findBy([
            'statutLiaison' => 'Pending'
        ]);

        return $this->render('ILBankBundle:SouscriptionMobile:list.html.twig', [
            'souscriptions' => $list
        ]);
    }

    public function banqueListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionBanque')->findAll();

        return $this->render('ILBankBundle:SouscriptionBanque:list.html.twig', [
            'souscriptions' => $list
        ]);
    }

    public function resiliationAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:SouscriptionMobile')->find($id);

        $souscription->setStatutLiaison('Resiliated');
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'La souscription a ete resiliee avec succes.');

        return $this->redirect($this->generateUrl('il_bank_souscription_list'));


    }

    public function resiliationBanqueAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:SouscriptionBanque')->find($id);

        $souscription->setStatutLiaison('Resiliated');
        $em->flush();
        $request->getSession()->getFlashBag()->add('notice', 'La souscription a ete resiliee avec succes.');

        return $this->redirect($this->generateUrl('il_bank_souscription_list_banque'));


    }

    public function resiliationMobileListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionMobile')->findBy([
            'statutLiaison' => 'Resiliated'
        ]);

        return $this->render('ILBankBundle:SouscriptionMobile:resiliation.html.twig', [
            'souscriptions' => $list
        ]);

    }

    public function resiliationBanqueListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('ILCoreBundle:SouscriptionBanque')->findBy([
            'statutLiaison' => 'Resiliated'
        ]);

        return $this->render('ILBankBundle:SouscriptionBanque:resiliation.html.twig', [
            'souscriptions' => $list
        ]);

    }


    public function souscriptionBanqueAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = new SouscriptionBanque();
        $form = $this->createForm(SouscriptionBanqueType::class, $souscription);
        if($form->handleRequest($request)->isValid())
        {
            //$souscription->setStatutLiaison('Pending');

            $souscription->setCreatedAt(new \datetime);
            $souscription->setUpdatedAt(new \datetime);
            $souscription->setEffectuerPar($this->getUser());


            $em->persist($souscription);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La souscription a ete effectuee avec succes.');

            return $this->redirect($this->generateUrl('il_bank_linkage_compte_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:SouscriptionBanque:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function souscriptionBanqueEditAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $souscription = $em->getRepository('ILCoreBundle:SouscriptionBanque')->find($id);
        $form = $this->createForm(SouscriptionBanqueType::class, $souscription);
        if($form->handleRequest($request)->isValid())
        {
            //$souscription->setStatutLiaison('Pending');

            $souscription->setUpdatedAt(new \datetime);


            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La souscription a ete effectuee avec succes.');

            return $this->redirect($this->generateUrl('il_bank_linkage_compte_edit', ['id' => $souscription->getId()]));
        }
        return $this->render('ILBankBundle:SouscriptionBanque:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function reportAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $start = ($request->get('start_date') != '')?date("Y-m-d", strtotime($request->get('start_date'))):'2018-01-01' ;

        $end = ($request->get('end_date') != '')?date("Y-m-d", strtotime($request->get('end_date'))):date('Y-m-d');


        $souscription = [];

       // dump($start); exit;



        if($request->getMethod() == "GET")
        {
            if($request->get('statut_linkage') != "")
            {
                $souscription = $em->getRepository('ILCoreBundle:SouscriptionMobile')->getByStatutLinkage($request->get('statut_linkage'), $request->get('numero_carte'), $request->get('operateur'), $start, $end  );

            }

            if($request->get('type_operation') != "")
            {
                $souscription = $em->getRepository('ILCoreBundle:SouscriptionMobile')->getByTypeOperation($request->get('type_operation'), $request->get('numero_carte'), $request->get('operateur'), $start, $end  );


            }

            // dump($souscription); exit;


        }

        // dump($souscription); exit;
        return $this->render('ILBankBundle::report.html.twig', [
            'souscriptions' => $souscription
        ]);




    }


    function convertString ($date)
    {
        // convert date and time to seconds
        $sec = strtotime($date);

        // convert seconds into a specific format
        $date = date("Y-m-d H:i", $sec);

        // append seconds to the date and time
        $date = $date . ":00";

        // print final date and time
        echo $date;
    }

}