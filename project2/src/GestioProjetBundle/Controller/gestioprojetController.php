<?php

namespace GestioProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class gestioprojetController extends Controller
{
    public function gestioprojetAction()
    {
        return $this->render('@GestioProjet/gestioprojet/gestioprojet.html.twig', array(
            // ...
        ));
    }


}
