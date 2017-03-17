<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRSAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleAvailRSAdditionalInfoType extends AbstractStructBase
{
    /**
     * The Customer
     * @var mixed
     */
    public $Customer;
    /**
     * Constructor method for VehicleAvailRSAdditionalInfoType
     * @uses VehicleAvailRSAdditionalInfoType::setCustomer()
     * @param mixed $customer
     */
    public function __construct($customer = null)
    {
        $this
            ->setCustomer($customer);
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
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRSAdditionalInfoType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRSAdditionalInfoType
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
