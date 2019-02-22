<?php

namespace QuestionnaireBundle\Controller;

use QuestionnaireBundle\Entity\CategorieQuiz;
use QuestionnaireBundle\Entity\Evaluation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Evaluation controller.
 *
 */
class EvaluationController extends Controller
{
    /**
     * Lists all evaluation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evaluations = $em->getRepository('QuestionnaireBundle:Evaluation')->findAll();

        return $this->render('evaluation/index.html.twig', array(
            'evaluations' => $evaluations,
        ));
    }

    /**
     * Creates a new evaluation entity.
     *
     */
    public function newAction(Request $request)
    {

        $em = $this ->getDoctrine()->getManager();
        $catss  =$em->getRepository(Evaluation::class)->findpayeDQL();


        $evaluation = new Evaluation();
        $Cat = new CategorieQuiz();
        $form = $this->createForm('QuestionnaireBundle\Form\EvaluationType', $evaluation);
        $form2 = $this->createForm('QuestionnaireBundle\Form\CategorieQuizType', $Cat);


        $form->handleRequest($request);


        $form2->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $form2->isSubmitted() && $form2->isValid()) {

            $em->persist($evaluation);
            $em->persist($Cat);
            $Cat ->setDateCreationCat(new \DateTime());
            $evaluation->setDateCreationEva(new \DateTime());
            $em->flush();

            return $this->redirectToRoute('evaluation_findpaye2');
        }

        return $this->render('@Questionnaire/questionnaire/back/catAndEvaluation.html.twig', array(
            'evaluation' => $evaluation,
            'Cat' => $Cat,
            "catss" => $catss,
            'form' => $form->createView(),
            'form2' => $form2->createView(),
        ));
    }

    /**
     * Finds and displays a evaluation entity.
     *
     */
    public function showAction($id)
    {
        $deleteForm = $this->createDeleteForm($id);
        $evaluation = $this->getDoctrine()->getRepository(Evaluation::class)->find($id);
        return $this->render('@Questionnaire/questionnaire/back/test.html.twig', array(
            'evaluation' => $evaluation,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function show2Action(Evaluation $evaluation)
    {
        $deleteForm = $this->createDeleteForm($evaluation);

        return $this->render('@Questionnaire/questionnaire/back/test.html.twig', array(
            'evaluation' => $evaluation,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Displays a form to edit an existing evaluation entity.
     *
     */
    public function editAction(Request $request, Evaluation $evaluation)
    {
        $deleteForm = $this->createDeleteForm($evaluation);
        $editForm = $this->createForm('QuestionnaireBundle\Form\EvaluationType', $evaluation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('evaluation_edit', array('id' => $evaluation->getId()));
        }

        return $this->render('@Questionnaire/questionnaire/back/AjoutCat.html.twig', array(
            'evaluation' => $evaluation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a evaluation entity.
     *
     */
    public function deleteAction(Request $request, Evaluation $evaluation)
    {
        $form = $this->createDeleteForm($evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($evaluation);
            $em->flush();
        }

        return $this->redirectToRoute('evaluation_index');
    }

    /**
     * Creates a form to delete a evaluation entity.
     *
     * @param Evaluation $evaluation The evaluation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Evaluation $evaluation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('evaluation_delete', array('id' => $evaluation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public  function findpayeAction(){//avec dql
        $em = $this ->getDoctrine()->getManager();
        $cats  =$em->getRepository(Evaluation::class)->findpayeDQL();
        return $this->render('@Questionnaire/questionnaire/back/catAndEvaluation.html.twig'
            ,array("cats" => $cats)); //cette return pour tout le formulaire

 }




}
