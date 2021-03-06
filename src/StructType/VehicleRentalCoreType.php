<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalCoreType StructType
 * @subpackage Structs
 */
class VehicleRentalCoreType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * @var \Ammonkc\Otaehi\StructType\PickUpLocation
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * @var \Ammonkc\Otaehi\StructType\ReturnLocation
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
     * The StartChargesDateTime
     * @var string
     */
    public $StartChargesDateTime;
    /**
     * The StopChargesDateTime
     * @var string
     */
    public $StopChargesDateTime;
    /**
     * The OneWayIndicator
     * @var bool
     */
    public $OneWayIndicator;
    /**
     * The MultiIslandRentalDays
     * @var
     */
    public $MultiIslandRentalDays;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The DistUnitName
     * @var
     */
    public $DistUnitName;
    /**
     * Constructor method for VehicleRentalCoreType
     * @uses VehicleRentalCoreType::setPickUpLocation()
     * @uses VehicleRentalCoreType::setReturnLocation()
     * @uses VehicleRentalCoreType::setPickUpDateTime()
     * @uses VehicleRentalCoreType::setReturnDateTime()
     * @uses VehicleRentalCoreType::setStartChargesDateTime()
     * @uses VehicleRentalCoreType::setStopChargesDateTime()
     * @uses VehicleRentalCoreType::setOneWayIndicator()
     * @uses VehicleRentalCoreType::setMultiIslandRentalDays()
     * @uses VehicleRentalCoreType::setQuantity()
     * @uses VehicleRentalCoreType::setDistUnitName()
     * @param \Ammonkc\Otaehi\StructType\PickUpLocation $pickUpLocation
     * @param \Ammonkc\Otaehi\StructType\ReturnLocation $returnLocation
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     * @param string $startChargesDateTime
     * @param string $stopChargesDateTime
     * @param bool $oneWayIndicator
     * @param  $multiIslandRentalDays
     * @param int $quantity
     * @param  $distUnitName
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PickUpLocation $pickUpLocation = null, \Ammonkc\Otaehi\StructType\ReturnLocation $returnLocation = null, $pickUpDateTime = null, $returnDateTime = null, $startChargesDateTime = null, $stopChargesDateTime = null, $oneWayIndicator = null,  $multiIslandRentalDays = null, $quantity = null,  $distUnitName = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime)
            ->setStartChargesDateTime($startChargesDateTime)
            ->setStopChargesDateTime($stopChargesDateTime)
            ->setOneWayIndicator($oneWayIndicator)
            ->setMultiIslandRentalDays($multiIslandRentalDays)
            ->setQuantity($quantity)
            ->setDistUnitName($distUnitName);
    }
    /**
     * Get PickUpLocation value
     * @return \Ammonkc\Otaehi\StructType\PickUpLocation|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \Ammonkc\Otaehi\StructType\PickUpLocation $pickUpLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setPickUpLocation(\Ammonkc\Otaehi\StructType\PickUpLocation $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \Ammonkc\Otaehi\StructType\ReturnLocation|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Ammonkc\Otaehi\StructType\ReturnLocation $returnLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setReturnLocation(\Ammonkc\Otaehi\StructType\ReturnLocation $returnLocation = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
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
     * Get StartChargesDateTime value
     * @return string|null
     */
    public function getStartChargesDateTime()
    {
        return $this->StartChargesDateTime;
    }
    /**
     * Set StartChargesDateTime value
     * @param string $startChargesDateTime
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setStartChargesDateTime($startChargesDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startChargesDateTime) && !is_string($startChargesDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startChargesDateTime)), __LINE__);
        }
        $this->StartChargesDateTime = $startChargesDateTime;
        return $this;
    }
    /**
     * Get StopChargesDateTime value
     * @return string|null
     */
    public function getStopChargesDateTime()
    {
        return $this->StopChargesDateTime;
    }
    /**
     * Set StopChargesDateTime value
     * @param string $stopChargesDateTime
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setStopChargesDateTime($stopChargesDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($stopChargesDateTime) && !is_string($stopChargesDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stopChargesDateTime)), __LINE__);
        }
        $this->StopChargesDateTime = $stopChargesDateTime;
        return $this;
    }
    /**
     * Get OneWayIndicator value
     * @return bool|null
     */
    public function getOneWayIndicator()
    {
        return $this->OneWayIndicator;
    }
    /**
     * Set OneWayIndicator value
     * @param bool $oneWayIndicator
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setOneWayIndicator($oneWayIndicator = null)
    {
        $this->OneWayIndicator = $oneWayIndicator;
        return $this;
    }
    /**
     * Get MultiIslandRentalDays value
     * @return |null
     */
    public function getMultiIslandRentalDays()
    {
        return $this->MultiIslandRentalDays;
    }
    /**
     * Set MultiIslandRentalDays value
     * @param  $multiIslandRentalDays
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setMultiIslandRentalDays( $multiIslandRentalDays = null)
    {
        $this->MultiIslandRentalDays = $multiIslandRentalDays;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get DistUnitName value
     * @return |null
     */
    public function getDistUnitName()
    {
        return $this->DistUnitName;
    }
    /**
     * Set DistUnitName value
     * @param  $distUnitName
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public function setDistUnitName( $distUnitName = null)
    {
        $this->DistUnitName = $distUnitName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
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
