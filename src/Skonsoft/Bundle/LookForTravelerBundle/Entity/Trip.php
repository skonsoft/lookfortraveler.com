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
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime $returnDate
     *
     * @ORM\Column(name="return_date", type="datetime", nullable=false)
     */
    private $returnDate;

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
     * Constructor
     */
    public function __construct()
    {
        
    }

}
