<?php

namespace PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class portfolioController extends Controller
{
    public function portfolioAction()
    {
        return $this->render('@Portfolio/portfolio/portfolio.html.twig', array(
            // ...
        ));
    }

}
