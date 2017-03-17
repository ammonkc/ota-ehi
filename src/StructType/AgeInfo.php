<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeInfo StructType
 * @subpackage Structs
 */
class AgeInfo extends AbstractStructBase
{
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * Constructor method for AgeInfo
     * @uses AgeInfo::setType()
     * @param UNKNOWN $type
     */
    public function __construct(UNKNOWN $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return UNKNOWN|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param UNKNOWN $type
     * @return \Ammonkc\Otaehi\StructType\AgeInfo
     */
    public function setType(UNKNOWN $type = null)
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
     * @return \Ammonkc\Otaehi\StructType\AgeInfo
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
