<?php

namespace ChasseBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();

    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interviews;


    /**
     * Add interviews
     *
     * @param \ChasseBundle\Entity\Interview $interviews
     * @return User
     */
    public function addInterview(\ChasseBundle\Entity\Interview $interviews)
    {
        $this->interviews[] = $interviews;

        return $this;
    }

    /**
     * Remove interviews
     *
     * @param \ChasseBundle\Entity\Interview $interviews
     */
    public function removeInterview(\ChasseBundle\Entity\Interview $interviews)
    {
        $this->interviews->removeElement($interviews);
    }

    /**
     * Get interviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInterviews()
    {
        return $this->interviews;
    }
    /**
     * @var string
     */
    private $gender;

    /**
     * @var integer
     */
    private $department;

    /**
     * @var boolean
     */
    private $newsletter;


    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set department
     *
     * @param integer $department
     *
     * @return User
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return integer
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return User
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }
    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $age;


    /**
     * Set status
     *
     * @param string $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set age
     *
     * @param \integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \integer
     */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @var integer
     */
    private $satisfaction;


    /**
     * Set satisfaction
     *
     * @param integer $satisfaction
     *
     * @return User
     */
    public function setSatisfaction($satisfaction)
    {
        $this->satisfaction = $satisfaction;

        return $this;
    }

    /**
     * Get satisfaction
     *
     * @return integer
     */
    public function getSatisfaction()
    {
        return $this->satisfaction;
    }
    /**
     * @var string
     */
    private $comment;


    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return User
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
