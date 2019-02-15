<?php

namespace GestioProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render("@GestioProjet/Default/index.html.twig");
    }
}
