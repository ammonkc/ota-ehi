<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorMessages StructType
 * @subpackage Structs
 */
class VendorMessages extends AbstractStructBase
{
    /**
     * The VendorMessage
     * @var mixed
     */
    public $VendorMessage;
    /**
     * Constructor method for VendorMessages
     * @uses VendorMessages::setVendorMessage()
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
     * @return \Ammonkc\Otaehi\StructType\VendorMessages
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
     * @return \Ammonkc\Otaehi\StructType\VendorMessages
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
