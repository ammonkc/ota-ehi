<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationRQCoreType StructType
 * @subpackage Structs
 */
class VehicleReservationRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var mixed
     */
    public $UniqueID;
    /**
     * The VehRentalCore
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The Customer
     * @var mixed
     */
    public $Customer;
    /**
     * The VendorPref
     * @var mixed
     */
    public $VendorPref;
    /**
     * The VehPref
     * @var mixed
     */
    public $VehPref;
    /**
     * The DriverType
     * @var \ammonkc\otaehi\StructType\DriverType
     */
    public $DriverType;
    /**
     * The RateQualifier
     * @var mixed
     */
    public $RateQualifier;
    /**
     * The Fees
     * @var \ammonkc\otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The VehicleCharges
     * @var \ammonkc\otaehi\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The SpecialEquipPrefs
     * @var \ammonkc\otaehi\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The RateDistance
     * @var \ammonkc\otaehi\StructType\RateDistance
     */
    public $RateDistance;
    /**
     * The TotalCharge
     * @var \ammonkc\otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The Queue
     * @var \ammonkc\otaehi\StructType\Queue
     */
    public $Queue;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Status
     * @var string
     */
    public $Status;
    /**
     * Constructor method for VehicleReservationRQCoreType
     * @uses VehicleReservationRQCoreType::setUniqueID()
     * @uses VehicleReservationRQCoreType::setVehRentalCore()
     * @uses VehicleReservationRQCoreType::setCustomer()
     * @uses VehicleReservationRQCoreType::setVendorPref()
     * @uses VehicleReservationRQCoreType::setVehPref()
     * @uses VehicleReservationRQCoreType::setDriverType()
     * @uses VehicleReservationRQCoreType::setRateQualifier()
     * @uses VehicleReservationRQCoreType::setFees()
     * @uses VehicleReservationRQCoreType::setVehicleCharges()
     * @uses VehicleReservationRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleReservationRQCoreType::setRateDistance()
     * @uses VehicleReservationRQCoreType::setTotalCharge()
     * @uses VehicleReservationRQCoreType::setQueue()
     * @uses VehicleReservationRQCoreType::setTPA_Extensions()
     * @uses VehicleReservationRQCoreType::setStatus()
     * @param mixed $uniqueID
     * @param mixed $vehRentalCore
     * @param mixed $customer
     * @param mixed $vendorPref
     * @param mixed $vehPref
     * @param \ammonkc\otaehi\StructType\DriverType $driverType
     * @param mixed $rateQualifier
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @param \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges
     * @param \ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param \ammonkc\otaehi\StructType\RateDistance $rateDistance
     * @param \ammonkc\otaehi\StructType\TotalCharge $totalCharge
     * @param \ammonkc\otaehi\StructType\Queue $queue
     * @param mixed $tPA_Extensions
     * @param string $status
     */
    public function __construct($uniqueID = null, $vehRentalCore = null, $customer = null, $vendorPref = null, $vehPref = null, \ammonkc\otaehi\StructType\DriverType $driverType = null, $rateQualifier = null, \ammonkc\otaehi\StructType\Fees $fees = null, \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges = null, \ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null, \ammonkc\otaehi\StructType\RateDistance $rateDistance = null, \ammonkc\otaehi\StructType\TotalCharge $totalCharge = null, \ammonkc\otaehi\StructType\Queue $queue = null, $tPA_Extensions = null, $status = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setVehRentalCore($vehRentalCore)
            ->setCustomer($customer)
            ->setVendorPref($vendorPref)
            ->setVehPref($vehPref)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setFees($fees)
            ->setVehicleCharges($vehicleCharges)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setRateDistance($rateDistance)
            ->setTotalCharge($totalCharge)
            ->setQueue($queue)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param mixed $vendorPref
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVendorPref($vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get VehPref value
     * @return mixed|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param mixed $vehPref
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVehPref($vehPref = null)
    {
        $this->VehPref = $vehPref;
        return $this;
    }
    /**
     * Get DriverType value
     * @return \ammonkc\otaehi\StructType\DriverType|null
     */
    public function getDriverType()
    {
        return $this->DriverType;
    }
    /**
     * Set DriverType value
     * @param \ammonkc\otaehi\StructType\DriverType $driverType
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setDriverType(\ammonkc\otaehi\StructType\DriverType $driverType = null)
    {
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return mixed|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param mixed $rateQualifier
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setRateQualifier($rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get Fees value
     * @return \ammonkc\otaehi\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setFees(\ammonkc\otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \ammonkc\otaehi\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVehicleCharges(\ammonkc\otaehi\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get SpecialEquipPrefs value
     * @return \ammonkc\otaehi\StructType\SpecialEquipPrefs|null
     */
    public function getSpecialEquipPrefs()
    {
        return $this->SpecialEquipPrefs;
    }
    /**
     * Set SpecialEquipPrefs value
     * @param \ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setSpecialEquipPrefs(\ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get RateDistance value
     * @return \ammonkc\otaehi\StructType\RateDistance|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @param \ammonkc\otaehi\StructType\RateDistance $rateDistance
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setRateDistance(\ammonkc\otaehi\StructType\RateDistance $rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \ammonkc\otaehi\StructType\TotalCharge|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @param \ammonkc\otaehi\StructType\TotalCharge $totalCharge
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setTotalCharge(\ammonkc\otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get Queue value
     * @return \ammonkc\otaehi\StructType\Queue|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param \ammonkc\otaehi\StructType\Queue $queue
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setQueue(\ammonkc\otaehi\StructType\Queue $queue = null)
    {
        $this->Queue = $queue;
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
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleReservationRQCoreType
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
