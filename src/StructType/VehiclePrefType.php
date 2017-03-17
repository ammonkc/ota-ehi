<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePrefType StructType
 * @subpackage Structs
 */
class VehiclePrefType extends AbstractStructBase
{
    /**
     * The VehMakeModel
     * @var \Ammonkc\Otaehi\StructType\VehMakeModel
     */
    public $VehMakeModel;
    /**
     * The TypePref
     * @var UNKNOWN
     */
    public $TypePref;
    /**
     * The ClassPref
     * @var UNKNOWN
     */
    public $ClassPref;
    /**
     * The AirConditionPref
     * @var UNKNOWN
     */
    public $AirConditionPref;
    /**
     * The TransmissionPref
     * @var UNKNOWN
     */
    public $TransmissionPref;
    /**
     * The VendorCarType
     * @var UNKNOWN
     */
    public $VendorCarType;
    /**
     * The VehicleQty
     * @var int
     */
    public $VehicleQty;
    /**
     * Constructor method for VehiclePrefType
     * @uses VehiclePrefType::setVehMakeModel()
     * @uses VehiclePrefType::setTypePref()
     * @uses VehiclePrefType::setClassPref()
     * @uses VehiclePrefType::setAirConditionPref()
     * @uses VehiclePrefType::setTransmissionPref()
     * @uses VehiclePrefType::setVendorCarType()
     * @uses VehiclePrefType::setVehicleQty()
     * @param \Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel
     * @param UNKNOWN $typePref
     * @param UNKNOWN $classPref
     * @param UNKNOWN $airConditionPref
     * @param UNKNOWN $transmissionPref
     * @param UNKNOWN $vendorCarType
     * @param int $vehicleQty
     */
    public function __construct(\Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel = null, UNKNOWN $typePref = null, UNKNOWN $classPref = null, UNKNOWN $airConditionPref = null, UNKNOWN $transmissionPref = null, UNKNOWN $vendorCarType = null, $vehicleQty = null)
    {
        $this
            ->setVehMakeModel($vehMakeModel)
            ->setTypePref($typePref)
            ->setClassPref($classPref)
            ->setAirConditionPref($airConditionPref)
            ->setTransmissionPref($transmissionPref)
            ->setVendorCarType($vendorCarType)
            ->setVehicleQty($vehicleQty);
    }
    /**
     * Get VehMakeModel value
     * @return \Ammonkc\Otaehi\StructType\VehMakeModel|null
     */
    public function getVehMakeModel()
    {
        return $this->VehMakeModel;
    }
    /**
     * Set VehMakeModel value
     * @param \Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setVehMakeModel(\Ammonkc\Otaehi\StructType\VehMakeModel $vehMakeModel = null)
    {
        $this->VehMakeModel = $vehMakeModel;
        return $this;
    }
    /**
     * Get TypePref value
     * @return UNKNOWN|null
     */
    public function getTypePref()
    {
        return $this->TypePref;
    }
    /**
     * Set TypePref value
     * @param UNKNOWN $typePref
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setTypePref(UNKNOWN $typePref = null)
    {
        $this->TypePref = $typePref;
        return $this;
    }
    /**
     * Get ClassPref value
     * @return UNKNOWN|null
     */
    public function getClassPref()
    {
        return $this->ClassPref;
    }
    /**
     * Set ClassPref value
     * @param UNKNOWN $classPref
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setClassPref(UNKNOWN $classPref = null)
    {
        $this->ClassPref = $classPref;
        return $this;
    }
    /**
     * Get AirConditionPref value
     * @return UNKNOWN|null
     */
    public function getAirConditionPref()
    {
        return $this->AirConditionPref;
    }
    /**
     * Set AirConditionPref value
     * @param UNKNOWN $airConditionPref
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setAirConditionPref(UNKNOWN $airConditionPref = null)
    {
        $this->AirConditionPref = $airConditionPref;
        return $this;
    }
    /**
     * Get TransmissionPref value
     * @return UNKNOWN|null
     */
    public function getTransmissionPref()
    {
        return $this->TransmissionPref;
    }
    /**
     * Set TransmissionPref value
     * @param UNKNOWN $transmissionPref
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setTransmissionPref(UNKNOWN $transmissionPref = null)
    {
        $this->TransmissionPref = $transmissionPref;
        return $this;
    }
    /**
     * Get VendorCarType value
     * @return UNKNOWN|null
     */
    public function getVendorCarType()
    {
        return $this->VendorCarType;
    }
    /**
     * Set VendorCarType value
     * @param UNKNOWN $vendorCarType
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setVendorCarType(UNKNOWN $vendorCarType = null)
    {
        $this->VendorCarType = $vendorCarType;
        return $this;
    }
    /**
     * Get VehicleQty value
     * @return int|null
     */
    public function getVehicleQty()
    {
        return $this->VehicleQty;
    }
    /**
     * Set VehicleQty value
     * @param int $vehicleQty
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public function setVehicleQty($vehicleQty = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleQty) && !is_numeric($vehicleQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleQty)), __LINE__);
        }
        $this->VehicleQty = $vehicleQty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType
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
