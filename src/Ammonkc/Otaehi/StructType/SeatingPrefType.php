<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatingPrefType StructType
 * @subpackage Structs
 */
class SeatingPrefType extends AbstractStructBase
{
    /**
     * The SeatDirection
     * @var UNKNOWN
     */
    public $SeatDirection;
    /**
     * The SeatLocation
     * @var string
     */
    public $SeatLocation;
    /**
     * The SeatPosition
     * @var string
     */
    public $SeatPosition;
    /**
     * The SeatRow
     * @var string
     */
    public $SeatRow;
    /**
     * Constructor method for SeatingPrefType
     * @uses SeatingPrefType::setSeatDirection()
     * @uses SeatingPrefType::setSeatLocation()
     * @uses SeatingPrefType::setSeatPosition()
     * @uses SeatingPrefType::setSeatRow()
     * @param UNKNOWN $seatDirection
     * @param string $seatLocation
     * @param string $seatPosition
     * @param string $seatRow
     */
    public function __construct(UNKNOWN $seatDirection = null, $seatLocation = null, $seatPosition = null, $seatRow = null)
    {
        $this
            ->setSeatDirection($seatDirection)
            ->setSeatLocation($seatLocation)
            ->setSeatPosition($seatPosition)
            ->setSeatRow($seatRow);
    }
    /**
     * Get SeatDirection value
     * @return UNKNOWN|null
     */
    public function getSeatDirection()
    {
        return $this->SeatDirection;
    }
    /**
     * Set SeatDirection value
     * @param UNKNOWN $seatDirection
     * @return \Ammonkc\Otaehi\StructType\SeatingPrefType
     */
    public function setSeatDirection(UNKNOWN $seatDirection = null)
    {
        $this->SeatDirection = $seatDirection;
        return $this;
    }
    /**
     * Get SeatLocation value
     * @return string|null
     */
    public function getSeatLocation()
    {
        return $this->SeatLocation;
    }
    /**
     * Set SeatLocation value
     * @param string $seatLocation
     * @return \Ammonkc\Otaehi\StructType\SeatingPrefType
     */
    public function setSeatLocation($seatLocation = null)
    {
        // validation for constraint: string
        if (!is_null($seatLocation) && !is_string($seatLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatLocation)), __LINE__);
        }
        $this->SeatLocation = $seatLocation;
        return $this;
    }
    /**
     * Get SeatPosition value
     * @return string|null
     */
    public function getSeatPosition()
    {
        return $this->SeatPosition;
    }
    /**
     * Set SeatPosition value
     * @param string $seatPosition
     * @return \Ammonkc\Otaehi\StructType\SeatingPrefType
     */
    public function setSeatPosition($seatPosition = null)
    {
        // validation for constraint: string
        if (!is_null($seatPosition) && !is_string($seatPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatPosition)), __LINE__);
        }
        $this->SeatPosition = $seatPosition;
        return $this;
    }
    /**
     * Get SeatRow value
     * @return string|null
     */
    public function getSeatRow()
    {
        return $this->SeatRow;
    }
    /**
     * Set SeatRow value
     * @param string $seatRow
     * @return \Ammonkc\Otaehi\StructType\SeatingPrefType
     */
    public function setSeatRow($seatRow = null)
    {
        // validation for constraint: string
        if (!is_null($seatRow) && !is_string($seatRow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatRow)), __LINE__);
        }
        $this->SeatRow = $seatRow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\SeatingPrefType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
