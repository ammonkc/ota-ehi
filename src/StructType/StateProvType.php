<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StateProvType StructType
 * @subpackage Structs
 */
class StateProvType extends AbstractStructBase
{
    /**
     * The StateCode
     * @var
     */
    public $StateCode;
    /**
     * Constructor method for StateProvType
     * @uses StateProvType::setStateCode()
     * @param  $stateCode
     */
    public function __construct( $stateCode = null)
    {
        $this
            ->setStateCode($stateCode);
    }
    /**
     * Get StateCode value
     * @return |null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param  $stateCode
     * @return \Ammonkc\Otaehi\StructType\StateProvType
     */
    public function setStateCode( $stateCode = null)
    {
        $this->StateCode = $stateCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\StateProvType
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
