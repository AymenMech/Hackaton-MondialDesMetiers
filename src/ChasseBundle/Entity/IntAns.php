<?php

namespace ChasseBundle\Entity;

/**
 * IntAns
 */
class IntAns
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $interviewId;

    /**
     * @var int
     */
    private $answerId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set interviewId
     *
     * @param integer $interviewId
     *
     * @return IntAns
     */
    public function setInterviewId($interviewId)
    {
        $this->interviewId = $interviewId;

        return $this;
    }

    /**
     * Get interviewId
     *
     * @return int
     */
    public function getInterviewId()
    {
        return $this->interviewId;
    }

    /**
     * Set answerId
     *
     * @param integer $answerId
     *
     * @return IntAns
     */
    public function setAnswerId($answerId)
    {
        $this->answerId = $answerId;

        return $this;
    }

    /**
     * Get answerId
     *
     * @return int
     */
    public function getAnswerId()
    {
        return $this->answerId;
    }
}

