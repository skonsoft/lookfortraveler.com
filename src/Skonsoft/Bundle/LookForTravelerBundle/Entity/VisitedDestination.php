<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\LookForTravelerBundle\Entity\VisitedDestination
 *
 * @ORM\Table(name="visited_destination")
 * @ORM\Entity
 */
class VisitedDestination
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
     * @var string $country
     *
     * @ORM\Column(name="Country", type="string", length=3, nullable=true)
     */
    private $country;

    /**
     * @var string $town
     *
     * @ORM\Column(name="town", type="string", length=255, nullable=true)
     */
    private $town;

    /**
     * @var string $descriptions
     *
     * @ORM\Column(name="Descriptions", type="text", nullable=true)
     */
    private $descriptions;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    private $user;


}
