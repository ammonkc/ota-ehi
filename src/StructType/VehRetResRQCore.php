<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehRetResRQCore StructType
 * @subpackage Structs
 */
class VehRetResRQCore extends AbstractStructBase
{
    /**
     * The ContractStatus
     * @var string
     */
    public $ContractStatus;
    /**
     * The ReservationStatus
     * @var string
     */
    public $ReservationStatus;
    /**
     * Constructor method for VehRetResRQCore
     * @uses VehRetResRQCore::setContractStatus()
     * @uses VehRetResRQCore::setReservationStatus()
     * @param string $contractStatus
     * @param string $reservationStatus
     */
    public function __construct($contractStatus = null, $reservationStatus = null)
    {
        $this
            ->setContractStatus($contractStatus)
            ->setReservationStatus($reservationStatus);
    }
    /**
     * Get ContractStatus value
     * @return string|null
     */
    public function getContractStatus()
    {
        return $this->ContractStatus;
    }
    /**
     * Set ContractStatus value
     * @param string $contractStatus
     * @return \ammonkc\otaehi\StructType\VehRetResRQCore
     */
    public function setContractStatus($contractStatus = null)
    {
        // validation for constraint: string
        if (!is_null($contractStatus) && !is_string($contractStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contractStatus)), __LINE__);
        }
        $this->ContractStatus = $contractStatus;
        return $this;
    }
    /**
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \ammonkc\otaehi\StructType\VehRetResRQCore
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehRetResRQCore
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
