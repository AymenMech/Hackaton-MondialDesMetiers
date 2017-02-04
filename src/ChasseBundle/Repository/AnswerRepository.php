<?php

namespace ChasseBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * AnswerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnswerRepository extends EntityRepository
{
    /* Autocompolete query */
    public function searchWords($word){
        $word = $word."%";
        $qb= $this->createQueryBuilder('a')
            ->select('a.word, a.id')
            ->where('a.word LIKE :word')
            ->groupBy('a.word')
            ->setParameter('word', $word)
            ->getQuery();
        return $qb->getResult();

    }

    /* Query for noidead button */
    public function searchRecommend($domain){
        $qb= $this->createQueryBuilder('a')
            ->select('a.word, a.id')
            ->where('a.domain LIKE :domain')
            ->setParameter('domain', $domain)
            ->getQuery();
        return $qb->getResult();

    }

    /* Query to get the 20 most used word in surveys*/
    public function mostUsed(){
        $qb= $this->createQueryBuilder('a')
            ->select('a.word, count(i) as nb')
            ->groupBy('a.word')
            ->innerJoin('a.interviews','i')
            ->orderBy('nb', 'DESC')
            ->setMaxResults(20)
            ->getQuery();
        return $qb->getResult();

    }

    /*public function searchJobs()
    {
        //$tag = $tagsId[0];
        $query = $this->createQueryBuilder('a')
            ->select('a')
            ->innerJoin('a.interviews', 'i');

            $module = $query->expr()->andX();
            $module->add($query->select('job'));
            $module->add($query->from('job', 'j'));
            $module->add($query->leftJoin('j.interview', 'i'));
            $module->add($query->expr()->eq('j.id', 'i.'))


            //->getQuery();


        //echo $query->getSQL();die();
        return $query->getResult();

    }*/

    public function rahhhh($data, $data1)
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a')

            ->where('a.id = ?1')
            //->groupBy('i.id')
            ->setParameter( 1, $data)

            ->getQuery();

        return $qb->getResult();
    }
}

