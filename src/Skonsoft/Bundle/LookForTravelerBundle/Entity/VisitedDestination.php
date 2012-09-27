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
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set country
     *
     * @param string $country
     * @return VisitedDestination
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return VisitedDestination
     */
    public function setTown($town)
    {
        $this->town = $town;
    
        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set descriptions
     *
     * @param string $descriptions
     * @return VisitedDestination
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    
        return $this;
    }

    /**
     * Get descriptions
     *
     * @return string 
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Set user
     *
     * @param Skonsoft\Bundle\LookForTravelerBundle\Entity\User $user
     * @return VisitedDestination
     */
    public function setUser(\Skonsoft\Bundle\LookForTravelerBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Skonsoft\Bundle\LookForTravelerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}