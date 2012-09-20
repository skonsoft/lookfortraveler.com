<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Entity;

use Application\Sonata\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\LookForTravelerBundle\Entity\User
 *
 * @ORM\Table(name="fos_user_user")
 * @ORM\Entity
 */
class User extends BaseUser
{

    /**
     * @var boolean $maritalStatus
     *
     * @ORM\Column(name="marital_status", type="boolean", nullable=true)
     */
    private $maritalStatus;

    /**
     * @var boolean $kidsNumber
     *
     * @ORM\Column(name="kids_number", type="boolean", nullable=true)
     */
    private $kidsNumber;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=3, nullable=true)
     */
    private $nationality;

    /**
     * @var integer $taille
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var boolean $silouhette
     *
     * @ORM\Column(name="silouhette", type="boolean", nullable=true)
     */
    private $silouhette;

    /**
     * @var boolean $hairClor
     *
     * @ORM\Column(name="hair_clor", type="boolean", nullable=true)
     */
    private $hairClor;

    /**
     * @var boolean $eyeColor
     *
     * @ORM\Column(name="eye_color", type="boolean", nullable=true)
     */
    private $eyeColor;

    /**
     * @var string $residenceCountry
     *
     * @ORM\Column(name="residence_country", type="string", length=3, nullable=true)
     */
    private $residenceCountry;

    /**
     * @var string $residenceTown
     *
     * @ORM\Column(name="residence_town", type="string", length=255, nullable=true)
     */
    private $residenceTown;

    /**
     * @var boolean $studyLevel
     *
     * @ORM\Column(name="study_level", type="boolean", nullable=true)
     */
    private $studyLevel;

    /**
     * @var boolean $activitySector
     *
     * @ORM\Column(name="activity_sector", type="boolean", nullable=true)
     */
    private $activitySector;

    /**
     * @var boolean $profession
     *
     * @ORM\Column(name="profession", type="boolean", nullable=true)
     */
    private $profession;

    /**
     * @var string $careerDescription
     *
     * @ORM\Column(name="career_description", type="text", nullable=true)
     */
    private $careerDescription;

    /**
     * @var AboutMe
     *
     * @ORM\OneToOne(targetEntity="AboutMe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="about_me_id", referencedColumnName="id")
     * })
     */
    private $aboutMe;

}
