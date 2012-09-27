<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\LookForTravelerBundle\Entity\StationTrip
 *
 * @ORM\Table(name="station_trip")
 * @ORM\Entity
 */
class StationTrip
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
     * @var string $plcae
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=false)
     */
    private $place;

    /**
     * @var \DateTime $arraivalDate
     *
     * @ORM\Column(name="arrival_date", type="datetime", nullable=false)
     */
    private $arrivalDate;

    /**
     * @var \DateTime $departureDate
     *
     * @ORM\Column(name="departure_date", type="datetime", nullable=false)
     */
    private $departureDate;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @var bool $isFirst
     *
     * @ORM\Column(name="is_first", type="boolean", nullable=true, options={"default" = false})
     */
    private $isFirst;

    /**
     * @var StationTrip
     *
     * @ORM\OneToOne(targetEntity="StationTrip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="next_station_trip_id", referencedColumnName="id")
     * })
     */
    private $nextStationTrip;

    /**
     * @var Trip
     *
     * @ORM\ManyToOne(targetEntity="Trip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trip_id", referencedColumnName="id")
     * })
     */
    private $trip;



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
     * Set place
     *
     * @param string $place
     * @return StationTrip
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set arrivalDate
     *
     * @param \DateTime $arrivalDate
     * @return StationTrip
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    
        return $this;
    }

    /**
     * Get arrivalDate
     *
     * @return \DateTime 
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Set departureDate
     *
     * @param \DateTime $departureDate
     * @return StationTrip
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    
        return $this;
    }

    /**
     * Get departureDate
     *
     * @return \DateTime 
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return StationTrip
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
     * Set isFirst
     *
     * @param boolean $isFirst
     * @return StationTrip
     */
    public function setIsFirst($isFirst)
    {
        $this->isFirst = $isFirst;
    
        return $this;
    }

    /**
     * Get isFirst
     *
     * @return boolean 
     */
    public function getIsFirst()
    {
        return $this->isFirst;
    }

    /**
     * Set nextStationTrip
     *
     * @param Skonsoft\Bundle\LookForTravelerBundle\Entity\StationTrip $nextStationTrip
     * @return StationTrip
     */
    public function setNextStationTrip(\Skonsoft\Bundle\LookForTravelerBundle\Entity\StationTrip $nextStationTrip = null)
    {
        $this->nextStationTrip = $nextStationTrip;
    
        return $this;
    }

    /**
     * Get nextStationTrip
     *
     * @return Skonsoft\Bundle\LookForTravelerBundle\Entity\StationTrip 
     */
    public function getNextStationTrip()
    {
        return $this->nextStationTrip;
    }

    /**
     * Set trip
     *
     * @param Skonsoft\Bundle\LookForTravelerBundle\Entity\Trip $trip
     * @return StationTrip
     */
    public function setTrip(\Skonsoft\Bundle\LookForTravelerBundle\Entity\Trip $trip = null)
    {
        $this->trip = $trip;
    
        return $this;
    }

    /**
     * Get trip
     *
     * @return Skonsoft\Bundle\LookForTravelerBundle\Entity\Trip 
     */
    public function getTrip()
    {
        return $this->trip;
    }
}