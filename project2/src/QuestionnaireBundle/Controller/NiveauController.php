<?php

namespace QuestionnaireBundle\Controller;

use QuestionnaireBundle\Entity\Niveau;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Niveau controller.
 *
 */
class NiveauController extends Controller
{
    /**
     * Lists all niveau entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $niveaus = $em->getRepository('QuestionnaireBundle:Niveau')->findAll();

        return $this->render('@Questionnaire/questionnaire/back/Niveauxquiz.html.twig', array(
            'niveaus' => $niveaus,

        ));
    }

    /**
     * Creates a new niveau entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $niveaus = $em->getRepository('QuestionnaireBundle:Niveau')->findAll();

        $em    = $this->get('doctrine.orm.entity_manager');

        $dql   = "SELECT a FROM QuestionnaireBundle:Niveau a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );


        $niveau = new Niveau();
        $form = $this->createForm('QuestionnaireBundle\Form\NiveauType', $niveau);
        $form->handleRequest($request);


        if ( $form->isValid() && $form->isSubmitted()) {
            $em->persist($niveau);
            $niveau ->setDateCreationNiveau(new \DateTime());
            $em->flush();
            return $this->redirectToRoute('niveau_index');
        }
        return $this->render('@Questionnaire/questionnaire/back/Niveauxquiz.html.twig', array(
            'niveau' => $niveau,'niveaus' =>$niveaus,'pagination' => $pagination,

            'form' => $form->createView(),


        ));
    }

    /**
     * Finds and displays a niveau entity.
     *
     */
    public function showAction($id)
    {

        $niveau = $this ->getDoctrine()->getRepository(Niveau::class)->find($id);

        return $this->render('@Questionnaire/questionnaire/back/AfficheD.html.twig', array(
            'niveau' => $niveau,
        ));
    }


    public function imprimerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $niveaus = $em->getRepository('QuestionnaireBundle:Niveau')->findAll();

        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView("@Questionnaire/questionnaire/back/pdf.html.twig"
        ,array("title" =>"Awodome PDF file",'niveaus' => $niveaus,
            ));
        $filename = "custom_pdf_twog";
        return new Response(
            $snappy -> getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

    }


    /**
     * Displays a form to edit an existing niveau entity.
     *
     */
    public function editAction($id,Request $request)
    {
        $niveausE = $this->getDoctrine()->getRepository(Niveau::class)->find($id);
        $deleteForm = $this->createDeleteForm($niveausE);
        $editForm = $this->createForm('QuestionnaireBundle\Form\NiveauType', $niveausE);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute('niveau_new');
        }

        return $this->render('@Questionnaire/questionnaire/back/ModifierNiveau.html.twig', array(
            'niveaus' => $niveausE,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));

}



    /**
     * Deletes a niveau entity.
     *
     */
    public function deleteAction(Request $request, Niveau $niveau)
    {
        $form = $this->createDeleteForm($niveau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($niveau);
            $em->flush();
        }

        return $this->redirectToRoute('niveau_index');
    }



    public function Delete2Action($id)
    {

        $niveau = $this->getDoctrine()->getRepository( Niveau::class)->find($id);
        $this->getDoctrine()->getManager()->remove($niveau);
        $this->getDoctrine()->getManager()->flush();//pour le mise a jour
        return  $this->redirectToRoute('niveau_index');
    }


    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM QuestionnaireBundle:Niveau a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );

        // parameters to template
        return $this->render('@Questionnaire/questionnaire/back/pagination.html.twig',
            array('pagination' => $pagination));
    }


    /**
     * Creates a form to delete a niveau entity.
     *
     * @param Niveau $niveau The niveau entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Niveau $niveau)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('niveau_delete', array('id' => $niveau->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }







}



