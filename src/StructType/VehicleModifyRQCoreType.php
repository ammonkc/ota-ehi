<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleModifyRQCoreType StructType
 * @subpackage Structs
 */
class VehicleModifyRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The VehRentalCore
     * @var \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public $VehRentalCore;
    /**
     * The Customer
     * @var \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public $Customer;
    /**
     * The VendorPref
     * @var \Ammonkc\Otaehi\StructType\CompanyNamePrefType
     */
    public $VendorPref;
    /**
     * The VehPref
     * @var \Ammonkc\Otaehi\StructType\VehiclePrefType
     */
    public $VehPref;
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
     * The RateRestriction
     * @var \Ammonkc\Otaehi\StructType\RateRestriction
     */
    public $RateRestriction;
    /**
     * The SpecialEquipPrefs
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The VehicleCharge
     * @var \Ammonkc\Otaehi\StructType\VehicleChargePurposeType
     */
    public $VehicleCharge;
    /**
     * The TotalCharge
     * @var \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The RateDistance
     * @var \Ammonkc\Otaehi\StructType\RateDistance
     */
    public $RateDistance;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Status
     * @var InventoryStatusType
     */
    public $Status;
    /**
     * The TransactionType
     * @var TransactionActionType
     */
    public $TransactionType;
    /**
     * Constructor method for VehicleModifyRQCoreType
     * @uses VehicleModifyRQCoreType::setUniqueID()
     * @uses VehicleModifyRQCoreType::setVehRentalCore()
     * @uses VehicleModifyRQCoreType::setCustomer()
     * @uses VehicleModifyRQCoreType::setVendorPref()
     * @uses VehicleModifyRQCoreType::setVehPref()
     * @uses VehicleModifyRQCoreType::setDriverType()
     * @uses VehicleModifyRQCoreType::setRateQualifier()
     * @uses VehicleModifyRQCoreType::setRateRestriction()
     * @uses VehicleModifyRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleModifyRQCoreType::setVehicleCharge()
     * @uses VehicleModifyRQCoreType::setTotalCharge()
     * @uses VehicleModifyRQCoreType::setRateDistance()
     * @uses VehicleModifyRQCoreType::setTPA_Extensions()
     * @uses VehicleModifyRQCoreType::setStatus()
     * @uses VehicleModifyRQCoreType::setTransactionType()
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $vehRentalCore
     * @param \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @param \Ammonkc\Otaehi\StructType\CompanyNamePrefType $vendorPref
     * @param \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref
     * @param \Ammonkc\Otaehi\StructType\DriverType $driverType
     * @param \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier
     * @param \Ammonkc\Otaehi\StructType\RateRestriction $rateRestriction
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param \Ammonkc\Otaehi\StructType\VehicleChargePurposeType $vehicleCharge
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @param \Ammonkc\Otaehi\StructType\RateDistance $rateDistance
     * @param mixed $tPA_Extensions
     * @param InventoryStatusType $status
     * @param TransactionActionType $transactionType
     */
    public function __construct(\Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null, \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $vehRentalCore = null, \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer = null, \Ammonkc\Otaehi\StructType\CompanyNamePrefType $vendorPref = null, \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref = null, \Ammonkc\Otaehi\StructType\DriverType $driverType = null, \Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null, \Ammonkc\Otaehi\StructType\RateRestriction $rateRestriction = null, \Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null, \Ammonkc\Otaehi\StructType\VehicleChargePurposeType $vehicleCharge = null, \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null, \Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null, $tPA_Extensions = null, InventoryStatusType $status = null, TransactionActionType $transactionType = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setVehRentalCore($vehRentalCore)
            ->setCustomer($customer)
            ->setVendorPref($vendorPref)
            ->setVehPref($vehPref)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setRateRestriction($rateRestriction)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setVehicleCharge($vehicleCharge)
            ->setTotalCharge($totalCharge)
            ->setRateDistance($rateDistance)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status)
            ->setTransactionType($transactionType);
    }
    /**
     * Get UniqueID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setUniqueID(\Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get VehRentalCore value
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $vehRentalCore
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehRentalCore(\Ammonkc\Otaehi\StructType\VehicleRentalCoreType $vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setCustomer(\Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return \Ammonkc\Otaehi\StructType\CompanyNamePrefType|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param \Ammonkc\Otaehi\StructType\CompanyNamePrefType $vendorPref
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVendorPref(\Ammonkc\Otaehi\StructType\CompanyNamePrefType $vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get VehPref value
     * @return \Ammonkc\Otaehi\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehPref(\Ammonkc\Otaehi\StructType\VehiclePrefType $vehPref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateQualifier(\Ammonkc\Otaehi\StructType\RateQualifier $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRestriction value
     * @return \Ammonkc\Otaehi\StructType\RateRestriction|null
     */
    public function getRateRestriction()
    {
        return $this->RateRestriction;
    }
    /**
     * Set RateRestriction value
     * @param \Ammonkc\Otaehi\StructType\RateRestriction $rateRestriction
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateRestriction(\Ammonkc\Otaehi\StructType\RateRestriction $rateRestriction = null)
    {
        $this->RateRestriction = $rateRestriction;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setSpecialEquipPrefs(\Ammonkc\Otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get VehicleCharge value
     * @return \Ammonkc\Otaehi\StructType\VehicleChargePurposeType|null
     */
    public function getVehicleCharge()
    {
        return $this->VehicleCharge;
    }
    /**
     * Set VehicleCharge value
     * @param \Ammonkc\Otaehi\StructType\VehicleChargePurposeType $vehicleCharge
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehicleCharge(\Ammonkc\Otaehi\StructType\VehicleChargePurposeType $vehicleCharge = null)
    {
        $this->VehicleCharge = $vehicleCharge;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setTotalCharge(\Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateDistance(\Ammonkc\Otaehi\StructType\RateDistance $rateDistance = null)
    {
        $this->RateDistance = $rateDistance;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Status value
     * @return InventoryStatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param InventoryStatusType $status
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setStatus(InventoryStatusType $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TransactionType value
     * @return TransactionActionType|null
     */
    public function getTransactionType()
    {
        return $this->TransactionType;
    }
    /**
     * Set TransactionType value
     * @param TransactionActionType $transactionType
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setTransactionType(TransactionActionType $transactionType = null)
    {
        $this->TransactionType = $transactionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleModifyRQCoreType
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
