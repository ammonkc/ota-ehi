<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRQCoreType StructType
 * @subpackage Structs
 */
class VehicleAvailRQCoreType extends AbstractStructBase
{
    /**
     * The VehRentalCore
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The MultimodalOffer
     * @var mixed
     */
    public $MultimodalOffer;
    /**
     * The VendorPrefs
     * @var \Ammonkc\Otaehi\StructType\VendorPrefs
     */
    public $VendorPrefs;
    /**
     * The VehPrefs
     * @var \Ammonkc\Otaehi\StructType\VehPrefs
     */
    public $VehPrefs;
    /**
     * The DriverType
     * @var \Ammonkc\Otaehi\StructType\DriverType
     */
    public $DriverType;
    /**
     * The RateQualifier
     * @var \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public $RateQualifier;
    /**
     * The RateRange
     * @var \Ammonkc\Otaehi\StructType\RateRange
     */
    public $RateRange;
    /**
     * The SpecialEquipPrefs
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Status
     * @var UNKNOWN
     */
    public $Status;
    /**
     * The TargetSource
     * @var UNKNOWN
     */
    public $TargetSource;
    /**
     * Constructor method for VehicleAvailRQCoreType
     * @uses VehicleAvailRQCoreType::setVehRentalCore()
     * @uses VehicleAvailRQCoreType::setMultimodalOffer()
     * @uses VehicleAvailRQCoreType::setVendorPrefs()
     * @uses VehicleAvailRQCoreType::setVehPrefs()
     * @uses VehicleAvailRQCoreType::setDriverType()
     * @uses VehicleAvailRQCoreType::setRateQualifier()
     * @uses VehicleAvailRQCoreType::setRateRange()
     * @uses VehicleAvailRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleAvailRQCoreType::setTPA_Extensions()
     * @uses VehicleAvailRQCoreType::setStatus()
     * @uses VehicleAvailRQCoreType::setTargetSource()
     * @param mixed $vehRentalCore
     * @param mixed $multimodalOffer
     * @param \Ammonkc\Otaehi\StructType\VendorPrefs $vendorPrefs
     * @param \Ammonkc\Otaehi\StructType\VehPrefs $vehPrefs
     * @param \Ammonkc\Otaehi\StructType\DriverType $driverType
     * @param \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier
     * @param \Ammonkc\Otaehi\StructType\RateRange $rateRange
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $status
     * @param UNKNOWN $targetSource
     */
    public function __construct($vehRentalCore = null, $multimodalOffer = null, \Ammonkc\Otaehi\StructType\VendorPrefs $vendorPrefs = null, \Ammonkc\Otaehi\StructType\VehPrefs $vehPrefs = null, \Ammonkc\Otaehi\StructType\DriverType $driverType = null, \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null, \Ammonkc\Otaehi\StructType\RateRange $rateRange = null, \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null, $tPA_Extensions = null, UNKNOWN $status = null, UNKNOWN $targetSource = null)
    {
        $this
            ->setVehRentalCore($vehRentalCore)
            ->setMultimodalOffer($multimodalOffer)
            ->setVendorPrefs($vendorPrefs)
            ->setVehPrefs($vehPrefs)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setRateRange($rateRange)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status)
            ->setTargetSource($targetSource);
    }
    /**
     * Get VehRentalCore value
     * @return mixed|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param mixed $vehRentalCore
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get MultimodalOffer value
     * @return mixed|null
     */
    public function getMultimodalOffer()
    {
        return $this->MultimodalOffer;
    }
    /**
     * Set MultimodalOffer value
     * @param mixed $multimodalOffer
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setMultimodalOffer($multimodalOffer = null)
    {
        $this->MultimodalOffer = $multimodalOffer;
        return $this;
    }
    /**
     * Get VendorPrefs value
     * @return \Ammonkc\Otaehi\StructType\VendorPrefs|null
     */
    public function getVendorPrefs()
    {
        return $this->VendorPrefs;
    }
    /**
     * Set VendorPrefs value
     * @param \Ammonkc\Otaehi\StructType\VendorPrefs $vendorPrefs
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setVendorPrefs(\Ammonkc\Otaehi\StructType\VendorPrefs $vendorPrefs = null)
    {
        $this->VendorPrefs = $vendorPrefs;
        return $this;
    }
    /**
     * Get VehPrefs value
     * @return \Ammonkc\Otaehi\StructType\VehPrefs|null
     */
    public function getVehPrefs()
    {
        return $this->VehPrefs;
    }
    /**
     * Set VehPrefs value
     * @param \Ammonkc\Otaehi\StructType\VehPrefs $vehPrefs
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setVehPrefs(\Ammonkc\Otaehi\StructType\VehPrefs $vehPrefs = null)
    {
        $this->VehPrefs = $vehPrefs;
        return $this;
    }
    /**
     * Get DriverType value
     * @return \Ammonkc\Otaehi\StructType\DriverType|null
     */
    public function getDriverType()
    {
        return $this->DriverType;
    }
    /**
     * Set DriverType value
     * @param \Ammonkc\Otaehi\StructType\DriverType $driverType
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setDriverType(\Ammonkc\Otaehi\StructType\DriverType $driverType = null)
    {
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \Ammonkc\Otaehi\StructType\RateQualifier|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setRateQualifier(\Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \Ammonkc\Otaehi\StructType\RateRange|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @param \Ammonkc\Otaehi\StructType\RateRange $rateRange
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setRateRange(\Ammonkc\Otaehi\StructType\RateRange $rateRange = null)
    {
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Get SpecialEquipPrefs value
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPrefs|null
     */
    public function getSpecialEquipPrefs()
    {
        return $this->SpecialEquipPrefs;
    }
    /**
     * Set SpecialEquipPrefs value
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setSpecialEquipPrefs(\Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Status value
     * @return UNKNOWN|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param UNKNOWN $status
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setStatus(UNKNOWN $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TargetSource value
     * @return UNKNOWN|null
     */
    public function getTargetSource()
    {
        return $this->TargetSource;
    }
    /**
     * Set TargetSource value
     * @param UNKNOWN $targetSource
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
     */
    public function setTargetSource(UNKNOWN $targetSource = null)
    {
        $this->TargetSource = $targetSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQCoreType
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
