<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ammonkc\Otaehi\StructType\DriverType
     */
    public $DriverType;
    /**
     * The RateQualifier
     * @var mixed
     */
    public $RateQualifier;
    /**
     * The Fees
     * @var \Ammonkc\Otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The VehicleCharges
     * @var \Ammonkc\Otaehi\StructType\VehicleCharges
     */
    public $VehicleCharges;
    /**
     * The SpecialEquipPrefs
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The RateDistance
     * @var \Ammonkc\Otaehi\StructType\RateDistance
     */
    public $RateDistance;
    /**
     * The TotalCharge
     * @var \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The Queue
     * @var \Ammonkc\Otaehi\StructType\Queue
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
     * @param \Ammonkc\Otaehi\StructType\DriverType $driverType
     * @param mixed $rateQualifier
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @param \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param \Ammonkc\Otaehi\StructType\RateDistance $rateDistance
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @param \Ammonkc\Otaehi\StructType\Queue $queue
     * @param mixed $tPA_Extensions
     * @param string $status
     */
    public function __construct($uniqueID = null, $vehRentalCore = null, $customer = null, $vendorPref = null, $vehPref = null, \Ammonkc\Otaehi\StructType\DriverType $driverType = null, $rateQualifier = null, \Ammonkc\Otaehi\StructType\Fees $fees = null, \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges = null, \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null, \Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null, \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null, \Ammonkc\Otaehi\StructType\Queue $queue = null, $tPA_Extensions = null, $status = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVehPref($vehPref = null)
    {
        $this->VehPref = $vehPref;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setDriverType(\Ammonkc\Otaehi\StructType\DriverType $driverType = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setRateQualifier($rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Ammonkc\Otaehi\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setFees(\Ammonkc\Otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \Ammonkc\Otaehi\StructType\VehicleCharges|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setVehicleCharges(\Ammonkc\Otaehi\StructType\VehicleCharges $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setSpecialEquipPrefs(\Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get RateDistance value
     * @return \Ammonkc\Otaehi\StructType\RateDistance|null
     */
    public function getRateDistance()
    {
        return $this->RateDistance;
    }
    /**
     * Set RateDistance value
     * @param \Ammonkc\Otaehi\StructType\RateDistance $rateDistance
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setRateDistance(\Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \Ammonkc\Otaehi\StructType\TotalCharge|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setTotalCharge(\Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get Queue value
     * @return \Ammonkc\Otaehi\StructType\Queue|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param \Ammonkc\Otaehi\StructType\Queue $queue
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
     */
    public function setQueue(\Ammonkc\Otaehi\StructType\Queue $queue = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleReservationRQCoreType
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
