<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datauser
 *
 * @ORM\Table(name="datauser")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\DatauserRepository")
 */
class Datauser
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
     * @ORM\Column(name="iduser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var int
     *
     * @ORM\Column(name="nbpost", type="integer", nullable=true)
     */
    private $nbpost;

    /**
     * @var int
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var int
     *
     * @ORM\Column(name="exp", type="integer", nullable=true)
     */
    private $exp;

    /**
     * @var int
     *
     * @ORM\Column(name="nextlvlexp", type="integer", nullable=true)
     */
    private $nextlvlexp;

    /**
     * @var int
     *
     * @ORM\Column(name="nbvote", type="integer", nullable=true)
     */
    private $nbvote;

    /**
     * @var int
     *
     * @ORM\Column(name="nbcounter", type="integer", nullable=true)
     */
    private $nbcounter;

    /**
     * @var int
     *
     * @ORM\Column(name="nbgame", type="integer", nullable=true)
     */
    private $nbgame;


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
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return Datauser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set nbpost
     *
     * @param integer $nbpost
     *
     * @return Datauser
     */
    public function setNbpost($nbpost)
    {
        $this->nbpost = $nbpost;

        return $this;
    }

    /**
     * Get nbpost
     *
     * @return int
     */
    public function getNbpost()
    {
        return $this->nbpost;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     *
     * @return Datauser
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     *
     * @return Datauser
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set nextlvlexp
     *
     * @param integer $nextlvlexp
     *
     * @return Datauser
     */
    public function setNextlvlexp($nextlvlexp)
    {
        $this->nextlvlexp = $nextlvlexp;

        return $this;
    }

    /**
     * Get nextlvlexp
     *
     * @return int
     */
    public function getNextlvlexp()
    {
        return $this->nextlvlexp;
    }

    /**
     * Set nbvote
     *
     * @param integer $nbvote
     *
     * @return Datauser
     */
    public function setNbvote($nbvote)
    {
        $this->nbvote = $nbvote;

        return $this;
    }

    /**
     * Get nbvote
     *
     * @return int
     */
    public function getNbvote()
    {
        return $this->nbvote;
    }

    /**
     * Set nbcounter
     *
     * @param integer $nbcounter
     *
     * @return Datauser
     */
    public function setNbcounter($nbcounter)
    {
        $this->nbcounter = $nbcounter;

        return $this;
    }

    /**
     * Get nbcounter
     *
     * @return int
     */
    public function getNbcounter()
    {
        return $this->nbcounter;
    }

    /**
     * Set nbgame
     *
     * @param integer $nbgame
     *
     * @return Datauser
     */
    public function setNbgame($nbgame)
    {
        $this->nbgame = $nbgame;

        return $this;
    }

    /**
     * Get nbgame
     *
     * @return int
     */
    public function getNbgame()
    {
        return $this->nbgame;
    }
}

