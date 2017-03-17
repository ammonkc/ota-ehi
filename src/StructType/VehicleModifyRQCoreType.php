<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleModifyRQCoreType StructType
 * @subpackage Structs
 */
class VehicleModifyRQCoreType extends AbstractStructBase
{
    /**
     * The UniqueID
     * @var \ammonkc\otaehi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The VehRentalCore
     * @var \ammonkc\otaehi\StructType\VehicleRentalCoreType
     */
    public $VehRentalCore;
    /**
     * The Customer
     * @var \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public $Customer;
    /**
     * The VendorPref
     * @var \ammonkc\otaehi\StructType\CompanyNamePrefType
     */
    public $VendorPref;
    /**
     * The VehPref
     * @var \ammonkc\otaehi\StructType\VehiclePrefType
     */
    public $VehPref;
    /**
     * The DriverType
     * @var \ammonkc\otaehi\StructType\DriverType
     */
    public $DriverType;
    /**
     * The RateQualifier
     * @var \ammonkc\otaehi\StructType\RateQualifier
     */
    public $RateQualifier;
    /**
     * The RateRestriction
     * @var \ammonkc\otaehi\StructType\RateRestriction
     */
    public $RateRestriction;
    /**
     * The SpecialEquipPrefs
     * @var \ammonkc\otaehi\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The VehicleCharge
     * @var \ammonkc\otaehi\StructType\VehicleChargePurposeType
     */
    public $VehicleCharge;
    /**
     * The TotalCharge
     * @var \ammonkc\otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The RateDistance
     * @var \ammonkc\otaehi\StructType\RateDistance
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
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $uniqueID
     * @param \ammonkc\otaehi\StructType\VehicleRentalCoreType $vehRentalCore
     * @param \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @param \ammonkc\otaehi\StructType\CompanyNamePrefType $vendorPref
     * @param \ammonkc\otaehi\StructType\VehiclePrefType $vehPref
     * @param \ammonkc\otaehi\StructType\DriverType $driverType
     * @param \ammonkc\otaehi\StructType\RateQualifier $rateQualifier
     * @param \ammonkc\otaehi\StructType\RateRestriction $rateRestriction
     * @param \ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param \ammonkc\otaehi\StructType\VehicleChargePurposeType $vehicleCharge
     * @param \ammonkc\otaehi\StructType\TotalCharge $totalCharge
     * @param \ammonkc\otaehi\StructType\RateDistance $rateDistance
     * @param mixed $tPA_Extensions
     * @param InventoryStatusType $status
     * @param TransactionActionType $transactionType
     */
    public function __construct(\ammonkc\otaehi\StructType\UniqueID_Type $uniqueID = null, \ammonkc\otaehi\StructType\VehicleRentalCoreType $vehRentalCore = null, \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null, \ammonkc\otaehi\StructType\CompanyNamePrefType $vendorPref = null, \ammonkc\otaehi\StructType\VehiclePrefType $vehPref = null, \ammonkc\otaehi\StructType\DriverType $driverType = null, \ammonkc\otaehi\StructType\RateQualifier $rateQualifier = null, \ammonkc\otaehi\StructType\RateRestriction $rateRestriction = null, \ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null, \ammonkc\otaehi\StructType\VehicleChargePurposeType $vehicleCharge = null, \ammonkc\otaehi\StructType\TotalCharge $totalCharge = null, \ammonkc\otaehi\StructType\RateDistance $rateDistance = null, $tPA_Extensions = null, InventoryStatusType $status = null, TransactionActionType $transactionType = null)
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
     * @return \ammonkc\otaehi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $uniqueID
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setUniqueID(\ammonkc\otaehi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get VehRentalCore value
     * @return \ammonkc\otaehi\StructType\VehicleRentalCoreType|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param \ammonkc\otaehi\StructType\VehicleRentalCoreType $vehRentalCore
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehRentalCore(\ammonkc\otaehi\StructType\VehicleRentalCoreType $vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Customer value
     * @return \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setCustomer(\ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return \ammonkc\otaehi\StructType\CompanyNamePrefType|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param \ammonkc\otaehi\StructType\CompanyNamePrefType $vendorPref
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVendorPref(\ammonkc\otaehi\StructType\CompanyNamePrefType $vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get VehPref value
     * @return \ammonkc\otaehi\StructType\VehiclePrefType|null
     */
    public function getVehPref()
    {
        return $this->VehPref;
    }
    /**
     * Set VehPref value
     * @param \ammonkc\otaehi\StructType\VehiclePrefType $vehPref
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehPref(\ammonkc\otaehi\StructType\VehiclePrefType $vehPref = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setDriverType(\ammonkc\otaehi\StructType\DriverType $driverType = null)
    {
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \ammonkc\otaehi\StructType\RateQualifier|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param \ammonkc\otaehi\StructType\RateQualifier $rateQualifier
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateQualifier(\ammonkc\otaehi\StructType\RateQualifier $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RateRestriction value
     * @return \ammonkc\otaehi\StructType\RateRestriction|null
     */
    public function getRateRestriction()
    {
        return $this->RateRestriction;
    }
    /**
     * Set RateRestriction value
     * @param \ammonkc\otaehi\StructType\RateRestriction $rateRestriction
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateRestriction(\ammonkc\otaehi\StructType\RateRestriction $rateRestriction = null)
    {
        $this->RateRestriction = $rateRestriction;
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setSpecialEquipPrefs(\ammonkc\otaehi\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
        return $this;
    }
    /**
     * Get VehicleCharge value
     * @return \ammonkc\otaehi\StructType\VehicleChargePurposeType|null
     */
    public function getVehicleCharge()
    {
        return $this->VehicleCharge;
    }
    /**
     * Set VehicleCharge value
     * @param \ammonkc\otaehi\StructType\VehicleChargePurposeType $vehicleCharge
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setVehicleCharge(\ammonkc\otaehi\StructType\VehicleChargePurposeType $vehicleCharge = null)
    {
        $this->VehicleCharge = $vehicleCharge;
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setTotalCharge(\ammonkc\otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
     */
    public function setRateDistance(\ammonkc\otaehi\StructType\RateDistance $rateDistance = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
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
     * @return \ammonkc\otaehi\StructType\VehicleModifyRQCoreType
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
