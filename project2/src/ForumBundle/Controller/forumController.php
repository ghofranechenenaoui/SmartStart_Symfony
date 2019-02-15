<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class forumController extends Controller
{
    public function forumAction()
    {
        return $this->render('@Forum/forum/forum.html.twig');
    }

}
