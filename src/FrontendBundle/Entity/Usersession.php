<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usersession
 *
 * @ORM\Table(name="usersession")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\UsersessionRepository")
 */
class Usersession
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
     * @ORM\Column(name="idsession", type="integer", nullable=true)
     */
    private $idsession;

    /**
     * @var int
     *
     * @ORM\Column(name="turn", type="integer", nullable=true)
     */
    private $turn;

    /**
     * @var int
     *
     * @ORM\Column(name="pocketid", type="integer", nullable=true)
     */
    private $pocketid;


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
     * @return Usersession
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
     * Set turn
     *
     * @param integer $turn
     *
     * @return Usersession
     */
    public function setTurn($turn)
    {
        $this->turn = $turn;

        return $this;
    }

    /**
     * Get turn
     *
     * @return int
     */
    public function getTurn()
    {
        return $this->turn;
    }

    /**
     * Set pocketid
     *
     * @param integer $pocketid
     *
     * @return Usersession
     */
    public function setPocketid($pocketid)
    {
        $this->turn = $pocketid;

        return $this;
    }

    /**
     * Get pocketid
     *
     * @return int
     */
    public function getPocketid()
    {
        return $this->pocketid;
    }

    /**
     * Set idsession
     *
     * @param integer $idsession
     *
     * @return Usersession
     */
    public function setIdsession($idsession)
    {
        $this->idsession = $idsession;

        return $this;
    }

    /**
     * Get idsession
     *
     * @return int
     */
    public function getIdsession()
    {
        return $this->idsession;
    }
}

