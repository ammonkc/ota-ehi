<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailCoreType StructType
 * @subpackage Structs
 */
class VehicleAvailCoreType extends AbstractStructBase
{
    /**
     * The Vehicle
     * @var mixed
     */
    public $Vehicle;
    /**
     * The RentalRate
     * @var mixed
     */
    public $RentalRate;
    /**
     * The TotalCharge
     * @var \ammonkc\otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The PricedEquips
     * @var \ammonkc\otaehi\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The Fees
     * @var \ammonkc\otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The Reference
     * @var \ammonkc\otaehi\StructType\Reference
     */
    public $Reference;
    /**
     * The Vendor
     * @var \ammonkc\otaehi\StructType\Vendor
     */
    public $Vendor;
    /**
     * The VendorLocation
     * @var \ammonkc\otaehi\StructType\VendorLocation
     */
    public $VendorLocation;
    /**
     * The DropOffLocation
     * @var \ammonkc\otaehi\StructType\DropOffLocation
     */
    public $DropOffLocation;
    /**
     * The Discount
     * @var \ammonkc\otaehi\StructType\Discount
     */
    public $Discount;
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
     * The IsAlternateInd
     * @var bool
     */
    public $IsAlternateInd;
    /**
     * Constructor method for VehicleAvailCoreType
     * @uses VehicleAvailCoreType::setVehicle()
     * @uses VehicleAvailCoreType::setRentalRate()
     * @uses VehicleAvailCoreType::setTotalCharge()
     * @uses VehicleAvailCoreType::setPricedEquips()
     * @uses VehicleAvailCoreType::setFees()
     * @uses VehicleAvailCoreType::setReference()
     * @uses VehicleAvailCoreType::setVendor()
     * @uses VehicleAvailCoreType::setVendorLocation()
     * @uses VehicleAvailCoreType::setDropOffLocation()
     * @uses VehicleAvailCoreType::setDiscount()
     * @uses VehicleAvailCoreType::setTPA_Extensions()
     * @uses VehicleAvailCoreType::setStatus()
     * @uses VehicleAvailCoreType::setIsAlternateInd()
     * @param mixed $vehicle
     * @param mixed $rentalRate
     * @param \ammonkc\otaehi\StructType\TotalCharge $totalCharge
     * @param \ammonkc\otaehi\StructType\PricedEquips $pricedEquips
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @param \ammonkc\otaehi\StructType\Reference $reference
     * @param \ammonkc\otaehi\StructType\Vendor $vendor
     * @param \ammonkc\otaehi\StructType\VendorLocation $vendorLocation
     * @param \ammonkc\otaehi\StructType\DropOffLocation $dropOffLocation
     * @param \ammonkc\otaehi\StructType\Discount $discount
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $status
     * @param bool $isAlternateInd
     */
    public function __construct($vehicle = null, $rentalRate = null, \ammonkc\otaehi\StructType\TotalCharge $totalCharge = null, \ammonkc\otaehi\StructType\PricedEquips $pricedEquips = null, \ammonkc\otaehi\StructType\Fees $fees = null, \ammonkc\otaehi\StructType\Reference $reference = null, \ammonkc\otaehi\StructType\Vendor $vendor = null, \ammonkc\otaehi\StructType\VendorLocation $vendorLocation = null, \ammonkc\otaehi\StructType\DropOffLocation $dropOffLocation = null, \ammonkc\otaehi\StructType\Discount $discount = null, $tPA_Extensions = null, UNKNOWN $status = null, $isAlternateInd = null)
    {
        $this
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setTotalCharge($totalCharge)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setReference($reference)
            ->setVendor($vendor)
            ->setVendorLocation($vendorLocation)
            ->setDropOffLocation($dropOffLocation)
            ->setDiscount($discount)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status)
            ->setIsAlternateInd($isAlternateInd);
    }
    /**
     * Get Vehicle value
     * @return mixed|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param mixed $vehicle
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return mixed|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param mixed $rentalRate
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setTotalCharge(\ammonkc\otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \ammonkc\otaehi\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \ammonkc\otaehi\StructType\PricedEquips $pricedEquips
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setPricedEquips(\ammonkc\otaehi\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setFees(\ammonkc\otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Reference value
     * @return \ammonkc\otaehi\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \ammonkc\otaehi\StructType\Reference $reference
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setReference(\ammonkc\otaehi\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \ammonkc\otaehi\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \ammonkc\otaehi\StructType\Vendor $vendor
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setVendor(\ammonkc\otaehi\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \ammonkc\otaehi\StructType\VendorLocation|null
     */
    public function getVendorLocation()
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \ammonkc\otaehi\StructType\VendorLocation $vendorLocation
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setVendorLocation(\ammonkc\otaehi\StructType\VendorLocation $vendorLocation = null)
    {
        $this->VendorLocation = $vendorLocation;
        return $this;
    }
    /**
     * Get DropOffLocation value
     * @return \ammonkc\otaehi\StructType\DropOffLocation|null
     */
    public function getDropOffLocation()
    {
        return $this->DropOffLocation;
    }
    /**
     * Set DropOffLocation value
     * @param \ammonkc\otaehi\StructType\DropOffLocation $dropOffLocation
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setDropOffLocation(\ammonkc\otaehi\StructType\DropOffLocation $dropOffLocation = null)
    {
        $this->DropOffLocation = $dropOffLocation;
        return $this;
    }
    /**
     * Get Discount value
     * @return \ammonkc\otaehi\StructType\Discount|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \ammonkc\otaehi\StructType\Discount $discount
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setDiscount(\ammonkc\otaehi\StructType\Discount $discount = null)
    {
        $this->Discount = $discount;
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
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
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setStatus(UNKNOWN $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get IsAlternateInd value
     * @return bool|null
     */
    public function getIsAlternateInd()
    {
        return $this->IsAlternateInd;
    }
    /**
     * Set IsAlternateInd value
     * @param bool $isAlternateInd
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
     */
    public function setIsAlternateInd($isAlternateInd = null)
    {
        $this->IsAlternateInd = $isAlternateInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAvailCoreType
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
