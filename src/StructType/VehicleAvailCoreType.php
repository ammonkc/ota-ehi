<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The PricedEquips
     * @var \Ammonkc\Otaehi\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The Fees
     * @var \Ammonkc\Otaehi\StructType\Fees
     */
    public $Fees;
    /**
     * The Reference
     * @var \Ammonkc\Otaehi\StructType\Reference
     */
    public $Reference;
    /**
     * The Vendor
     * @var \Ammonkc\Otaehi\StructType\Vendor
     */
    public $Vendor;
    /**
     * The VendorLocation
     * @var \Ammonkc\Otaehi\StructType\VendorLocation
     */
    public $VendorLocation;
    /**
     * The DropOffLocation
     * @var \Ammonkc\Otaehi\StructType\DropOffLocation
     */
    public $DropOffLocation;
    /**
     * The Discount
     * @var \Ammonkc\Otaehi\StructType\Discount
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
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @param \Ammonkc\Otaehi\StructType\Reference $reference
     * @param \Ammonkc\Otaehi\StructType\Vendor $vendor
     * @param \Ammonkc\Otaehi\StructType\VendorLocation $vendorLocation
     * @param \Ammonkc\Otaehi\StructType\DropOffLocation $dropOffLocation
     * @param \Ammonkc\Otaehi\StructType\Discount $discount
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $status
     * @param bool $isAlternateInd
     */
    public function __construct($vehicle = null, $rentalRate = null, \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null, \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null, \Ammonkc\Otaehi\StructType\Fees $fees = null, \Ammonkc\Otaehi\StructType\Reference $reference = null, \Ammonkc\Otaehi\StructType\Vendor $vendor = null, \Ammonkc\Otaehi\StructType\VendorLocation $vendorLocation = null, \Ammonkc\Otaehi\StructType\DropOffLocation $dropOffLocation = null, \Ammonkc\Otaehi\StructType\Discount $discount = null, $tPA_Extensions = null, UNKNOWN $status = null, $isAlternateInd = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setTotalCharge(\Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \Ammonkc\Otaehi\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setPricedEquips(\Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setFees(\Ammonkc\Otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Ammonkc\Otaehi\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Ammonkc\Otaehi\StructType\Reference $reference
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setReference(\Ammonkc\Otaehi\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Ammonkc\Otaehi\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Ammonkc\Otaehi\StructType\Vendor $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setVendor(\Ammonkc\Otaehi\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Ammonkc\Otaehi\StructType\VendorLocation|null
     */
    public function getVendorLocation()
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Ammonkc\Otaehi\StructType\VendorLocation $vendorLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setVendorLocation(\Ammonkc\Otaehi\StructType\VendorLocation $vendorLocation = null)
    {
        $this->VendorLocation = $vendorLocation;
        return $this;
    }
    /**
     * Get DropOffLocation value
     * @return \Ammonkc\Otaehi\StructType\DropOffLocation|null
     */
    public function getDropOffLocation()
    {
        return $this->DropOffLocation;
    }
    /**
     * Set DropOffLocation value
     * @param \Ammonkc\Otaehi\StructType\DropOffLocation $dropOffLocation
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setDropOffLocation(\Ammonkc\Otaehi\StructType\DropOffLocation $dropOffLocation = null)
    {
        $this->DropOffLocation = $dropOffLocation;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Ammonkc\Otaehi\StructType\Discount|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \Ammonkc\Otaehi\StructType\Discount $discount
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
     */
    public function setDiscount(\Ammonkc\Otaehi\StructType\Discount $discount = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailCoreType
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
