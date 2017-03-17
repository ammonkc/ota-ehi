<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Primary StructType
 * @subpackage Structs
 */
class Primary extends AbstractStructBase
{
    /**
     * The CustomerID
     * @var mixed
     */
    public $CustomerID;
    /**
     * Constructor method for Primary
     * @uses Primary::setCustomerID()
     * @param mixed $customerID
     */
    public function __construct($customerID = null)
    {
        $this
            ->setCustomerID($customerID);
    }
    /**
     * Get CustomerID value
     * @return mixed|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param mixed $customerID
     * @return \Ammonkc\Otaehi\StructType\Primary
     */
    public function setCustomerID($customerID = null)
    {
        $this->CustomerID = $customerID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Primary
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
