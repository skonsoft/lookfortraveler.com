<?php

namespace Skonsoft\Bundle\LookForTravelerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skonsoft\Bundle\LookForTravelerBundle\Entity\AboutMe
 *
 * @ORM\Table(name="about_me")
 * @ORM\Entity
 */
class AboutMe
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
     * @var string $favoriteFilms
     *
     * @ORM\Column(name="favorite_films", type="text", nullable=true)
     */
    private $favoriteFilms;

    /**
     * @var string $favoriteBooks
     *
     * @ORM\Column(name="favorite_books", type="text", nullable=true)
     */
    private $favoriteBooks;

    /**
     * @var string $favoriteArtists
     *
     * @ORM\Column(name="favorite_artists", type="text", nullable=true)
     */
    private $favoriteArtists;

    /**
     * @var string $favoriteEvenings
     *
     * @ORM\Column(name="favorite_evenings", type="text", nullable=true)
     */
    private $favoriteEvenings;

    /**
     * @var string $favoriteDestinations
     *
     * @ORM\Column(name="favorite_destinations", type="text", nullable=true)
     */
    private $favoriteDestinations;

    /**
     * @var string $idealPartenerDescription
     *
     * @ORM\Column(name="ideal_partener_description", type="text", nullable=true)
     */
    private $idealPartenerDescription;

    /**
     * @var string $freeSpace
     *
     * @ORM\Column(name="free_space", type="text", nullable=true)
     */
    private $freeSpace;


}
