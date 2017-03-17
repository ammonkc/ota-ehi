<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDistance StructType
 * @subpackage Structs
 */
class RateDistance extends AbstractStructBase
{
    /**
     * The Unlimited
     * @var bool
     */
    public $Unlimited;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The DistUnitName
     * @var UNKNOWN
     */
    public $DistUnitName;
    /**
     * The VehiclePeriodUnitName
     * @var UNKNOWN
     */
    public $VehiclePeriodUnitName;
    /**
     * Constructor method for RateDistance
     * @uses RateDistance::setUnlimited()
     * @uses RateDistance::setQuantity()
     * @uses RateDistance::setDistUnitName()
     * @uses RateDistance::setVehiclePeriodUnitName()
     * @param bool $unlimited
     * @param int $quantity
     * @param UNKNOWN $distUnitName
     * @param UNKNOWN $vehiclePeriodUnitName
     */
    public function __construct($unlimited = null, $quantity = null, UNKNOWN $distUnitName = null, UNKNOWN $vehiclePeriodUnitName = null)
    {
        $this
            ->setUnlimited($unlimited)
            ->setQuantity($quantity)
            ->setDistUnitName($distUnitName)
            ->setVehiclePeriodUnitName($vehiclePeriodUnitName);
    }
    /**
     * Get Unlimited value
     * @return bool|null
     */
    public function getUnlimited()
    {
        return $this->Unlimited;
    }
    /**
     * Set Unlimited value
     * @param bool $unlimited
     * @return \Ammonkc\Otaehi\StructType\RateDistance
     */
    public function setUnlimited($unlimited = null)
    {
        $this->Unlimited = $unlimited;
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
     * @return \Ammonkc\Otaehi\StructType\RateDistance
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
     * @return UNKNOWN|null
     */
    public function getDistUnitName()
    {
        return $this->DistUnitName;
    }
    /**
     * Set DistUnitName value
     * @param UNKNOWN $distUnitName
     * @return \Ammonkc\Otaehi\StructType\RateDistance
     */
    public function setDistUnitName(UNKNOWN $distUnitName = null)
    {
        $this->DistUnitName = $distUnitName;
        return $this;
    }
    /**
     * Get VehiclePeriodUnitName value
     * @return UNKNOWN|null
     */
    public function getVehiclePeriodUnitName()
    {
        return $this->VehiclePeriodUnitName;
    }
    /**
     * Set VehiclePeriodUnitName value
     * @param UNKNOWN $vehiclePeriodUnitName
     * @return \Ammonkc\Otaehi\StructType\RateDistance
     */
    public function setVehiclePeriodUnitName(UNKNOWN $vehiclePeriodUnitName = null)
    {
        $this->VehiclePeriodUnitName = $vehiclePeriodUnitName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateDistance
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
