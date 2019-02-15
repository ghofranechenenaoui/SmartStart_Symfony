<?php

namespace QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class questionnaireController extends Controller
{
    public function questionnaireAction()
    {
        return $this->render('@Questionnaire/questionnaire/questionnaire.html.twig', array(
            // ...
        ));
    }

}
