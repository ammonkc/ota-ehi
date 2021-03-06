<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateComment StructType
 * @subpackage Structs
 */
class RateComment extends AbstractStructBase
{
    /**
     * The Name
     * @var
     */
    public $Name;
    /**
     * Constructor method for RateComment
     * @uses RateComment::setName()
     * @param  $name
     */
    public function __construct( $name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return |null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param  $name
     * @return \Ammonkc\Otaehi\StructType\RateComment
     */
    public function setName( $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateComment
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
