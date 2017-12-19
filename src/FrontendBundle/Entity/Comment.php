<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="idpost", type="integer", nullable=true)
     */
    private $idpost;

    /**
     * @var string
     *
     * @ORM\Column(name="iscounter", type="string", length=255, nullable=true)
     */
    private $iscounter;

    /**
     * @var int
     *
     * @ORM\Column(name="author", type="integer", nullable=true)c
     */
    private $author;

    /**
     * @var int
     *
     * @ORM\Column(name="goodvote", type="integer", nullable=true)
     */
    private $goodvote;

    /**
     * @var int
     *
     * @ORM\Column(name="badvote", type="integer", nullable=true)
     */
    private $badvote;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;


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
     * Set idpost
     *
     * @param integer $idpost
     *
     * @return Comment
     */
    public function setIdpost($idpost)
    {
        $this->idpost = $idpost;

        return $this;
    }

    /**
     * Get idpost
     *
     * @return int
     */
    public function getIdpost()
    {
        return $this->idpost;
    }

    /**
     * Set iscounter
     *
     * @param string $iscounter
     *
     * @return Comment
     */
    public function setIscounter($iscounter)
    {
        $this->iscounter = $iscounter;

        return $this;
    }

    /**
     * Get iscounter
     *
     * @return string
     */
    public function getIscounter()
    {
        return $this->iscounter;
    }

    /**
     * Set goodvote
     *
     * @param integer $goodvote
     *
     * @return Comment
     */
    public function setGoodvote($goodvote)
    {
        $this->goodvote = $goodvote;

        return $this;
    }

    /**
     * Get author
     *
     * @return int
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author
     *
     * @param integer $author
     *
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get goodvote
     *
     * @return int
     */
    public function getGoodvote()
    {
        return $this->goodvote;
    }

    /**
     * Set badvote
     *
     * @param integer $badvote
     *
     * @return Comment
     */
    public function setBadvote($badvote)
    {
        $this->badvote = $badvote;

        return $this;
    }

    /**
     * Get badvote
     *
     * @return int
     */
    public function getBadvote()
    {
        return $this->badvote;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

