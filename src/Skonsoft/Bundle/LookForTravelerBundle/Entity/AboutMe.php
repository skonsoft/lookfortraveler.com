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
     * Set favoriteFilms
     *
     * @param string $favoriteFilms
     * @return AboutMe
     */
    public function setFavoriteFilms($favoriteFilms)
    {
        $this->favoriteFilms = $favoriteFilms;
    
        return $this;
    }

    /**
     * Get favoriteFilms
     *
     * @return string 
     */
    public function getFavoriteFilms()
    {
        return $this->favoriteFilms;
    }

    /**
     * Set favoriteBooks
     *
     * @param string $favoriteBooks
     * @return AboutMe
     */
    public function setFavoriteBooks($favoriteBooks)
    {
        $this->favoriteBooks = $favoriteBooks;
    
        return $this;
    }

    /**
     * Get favoriteBooks
     *
     * @return string 
     */
    public function getFavoriteBooks()
    {
        return $this->favoriteBooks;
    }

    /**
     * Set favoriteArtists
     *
     * @param string $favoriteArtists
     * @return AboutMe
     */
    public function setFavoriteArtists($favoriteArtists)
    {
        $this->favoriteArtists = $favoriteArtists;
    
        return $this;
    }

    /**
     * Get favoriteArtists
     *
     * @return string 
     */
    public function getFavoriteArtists()
    {
        return $this->favoriteArtists;
    }

    /**
     * Set favoriteEvenings
     *
     * @param string $favoriteEvenings
     * @return AboutMe
     */
    public function setFavoriteEvenings($favoriteEvenings)
    {
        $this->favoriteEvenings = $favoriteEvenings;
    
        return $this;
    }

    /**
     * Get favoriteEvenings
     *
     * @return string 
     */
    public function getFavoriteEvenings()
    {
        return $this->favoriteEvenings;
    }

    /**
     * Set favoriteDestinations
     *
     * @param string $favoriteDestinations
     * @return AboutMe
     */
    public function setFavoriteDestinations($favoriteDestinations)
    {
        $this->favoriteDestinations = $favoriteDestinations;
    
        return $this;
    }

    /**
     * Get favoriteDestinations
     *
     * @return string 
     */
    public function getFavoriteDestinations()
    {
        return $this->favoriteDestinations;
    }

    /**
     * Set idealPartenerDescription
     *
     * @param string $idealPartenerDescription
     * @return AboutMe
     */
    public function setIdealPartenerDescription($idealPartenerDescription)
    {
        $this->idealPartenerDescription = $idealPartenerDescription;
    
        return $this;
    }

    /**
     * Get idealPartenerDescription
     *
     * @return string 
     */
    public function getIdealPartenerDescription()
    {
        return $this->idealPartenerDescription;
    }

    /**
     * Set freeSpace
     *
     * @param string $freeSpace
     * @return AboutMe
     */
    public function setFreeSpace($freeSpace)
    {
        $this->freeSpace = $freeSpace;
    
        return $this;
    }

    /**
     * Get freeSpace
     *
     * @return string 
     */
    public function getFreeSpace()
    {
        return $this->freeSpace;
    }
}