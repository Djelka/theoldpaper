<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pocket
 *
 * @ORM\Table(name="pocket")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\PocketRepository")
 */
class Pocket
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
     * @ORM\Column(name="pocketid", type="integer", nullable=true)
     */
    private $pocketid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemname", type="string", length=255, nullable=true)
     */
    private $itemname;


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
     * Set pocketid
     *
     * @param integer $pocketid
     *
     * @return Pocket
     */
    public function setPocketid($pocketid)
    {
        $this->pocketid = $pocketid;

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
     * Set itemname
     *
     * @param string $itemname
     *
     * @return Pocket
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string
     */
    public function getItemname()
    {
        return $this->itemname;
    }
}

