<?php

namespace ChasseBundle\Controller;

use ChasseBundle\Entity\Interview;
use ChasseBundle\Entity\Answer;
use ChasseBundle\Repository\JobRepository;
use ChasseBundle\Repository\AnswerRepository;
use ChasseBundle\Repository\InterviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use ChasseBundle\Entity\User;



class SearchJobController extends Controller
{
    public function searchAction(Request $request, $result)
    {
        /* Get user logged and job chosen before */
        /* Generate form and set data for user and job */
        $form = $this->createForm('ChasseBundle\Form\SearchJobType');
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
          $data =  $form->getData()['answers'];
            $tagsId = array();
              foreach($data as $tag){
                  $tagsId[] = $tag->getId();
              }
          //var_dump($tagsId);
            /**
             * @var $repository $InterviewRepository
             */
            $result = $em->getRepository('ChasseBundle:Interview')->getbysearch();
            //var_dump($result);
            return $this->render('interview/searchjob.html.twig', array(
                'result' => $result,
                'form' => $form->createView()
            ));
        }

        return $this->render('interview/searchjob.html.twig', array(
            'form' => $form->createView(),
            'result' => $result
        ));
    }


}