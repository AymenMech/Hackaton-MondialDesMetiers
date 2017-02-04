<?php

namespace ChasseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 */
class Job
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $domain;


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
     * Set name
     *
     * @param string $name
     * @return Job
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return Job
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
     * @return Job
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
}
