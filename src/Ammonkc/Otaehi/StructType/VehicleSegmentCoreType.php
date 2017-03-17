<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSegmentCoreType StructType
 * @subpackage Structs
 */
class VehicleSegmentCoreType extends AbstractStructBase
{
    /**
     * The ConfID
     * @var \Ammonkc\Otaehi\StructType\ConfID
     */
    public $ConfID;
    /**
     * The Vendor
     * @var mixed
     */
    public $Vendor;
    /**
     * The VehRentalCore
     * @var mixed
     */
    public $VehRentalCore;
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
     * The TotalCharge
     * @var \Ammonkc\Otaehi\StructType\TotalCharge
     */
    public $TotalCharge;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The IndexNumber
     * @var UNKNOWN
     */
    public $IndexNumber;
    /**
     * Constructor method for VehicleSegmentCoreType
     * @uses VehicleSegmentCoreType::setConfID()
     * @uses VehicleSegmentCoreType::setVendor()
     * @uses VehicleSegmentCoreType::setVehRentalCore()
     * @uses VehicleSegmentCoreType::setVehicle()
     * @uses VehicleSegmentCoreType::setRentalRate()
     * @uses VehicleSegmentCoreType::setPricedEquips()
     * @uses VehicleSegmentCoreType::setFees()
     * @uses VehicleSegmentCoreType::setTotalCharge()
     * @uses VehicleSegmentCoreType::setTPA_Extensions()
     * @uses VehicleSegmentCoreType::setIndexNumber()
     * @param \Ammonkc\Otaehi\StructType\ConfID $confID
     * @param mixed $vendor
     * @param mixed $vehRentalCore
     * @param mixed $vehicle
     * @param mixed $rentalRate
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $indexNumber
     */
    public function __construct(\Ammonkc\Otaehi\StructType\ConfID $confID = null, $vendor = null, $vehRentalCore = null, $vehicle = null, $rentalRate = null, \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null, \Ammonkc\Otaehi\StructType\Fees $fees = null, \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null, $tPA_Extensions = null, UNKNOWN $indexNumber = null)
    {
        $this
            ->setConfID($confID)
            ->setVendor($vendor)
            ->setVehRentalCore($vehRentalCore)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setTotalCharge($totalCharge)
            ->setTPA_Extensions($tPA_Extensions)
            ->setIndexNumber($indexNumber);
    }
    /**
     * Get ConfID value
     * @return \Ammonkc\Otaehi\StructType\ConfID|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param \Ammonkc\Otaehi\StructType\ConfID $confID
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setConfID(\Ammonkc\Otaehi\StructType\ConfID $confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setFees(\Ammonkc\Otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setTotalCharge(\Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get IndexNumber value
     * @return UNKNOWN|null
     */
    public function getIndexNumber()
    {
        return $this->IndexNumber;
    }
    /**
     * Set IndexNumber value
     * @param UNKNOWN $indexNumber
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
     */
    public function setIndexNumber(UNKNOWN $indexNumber = null)
    {
        $this->IndexNumber = $indexNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentCoreType
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
