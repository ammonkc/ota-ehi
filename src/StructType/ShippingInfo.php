<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingInfo StructType
 * @subpackage Structs
 */
class ShippingInfo extends AbstractStructBase
{
    /**
     * The ShippingType
     * @var UNKNOWN
     */
    public $ShippingType;
    /**
     * The ShippingCarrier
     * @var UNKNOWN
     */
    public $ShippingCarrier;
    /**
     * Constructor method for ShippingInfo
     * @uses ShippingInfo::setShippingType()
     * @uses ShippingInfo::setShippingCarrier()
     * @param UNKNOWN $shippingType
     * @param UNKNOWN $shippingCarrier
     */
    public function __construct(UNKNOWN $shippingType = null, UNKNOWN $shippingCarrier = null)
    {
        $this
            ->setShippingType($shippingType)
            ->setShippingCarrier($shippingCarrier);
    }
    /**
     * Get ShippingType value
     * @return UNKNOWN|null
     */
    public function getShippingType()
    {
        return $this->ShippingType;
    }
    /**
     * Set ShippingType value
     * @param UNKNOWN $shippingType
     * @return \Ammonkc\Otaehi\StructType\ShippingInfo
     */
    public function setShippingType(UNKNOWN $shippingType = null)
    {
        $this->ShippingType = $shippingType;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return UNKNOWN|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @param UNKNOWN $shippingCarrier
     * @return \Ammonkc\Otaehi\StructType\ShippingInfo
     */
    public function setShippingCarrier(UNKNOWN $shippingCarrier = null)
    {
        $this->ShippingCarrier = $shippingCarrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ShippingInfo
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
