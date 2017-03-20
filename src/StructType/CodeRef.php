<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeRef StructType
 * @subpackage Structs
 */
class CodeRef extends AbstractStructBase
{
    /**
     * The VicinityCode
     * @var
     */
    public $VicinityCode;
    /**
     * Constructor method for CodeRef
     * @uses CodeRef::setVicinityCode()
     * @param  $vicinityCode
     */
    public function __construct( $vicinityCode = null)
    {
        $this
            ->setVicinityCode($vicinityCode);
    }
    /**
     * Get VicinityCode value
     * @return |null
     */
    public function getVicinityCode()
    {
        return $this->VicinityCode;
    }
    /**
     * Set VicinityCode value
     * @param  $vicinityCode
     * @return \Ammonkc\Otaehi\StructType\CodeRef
     */
    public function setVicinityCode( $vicinityCode = null)
    {
        $this->VicinityCode = $vicinityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CodeRef
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
