<?php

namespace ChasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interview
 */
class Interview
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bonusWord;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bonusWord
     *
     * @param string $bonusWord
     * @return Interview
     */
    public function setBonusWord($bonusWord)
    {
        $this->bonusWord = $bonusWord;

        return $this;
    }

    /**
     * Get bonusWord
     *
     * @return string 
     */
    public function getBonusWord()
    {
        return $this->bonusWord;
    }
    /**
     * @var \ChasseBundle\Entity\User
     */
    private $user;

    /**
     * @var \ChasseBundle\Entity\Job
     */
    private $job;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $answers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set user
     *
     * @param \ChasseBundle\Entity\User $user
     * @return Interview
     */
    public function setUser(\ChasseBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ChasseBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set job
     *
     * @param \ChasseBundle\Entity\Job $job
     * @return Interview
     */
    public function setJob(\ChasseBundle\Entity\Job $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \ChasseBundle\Entity\Job 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Add answers
     *
     * @param \ChasseBundle\Entity\Answer $answers
     * @return Interview
     */
    public function addAnswer(\ChasseBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;

        return $this;
    }

    /**
     * Remove answers
     *
     * @param \ChasseBundle\Entity\Answer $answers
     */
    public function removeAnswer(\ChasseBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    public function __toString()
    {
        return strval($this->id);
    }
}
