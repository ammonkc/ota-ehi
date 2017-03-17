<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorMessagesType StructType
 * @subpackage Structs
 */
class VendorMessagesType extends AbstractStructBase
{
    /**
     * The VendorMessage
     * @var mixed
     */
    public $VendorMessage;
    /**
     * Constructor method for VendorMessagesType
     * @uses VendorMessagesType::setVendorMessage()
     * @param mixed $vendorMessage
     */
    public function __construct($vendorMessage = null)
    {
        $this
            ->setVendorMessage($vendorMessage);
    }
    /**
     * Get VendorMessage value
     * @return mixed|null
     */
    public function getVendorMessage()
    {
        return $this->VendorMessage;
    }
    /**
     * Set VendorMessage value
     * @param mixed $vendorMessage
     * @return \ammonkc\otaehi\StructType\VendorMessagesType
     */
    public function setVendorMessage($vendorMessage = null)
    {
        $this->VendorMessage = $vendorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VendorMessagesType
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
