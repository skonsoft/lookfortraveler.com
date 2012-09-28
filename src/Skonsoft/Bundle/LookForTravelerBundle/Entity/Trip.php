<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\LookForTravelerBundle\Entity\Trip
 *
 * @ORM\Table(name="trip")
 * @ORM\Entity
 */
class Trip
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;
    /**
     * @var \DateTime $startTime
     *
     * @ORM\Column(name="start_time", type="time", nullable=false)
     */
    private $startTime;

    /**
     * @var \DateTime $returnDate
     *
     * @ORM\Column(name="return_date", type="datetime", nullable=false)
     */
    private $returnDate;
    
    /**
     * @var \DateTime $returnTime
     *
     * @ORM\Column(name="return_time", type="time", nullable=false)
     */
    private $returnTime;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    private $price;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string $startPlace
     *
     * @ORM\Column(name="start_place", type="string", length=255, nullable=false)
     */
    private $startPlace;

    /**
     * @var string $returnPlace
     *
     * @ORM\Column(name="return_place", type="string", length=255, nullable=false)
     */
    private $returnPlace;

    /**
     * @var boolean $status
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;
    
    /**
     * the authorized travelers that can participate on this trip.
     * 
     *  1: all
     *  2: group
     *  3: only girls
     *  4: only boys
     * 
     * @var integer
     * 
     * @ORM\Column(name="authorized_category_traveler", type="integer", nullable=false)
     */
    private $authorizedCategoryTraveler = 1;

    /**
     * Constructor
     */
    public function __construct()
    {
        
    }


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
     * @return Trip
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Trip
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     * @return Trip
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;
    
        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime 
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Trip
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Trip
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set startPlace
     *
     * @param string $startPlace
     * @return Trip
     */
    public function setStartPlace($startPlace)
    {
        $this->startPlace = $startPlace;
    
        return $this;
    }

    /**
     * Get startPlace
     *
     * @return string 
     */
    public function getStartPlace()
    {
        return $this->startPlace;
    }

    /**
     * Set returnPlace
     *
     * @param string $returnPlace
     * @return Trip
     */
    public function setReturnPlace($returnPlace)
    {
        $this->returnPlace = $returnPlace;
    
        return $this;
    }

    /**
     * Get returnPlace
     *
     * @return string 
     */
    public function getReturnPlace()
    {
        return $this->returnPlace;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Trip
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set authorizedCategoryTraveler
     *
     * @param integer $authorizedCategoryTraveler
     * @return Trip
     */
    public function setAuthorizedCategoryTraveler($authorizedCategoryTraveler)
    {
        $this->authorizedCategoryTraveler = $authorizedCategoryTraveler;
    
        return $this;
    }

    /**
     * Get authorizedCategoryTraveler
     *
     * @return integer 
     */
    public function getAuthorizedCategoryTraveler()
    {
        return $this->authorizedCategoryTraveler;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Trip
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    
        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set returnTime
     *
     * @param \DateTime $returnTime
     * @return Trip
     */
    public function setReturnTime($returnTime)
    {
        $this->returnTime = $returnTime;
    
        return $this;
    }

    /**
     * Get returnTime
     *
     * @return \DateTime 
     */
    public function getReturnTime()
    {
        return $this->returnTime;
    }
}