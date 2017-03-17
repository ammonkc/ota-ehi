<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalTransactionType StructType
 * @subpackage Structs
 */
class VehicleRentalTransactionType extends AbstractStructBase
{
    /**
     * The PickUpReturnDetails
     * @var \Ammonkc\Otaehi\StructType\PickUpReturnDetails
     */
    public $PickUpReturnDetails;
    /**
     * The Vehicle
     * @var \Ammonkc\Otaehi\StructType\Vehicle
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
     * The ConfID
     * @var mixed
     */
    public $ConfID;
    /**
     * The ContractID
     * @var mixed
     */
    public $ContractID;
    /**
     * Constructor method for VehicleRentalTransactionType
     * @uses VehicleRentalTransactionType::setPickUpReturnDetails()
     * @uses VehicleRentalTransactionType::setVehicle()
     * @uses VehicleRentalTransactionType::setRentalRate()
     * @uses VehicleRentalTransactionType::setPricedEquips()
     * @uses VehicleRentalTransactionType::setFees()
     * @uses VehicleRentalTransactionType::setTotalCharge()
     * @uses VehicleRentalTransactionType::setConfID()
     * @uses VehicleRentalTransactionType::setContractID()
     * @param \Ammonkc\Otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     * @param mixed $rentalRate
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @param \Ammonkc\Otaehi\StructType\Fees $fees
     * @param \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge
     * @param mixed $confID
     * @param mixed $contractID
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails = null, \Ammonkc\Otaehi\StructType\Vehicle $vehicle = null, $rentalRate = null, \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null, \Ammonkc\Otaehi\StructType\Fees $fees = null, \Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null, $confID = null, $contractID = null)
    {
        $this
            ->setPickUpReturnDetails($pickUpReturnDetails)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setTotalCharge($totalCharge)
            ->setConfID($confID)
            ->setContractID($contractID);
    }
    /**
     * Get PickUpReturnDetails value
     * @return \Ammonkc\Otaehi\StructType\PickUpReturnDetails|null
     */
    public function getPickUpReturnDetails()
    {
        return $this->PickUpReturnDetails;
    }
    /**
     * Set PickUpReturnDetails value
     * @param \Ammonkc\Otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
     */
    public function setPickUpReturnDetails(\Ammonkc\Otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails = null)
    {
        $this->PickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Ammonkc\Otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Ammonkc\Otaehi\StructType\Vehicle $vehicle
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
     */
    public function setVehicle(\Ammonkc\Otaehi\StructType\Vehicle $vehicle = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
     */
    public function setTotalCharge(\Ammonkc\Otaehi\StructType\TotalCharge $totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Get ConfID value
     * @return mixed|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param mixed $confID
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
     */
    public function setConfID($confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get ContractID value
     * @return mixed|null
     */
    public function getContractID()
    {
        return $this->ContractID;
    }
    /**
     * Set ContractID value
     * @param mixed $contractID
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
     */
    public function setContractID($contractID = null)
    {
        $this->ContractID = $contractID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalTransactionType
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
