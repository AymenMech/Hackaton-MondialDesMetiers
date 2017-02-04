<?php

namespace ChasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 */
class Answer
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $word;


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
     * Set word
     *
     * @param string $word
     * @return Answer
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $interviews;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->interviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add interviews
     *
     * @param \ChasseBundle\Entity\Interview $interviews
     * @return Answer
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

    public function __toString()
    {
        return strval($this->id);
    }
    /**
     * @var string
     */
    private $domain;


    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return Answer
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
}
