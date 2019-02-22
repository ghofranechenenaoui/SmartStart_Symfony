<?php

namespace QuestionnaireBundle\Controller;

use QuestionnaireBundle\Entity\Questions;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Question controller.
 *
 */
class QuestionsController extends Controller
{
    /**
     * Lists all question entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('QuestionnaireBundle:Questions')->findAll();

        return $this->render('@Questionnaire/questionnaire/back/questionAll.html.twig', array(
            'questions' => $questions,
        ));
    }


    /**
     * Creates a new question entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('QuestionnaireBundle:Questions')->findAll();

        $question = new Questions();
        $form = $this->createForm('QuestionnaireBundle\Form\QuestionsType', $question);
        $form->handleRequest($request);

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM QuestionnaireBundle:Questions a";
        $query = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            2/*limit per page*/
        );

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($question);
            $question->setDateCreationQuestion(new \DateTime());
            $em->flush();

            return $this->redirectToRoute('questions_new');
        }

        return $this->render('@Questionnaire/questionnaire/back/QuestionAll.html.twig', array(
            'question' => $question,'pagination' => $pagination,  'questions' => $questions,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a question entity.
     *
     */
    public function showAction($id)
    {
        $question = $this->getDoctrine()->getRepository(Questions::class)->find($id);

        return $this->render('@Questionnaire/questionnaire/back/Affichequestion.html.twig', array(
            'question' => $question,
        ));
    }

    /**
     * Displays a form to edit an existing question entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $question = $this->getDoctrine()->getRepository(Questions::class)->find($id);

        $deleteForm = $this->createDeleteForm($question);
        $editForm = $this->createForm('QuestionnaireBundle\Form\QuestionsType', $question);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questions_index', array('id' => $question->getId()));
        }

        return $this->render('@Questionnaire/questionnaire/back/ModQuestion.html.twig', array(
            'question' => $question,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a question entity.
     *
     */
    public function deleteAction(Request $request, Questions $question)
    {
        $form = $this->createDeleteForm($question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($question);
            $em->flush();
        }

        return $this->redirectToRoute('questions_index');
    }

    /**
     * Creates a form to delete a question entity.
     *
     * @param Questions $question The question entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Questions $question)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questions_delete', array('id' => $question->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }





    public function imprimerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository(Questions::class)->findAll();

        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView("@Questionnaire/questionnaire/back/pdfquestion.html.twig"
            ,array("title" =>"Awodome PDF file",'questions' => $questions,
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



    public function Delete2Action($id)
    {

        $question= $this->getDoctrine()->getRepository( Questions::class)->find($id);
        $this->getDoctrine()->getManager()->remove($question);
        $this->getDoctrine()->getManager()->flush();//pour le mise a jour
        return  $this->redirectToRoute('questions_index');
    }




        public function listAction(Request $request)
    {
        $em =$this->getDoctrine()->getManager();
       $entities = $em->getRepository('QuestionnaireBundle:Questions')->findAll();

        $paginator  = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        return $this->render('@Questionnaire/Questionnaire/back/pagination.html.twig',
            array('pagination' => $entities));
    }







}
