<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalTransactionType StructType
 * @subpackage Structs
 */
class VehicleRentalTransactionType extends AbstractStructBase
{
    /**
     * The PickUpReturnDetails
     * @var \ammonkc\otaehi\StructType\PickUpReturnDetails
     */
    public $PickUpReturnDetails;
    /**
     * The Vehicle
     * @var \ammonkc\otaehi\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * The RentalRate
     * @var mixed
     */
    public $RentalRate;
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
     * The TotalCharge
     * @var \ammonkc\otaehi\StructType\TotalCharge
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
     * @param \ammonkc\otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     * @param mixed $rentalRate
     * @param \ammonkc\otaehi\StructType\PricedEquips $pricedEquips
     * @param \ammonkc\otaehi\StructType\Fees $fees
     * @param \ammonkc\otaehi\StructType\TotalCharge $totalCharge
     * @param mixed $confID
     * @param mixed $contractID
     */
    public function __construct(\ammonkc\otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails = null, \ammonkc\otaehi\StructType\Vehicle $vehicle = null, $rentalRate = null, \ammonkc\otaehi\StructType\PricedEquips $pricedEquips = null, \ammonkc\otaehi\StructType\Fees $fees = null, \ammonkc\otaehi\StructType\TotalCharge $totalCharge = null, $confID = null, $contractID = null)
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
     * @return \ammonkc\otaehi\StructType\PickUpReturnDetails|null
     */
    public function getPickUpReturnDetails()
    {
        return $this->PickUpReturnDetails;
    }
    /**
     * Set PickUpReturnDetails value
     * @param \ammonkc\otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public function setPickUpReturnDetails(\ammonkc\otaehi\StructType\PickUpReturnDetails $pickUpReturnDetails = null)
    {
        $this->PickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \ammonkc\otaehi\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \ammonkc\otaehi\StructType\Vehicle $vehicle
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public function setVehicle(\ammonkc\otaehi\StructType\Vehicle $vehicle = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public function setRentalRate($rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public function setFees(\ammonkc\otaehi\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public function setTotalCharge(\ammonkc\otaehi\StructType\TotalCharge $totalCharge = null)
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
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
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType
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
