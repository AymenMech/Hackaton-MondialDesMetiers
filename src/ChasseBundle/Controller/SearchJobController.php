<?php

namespace ChasseBundle\Controller;

use ChasseBundle\Entity\Interview;
use ChasseBundle\Entity\Job;
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
    public function searchAction(Request $request)
    {
        /* Get user logged and job chosen before */
        /* Generate form and set data for user and job */
        $form = $this->createForm('ChasseBundle\Form\SearchJobType');
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            //$em = $this->getDoctrine()->getRepository('SearchRepository');
            var_dump($request);
            return $this->render('interview:searchjob.html.twig', array(
                //'result' => $result,
            ));

        }

        return $this->render('interview/searchjob.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}