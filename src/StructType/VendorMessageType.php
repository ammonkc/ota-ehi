<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorMessageType StructType
 * @subpackage Structs
 */
class VendorMessageType extends AbstractStructBase
{
    /**
     * The InfoType
     * @var
     */
    public $InfoType;
    /**
     * Constructor method for VendorMessageType
     * @uses VendorMessageType::setInfoType()
     * @param  $infoType
     */
    public function __construct( $infoType = null)
    {
        $this
            ->setInfoType($infoType);
    }
    /**
     * Get InfoType value
     * @return |null
     */
    public function getInfoType()
    {
        return $this->InfoType;
    }
    /**
     * Set InfoType value
     * @param  $infoType
     * @return \Ammonkc\Otaehi\StructType\VendorMessageType
     */
    public function setInfoType( $infoType = null)
    {
        $this->InfoType = $infoType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VendorMessageType
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
