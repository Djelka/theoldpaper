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
     * @var int
     *
     * @ORM\Column(name="life", type="integer", nullable=true)
     */
    private $life;

    /**
     * @var int
     *
     * @ORM\Column(name="gold", type="integer", nullable=true)
     */
    private $gold;

    /**
     * @var int
     *
     * @ORM\Column(name="sexe", type="integer", nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="typestate", type="integer", nullable=true)
     */
    private $typestate;

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

    /**
     * Set life
     *
     * @param integer $life
     *
     * @return Usersession
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return int
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     *
     * @return Usersession
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set sexe
     *
     * @param integer $sexe
     *
     * @return Usersession
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return int
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set typestate
     *
     * @param integer $typestate
     *
     * @return Usersession
     */
    public function setTypestate($typestate)
    {
        $this->typestate = $typestate;

        return $this;
    }

    /**
     * Get typestate
     *
     * @return int
     */
    public function getTypestate()
    {
        return $this->typestate;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Usersession
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Usersession
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
}

