<?php

namespace Wobble\GridRef;

class Cartesian
{
    /** @var string */
    protected $easting;

    /** @var string */
    protected $northing;

    /** @var string */
    protected $accuracy;

    /** @var string */
    protected $datum;

    public function __construct(string $datum, string $easting, string $northing, string $accuracy)
    {
        $this->datum = $datum;
        $this->easting = $easting;
        $this->northing = $northing;
        $this->accuracy = $accuracy;
    }

    public function getEasting(): string
    {
        return $this->easting;
    }

    public function getNorthing(): string
    {
        return $this->northing;
    }

    public function getDatum(): string
    {
        return $this->datum;
    }

    public function getAccuracy(): string
    {
        return $this->accuracy;
    }

    public function __toString(): string
    {
        return "$this->datum($this->easting, $this->northing) [{$this->accuracy}m]";
    }
}