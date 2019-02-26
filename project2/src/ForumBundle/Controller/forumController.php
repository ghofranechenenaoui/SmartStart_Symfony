<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ForumBundle\Entity\Forum;

class forumController extends Controller
{
    public function forumAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('ForumBundle:Category')->findAll();
        if (!$categories) {
            throw $this->createNotFoundException(
                'No categories found '
            );
        }



        $forums = $em->getRepository('ForumBundle:Forum')->findAll();
        if (!$forums) {
            throw $this->createNotFoundException(
                'No forums found '
            );
        }

        return $this->render('@Forum/forum/forum.html.twig', array(
             'categories'=>$categories, 'forums'=>$forums
        ));
    }

    public function displayTopicsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = $em->getRepository('ForumBundle:Forum')->find($id);
        $topics= $forum->getTopics();
        if (!$topics) {
            throw $this->createNotFoundException(
                'No topics found '
            );
        }
        return $this->render('@Forum/forum/display-topics.html.twig', array(
            'topics'=>$topics, 'forum'=>$forum
        ));
    }


}
