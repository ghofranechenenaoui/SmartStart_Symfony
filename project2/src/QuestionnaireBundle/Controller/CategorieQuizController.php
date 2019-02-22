<?php

namespace QuestionnaireBundle\Controller;

use QuestionnaireBundle\Entity\CategorieQuiz;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categoriequiz controller.
 *
 */
class CategorieQuizController extends Controller
{
    /**
     * Lists all categorieQuiz entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $evaluations = $em->getRepository('QuestionnaireBundle:Evaluation')->findAll();

        $categorieQuizzes = $em->getRepository('QuestionnaireBundle:CategorieQuiz')->findAll();

        return $this->render('@Questionnaire/questionnaire/back/catAndEvaluation.html.twig', array(
            'categorieQuizzes' => $categorieQuizzes, 'evaluations' => $evaluations,
        ));
    }

    /**
     * Creates a new categorieQuiz entity.
     *
     */
    public function newAction(Request $request)
    {
        $categorieQuiz = new Categoriequiz();
        $form = $this->createForm('QuestionnaireBundle\Form\CategorieQuizType', $categorieQuiz);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categorieQuiz);
            $em->flush();

            return $this->redirectToRoute('categoriequiz_show', array('id' => $categorieQuiz->getId()));
        }

        return $this->render('categoriequiz/new.html.twig', array(
            'categorieQuiz' => $categorieQuiz,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categorieQuiz entity.
     *
     */
    public function showAction(CategorieQuiz $categorieQuiz)
    {
        $deleteForm = $this->createDeleteForm($categorieQuiz);

        return $this->render('categoriequiz/show.html.twig', array(
            'categorieQuiz' => $categorieQuiz,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categorieQuiz entity.
     *
     */
    public function editAction(Request $request, CategorieQuiz $categorieQuiz)
    {
        $deleteForm = $this->createDeleteForm($categorieQuiz);
        $editForm = $this->createForm('QuestionnaireBundle\Form\CategorieQuizType', $categorieQuiz);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoriequiz_edit', array('id' => $categorieQuiz->getId()));
        }

        return $this->render('categoriequiz/edit.html.twig', array(
            'categorieQuiz' => $categorieQuiz,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categorieQuiz entity.
     *
     */
    public function deleteAction(Request $request, CategorieQuiz $categorieQuiz)
    {
        $form = $this->createDeleteForm($categorieQuiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorieQuiz);
            $em->flush();
        }

        return $this->redirectToRoute('categoriequiz_index');
    }

    /**
     * Creates a form to delete a categorieQuiz entity.
     *
     * @param CategorieQuiz $categorieQuiz The categorieQuiz entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategorieQuiz $categorieQuiz)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoriequiz_delete', array('id' => $categorieQuiz->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }















}
