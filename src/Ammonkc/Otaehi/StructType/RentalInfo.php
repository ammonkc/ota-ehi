<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalInfo StructType
 * @subpackage Structs
 */
class RentalInfo extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * @var \Ammonkc\Otaehi\StructType\LocationType
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * @var \Ammonkc\Otaehi\StructType\LocationType
     */
    public $ReturnLocation;
    /**
     * The PickUpDateTime
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * @var string
     */
    public $ReturnDateTime;
    /**
     * Constructor method for RentalInfo
     * @uses RentalInfo::setPickUpLocation()
     * @uses RentalInfo::setReturnLocation()
     * @uses RentalInfo::setPickUpDateTime()
     * @uses RentalInfo::setReturnDateTime()
     * @param \Ammonkc\Otaehi\StructType\LocationType $pickUpLocation
     * @param \Ammonkc\Otaehi\StructType\LocationType $returnLocation
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     */
    public function __construct(\Ammonkc\Otaehi\StructType\LocationType $pickUpLocation = null, \Ammonkc\Otaehi\StructType\LocationType $returnLocation = null, $pickUpDateTime = null, $returnDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime);
    }
    /**
     * Get PickUpLocation value
     * @return \Ammonkc\Otaehi\StructType\LocationType|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \Ammonkc\Otaehi\StructType\LocationType $pickUpLocation
     * @return \Ammonkc\Otaehi\StructType\RentalInfo
     */
    public function setPickUpLocation(\Ammonkc\Otaehi\StructType\LocationType $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \Ammonkc\Otaehi\StructType\LocationType|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Ammonkc\Otaehi\StructType\LocationType $returnLocation
     * @return \Ammonkc\Otaehi\StructType\RentalInfo
     */
    public function setReturnLocation(\Ammonkc\Otaehi\StructType\LocationType $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Ammonkc\Otaehi\StructType\RentalInfo
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Ammonkc\Otaehi\StructType\RentalInfo
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RentalInfo
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
