<?php

namespace ChasseBundle\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FrontController extends Controller
{
    public function howtoAction()
    {
        // somehow create a Response object, like by rendering a template
        $response = $this->render('Front/howto.html.twig', []);

        // cache for 3600 seconds
        $response->setSharedMaxAge(2629000);

        return $response;
    }

    public function legalmentionAction()
    {
        $response = $this->render('Front/legalmention.html.twig', array());

        $response->setSharedMaxAge(2629000);

        return $response;
    }

    public function learnmoreAction()
    {
        return $this->render('Front/learnmore.html.twig', array(// ...
        ));
    }

    public function countdownAction()
    {
        return $this->render('Front/countdown.html.twig', array(// ...
        ));
    }

    public function finishedAction(){
        $response = $this->render('Front/end.html.twig', array(// ...
        ));

        $response->setSharedMaxAge(2629000);

        return $response;
    }
}
