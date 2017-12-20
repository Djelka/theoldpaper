<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\PostRepository")
 */
class Post
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
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

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
     * @var int
     *
     * @ORM\Column(name="author", type="integer", nullable=true)
     */
    private $author;

    /**
     * @var int
     *
     * @ORM\Column(name="choice", type="integer", nullable=true)
     */
    private $choice;


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
     * Set content
     *
     * @param string $content
     *
     * @return Post
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

    /**
     * Set goodvote
     *
     * @param integer $goodvote
     *
     * @return Post
     */
    public function setGoodvote($goodvote)
    {
        $this->goodvote = $goodvote;

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
     * @return Post
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
     * Set choice
     *
     * @param integer $choice
     *
     * @return Post
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;

        return $this;
    }

    /**
     * Get choice
     *
     * @return int
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set author
     *
     * @param integer $author
     *
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

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
}

