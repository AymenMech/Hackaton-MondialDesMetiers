<?php

namespace ChasseBundle\Controller;

use ChasseBundle\Entity\IntAns;
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
    public function searchAction(Request $request)
    {
        /* Get user logged and job chosen before */
        /* Generate form and set data for user and job */
        $form = $this->createForm('ChasseBundle\Form\SearchJobType');
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
          $data =  $form->getData()['answers'];
        $tagsId = array();
          foreach($data as $tag){
              $tagsId[] = $tag->getId();
          }
        $em = $this->getDoctrine()->getRepository('SearchRepository');
           // return $this->redirectToRoute('votevalid');

        }

        return $this->render('interview/searchjob.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function dataAction()
    {
        // Récupération du path absolute et traitement pour récupérer le path vers input.csv
        $appPath = $this->get('kernel')->getRootDir();
        $appPath = explode("/",$appPath);
        array_pop($appPath);

        $dataPath = implode("/", $appPath). "/data.txt";

        // Insertion de chaque ligne du fichier data dans un tableau
        $dataInArray = array();
        $inputcsv = fopen($dataPath, "r");
        while(!feof($inputcsv))
        {
            $line = fgets($inputcsv,1024);
            $dataInArray[] = $line;
        }
        fclose($inputcsv);
        array_pop($dataInArray);
        $arrayData = array();
        $arrayData2 = array();

        // Traitement de chaque ligne du tableau pour séparer l'utilisateur et la grille
        $i=0;
        foreach ($dataInArray as $row) {

            $arrayRow = preg_split('/\s+/', $row);
            $i++;
            array_pop($arrayRow);

            $arrayData[] = $arrayRow[0];
            $arrayData2[] = $arrayRow[1];

        }
        $em = $this->getDoctrine()->getManager();

        // Insertion des données dans la bdd
        for($i = 0; $i < count($arrayData); $i++){
            $grid = new IntAns();
            $grid->setInterviewId(intval($arrayData[$i]));
            $grid->setAnswerId(intval(trim($arrayData2[$i])));
            $em->persist($grid);
            unset($grid);
        }
        $em->flush();

        return $this->redirectToRoute('search_job');

    }



}