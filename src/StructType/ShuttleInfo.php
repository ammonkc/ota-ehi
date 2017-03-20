<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleInfo StructType
 * @subpackage Structs
 */
class ShuttleInfo extends AbstractStructBase
{
    /**
     * The Type
     * @var
     */
    public $Type;
    /**
     * Constructor method for ShuttleInfo
     * @uses ShuttleInfo::setType()
     * @param  $type
     */
    public function __construct( $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return |null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param  $type
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfo
     */
    public function setType( $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ShuttleInfo
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
