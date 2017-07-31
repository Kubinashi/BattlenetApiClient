<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pvp;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class BracketValueObject
{
    /**
     * @var string
     */
    private $slug;

    /**
     * @var int
     */
    private $rating;

    /**
     * @var int
     */
    private $weeklyPlayed;

    /**
     * @var int
     */
    private $weeklyWon;

    /**
     * @var int
     */
    private $weeklyLost;

    /**
     * @var int
     */
    private $seasonPlayed;

    /**
     * @var int
     */
    private $seasonWon;

    /**
     * @var int
     */
    private $seasonLost;

    /**
     * BracketValueObject constructor.
     * @param string $slug
     * @param int    $rating
     * @param int    $weeklyPlayed
     * @param int    $weeklyWon
     * @param int    $weeklyLost
     * @param int    $seasonPlayed
     * @param int    $seasonWon
     * @param int    $seasonLost
     */
    public function __construct(
        $slug,
        $rating,
        $weeklyPlayed,
        $weeklyWon,
        $weeklyLost,
        $seasonPlayed,
        $seasonWon,
        $seasonLost
    ) {
        $this->slug = $slug;
        $this->rating = $rating;
        $this->weeklyPlayed = $weeklyPlayed;
        $this->weeklyWon = $weeklyWon;
        $this->weeklyLost = $weeklyLost;
        $this->seasonPlayed = $seasonPlayed;
        $this->seasonWon = $seasonWon;
        $this->seasonLost = $seasonLost;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return int
     */
    public function getWeeklyPlayed()
    {
        return $this->weeklyPlayed;
    }

    /**
     * @return int
     */
    public function getWeeklyWon()
    {
        return $this->weeklyWon;
    }

    /**
     * @return int
     */
    public function getWeeklyLost()
    {
        return $this->weeklyLost;
    }

    /**
     * @return int
     */
    public function getSeasonPlayed()
    {
        return $this->seasonPlayed;
    }

    /**
     * @return int
     */
    public function getSeasonWon()
    {
        return $this->seasonWon;
    }

    /**
     * @return int
     */
    public function getSeasonLost()
    {
        return $this->seasonLost;
    }
}
