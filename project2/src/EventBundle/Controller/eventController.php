<?php

namespace EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class eventController extends Controller
{
    public function eventAction()
    {
        return $this->render("@Event/event/event.html.twig");
    }

}
