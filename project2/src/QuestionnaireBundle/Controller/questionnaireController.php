<?php

namespace QuestionnaireBundle\Controller;

use QuestionnaireBundle\Form\CategorieQuizType;
use QuestionnaireBundle\Form\ContactQuizType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class questionnaireController extends Controller
{


    public function contactAction(Request $request)
    {
        // Create the form according to the FormType created previously.
        // And give the proper parameters
        $form =
            $this->createForm(ContactQuizType::class,null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :

                    return $this->redirectToRoute('contact');
                }else{
                    // An error ocurred, handle
                    var_dump("Errooooor :(");
                }
            }
        }

        return $this->render('@Questionnaire/questionnaire/front/quiz1Correct.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function sendEmail($data){
        $myappContactMail = 'ghofrane.chenenaoui@esprit.tn';
        $myappContactPassword = '181SFT1029';

        // In this case we'll use the ZOHO mail services.
        // If your service is another, then read the following article to know which smpt code to use and which port
        // http://ourcodeworld.com/articles/read/14/swiftmailer-send-mails-from-php-easily-and-effortlessly
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);

        $message = \Swift_Message::newInstance(
            "Our Code World Contact Form ".$data["subject"])
            ->setFrom(array($myappContactMail => "Message by ".$data["name"]))
            ->setTo(array(
                $myappContactMail => $myappContactMail
            ))
            ->setBody($data["message"]."<br>ContactMail :".$data["email"]);
        $mailer->send($message);

        return $this->render('@Questionnaire/questionnaire/front/quiz1.html.twig');
    }






    public function questionnaireAction()
    {
        return $this->render('@Questionnaire/questionnaire/front/quiz1.html.twig', array(
        ));
    }


    public function questionnaire2Action()
    {
        return $this->render('@Questionnaire/questionnaire/front/quiz2.html.twig', array(
        ));
    }

    public function questionnaire3Action()
    {
        return $this->render('@Questionnaire/questionnaire/front/quiz3.html.twig', array(
        ));
    }
    public function back1Action()
    {
        return $this->render('@Questionnaire/questionnaire/back/Niveauxquiz.html.twig', array(
        ));
    }
    public function back2Action()
    {
        return $this->render('@Questionnaire/questionnaire/back/catAndEvaluation.html.twig', array(
        ));
    }
    public function back3Action()
    {
        return $this->render('@Questionnaire/questionnaire/back/QuestionAll.html.twig', array(
        ));
    }












}
