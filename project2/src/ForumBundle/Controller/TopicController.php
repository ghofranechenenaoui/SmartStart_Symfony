<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopicController extends Controller
{
    public function displayUserTopicsAction()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $userId = $user->getId();
        $topics = $user->getTopics();

        if (!$topics) {
            throw $this->createNotFoundException(
                'No topics found '.$userId
            );
        }
        return $this->render('@Forum/forum/user-topics.html.twig', array(
            'topics'=>$topics,
        ));
    }
}
