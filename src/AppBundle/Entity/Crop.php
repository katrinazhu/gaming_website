<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Crop
 *
 * @ORM\Entity()
 * @ORM\Table(name="crop")
 */
class Crop {
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="dateBought")
     */
    private $dateBought;

    /**
     * @var int
     *
     * @ORM\Column(name="personnageID", type="integer")
     */
    private $personnageID;

    protected $harvestDate;
    protected $timeLeft;
    protected $now;

    // constructor initializes timestamp of dateBought
    public function __construct() {
        $this->getDateBought(new \DateTime());
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Crop
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set dateBought
     *
     * @param \DateTime $dateBought
     *
     * @return Crop
     */
    public function setDateBought($dateBought) {
        $this->dateBought = $dateBought;

        return $this;
    }

    /**
     * Get dateBought
     *
     * @return \DateTime
     */
    public function getDateBought() {
        return $this->dateBought;
    }

    /**
     * Set personnageID
     *
     * @param integer $personnageID
     *
     * @return Crop
     */
    public function setPersonnageID($personnageID) {
        $this->personnageID = $personnageID;

        return $this;
    }

    /**
     * Get personnageID
     *
     * @return int
     */
    public function getPersonnageID() {
        return $this->personnageID;
    }

    public function getHarvestTime() {
        if ($this->getType() == 'wheat') {
            return '+1 minute';
        } else if ($this->getType() == 'corn') {
            return '+5 minutes';
        } else if ($this->getType() == 'carrots') {
            return '+30 minutes';
        } else if ($this->getType() == 'strawberries') {
            return '+1 hour';
        } else if ($this->getType() == 'watermelon') {
            return '+3 hours';
        } else {
            return null;
        }
    }

    /**
     * Get harvestDate
     *
     * @return \DateTime
     */
    public function getHarvestDate() {
        $harvestDate = clone $this->getDateBought();
        $harvestDate->modify($this->getHarvestTime());
        return $harvestDate;
    }

    /**
     * Get timeLeft
     *
     * @return \DateTime
     */
    public function timeLeft() {
        $harvestDate = clone $this->getDateBought();
        $timestamp = $this->getDateBought();
        $harvestDate->modify($this->getHarvestTime());

        // find current time
        $now = new \DateTime("now");

        // calculate and return time left
        $timeLeft = $harvestDate->diff($now);
        return $timeLeft;
    }

    /**
     * Get now
     *
     * @return \DateTime
     */
    public function getNow() {
        return new \DateTime("now");
    }
}
