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


}
