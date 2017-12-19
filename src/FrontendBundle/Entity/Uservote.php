<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uservote
 *
 * @ORM\Table(name="uservote")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\UservoteRepository")
 */
class Uservote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userid", type="integer", nullable=true)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="postid", type="integer", nullable=true)
     */
    private $postid;

    /**
     * @var int
     *
     * @ORM\Column(name="commentid", type="integer", nullable=true)
     */
    private $commentid;


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
     * Set userid
     *
     * @param integer $userid
     *
     * @return Uservote
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set postid
     *
     * @param integer $postid
     *
     * @return Uservote
     */
    public function setPostid($postid)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return int
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set commentid
     *
     * @param integer $commentid
     *
     * @return Uservote
     */
    public function setCommentid($commentid)
    {
        $this->commentid = $commentid;

        return $this;
    }

    /**
     * Get commentid
     *
     * @return int
     */
    public function getCommentid()
    {
        return $this->commentid;
    }
}

