<?php

namespace VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class vitrineController extends Controller
{
    public function vitrineAction()
    {
        return $this->render('@Vitrine/vitrine/vitrine.html.twig', array(
            // ...
        ));
    }

}
