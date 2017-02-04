<?php


namespace ChasseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class UserRepository extends EntityRepository
{
    //nb of male/female users > ok tested on workbench : SELECT gender, COUNT(gender) FROM mondialbdd.user group by gender
    public function countGender()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u.gender, count(u.gender) as nb')
            ->groupBy('u.gender')
            ->getQuery();

        return $qb->getScalarResult();
    }

    //classment of the most registered status among users (student, employee, etc.) > ok tested on workbench, SELECT status, COUNT(status) FROM mondialbdd.user group by status
    public function getMostRegStatus()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u.status, count(u.status) as nb')
            ->groupBy('u.status')
            ->orderBy('nb', 'DESC')
            ->getQuery();

        return $qb->getScalarResult();
    }

    //classment by age category
    public function getAgeCategories($ageMin, $ageMax) {
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.age)')
            ->where('u.age >= :ageMin')
            ->andWhere('u.age <= :ageMax')
            ->setParameter('ageMin', $ageMin)
            ->setParameter('ageMax', $ageMax)
            ->getQuery();

        return $qb->getSingleScalarResult();
    }

    // check if satisfaction already update
    public function checkSatisf($user)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u.satisfaction')
            ->where('u.id = :user')
            ->setParameter('user', $user)
            ->getQuery();
        return $qb->getSingleScalarResult();
    }

    //get most registered department
    public function getMostRegDepartment()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u.department, count(u.department) as nb')
            ->groupBy('u.department')
            ->orderBy('nb', 'DESC')
            ->getQuery();

        return $qb->getScalarResult();
    }

    //list of email who subscribed newsletter > ok tested on workbench : SELECT email FROM mondialbdd.user WHERE newsletter = true
    //edit : 01/18 > added paginator

    /**
     * @param $first_result integer
     * @param int $max_results integer
     * @return Paginator
     */

    const MAX_RESULT = 10;

    public function getSubscribers($first_result, $paginator = true)
    {

        $qb = $this->createQueryBuilder('user')
            ->select('user')
            ->where('user.newsletter=true')
            ->setFirstResult($first_result);
            if(true === $paginator) {
                $qb->setMaxResults(self::MAX_RESULT);
                $result = new Paginator($qb);
            } else {
                $result = $qb->getQuery()->getResult();
            }

        return $result;
    }
}