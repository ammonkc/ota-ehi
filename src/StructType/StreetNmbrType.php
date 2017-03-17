<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNmbrType StructType
 * @subpackage Structs
 */
class StreetNmbrType extends AbstractStructBase
{
    /**
     * The PO_Box
     * @var UNKNOWN
     */
    public $PO_Box;
    /**
     * Constructor method for StreetNmbrType
     * @uses StreetNmbrType::setPO_Box()
     * @param UNKNOWN $pO_Box
     */
    public function __construct(UNKNOWN $pO_Box = null)
    {
        $this
            ->setPO_Box($pO_Box);
    }
    /**
     * Get PO_Box value
     * @return UNKNOWN|null
     */
    public function getPO_Box()
    {
        return $this->PO_Box;
    }
    /**
     * Set PO_Box value
     * @param UNKNOWN $pO_Box
     * @return \ammonkc\otaehi\StructType\StreetNmbrType
     */
    public function setPO_Box(UNKNOWN $pO_Box = null)
    {
        $this->PO_Box = $pO_Box;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\StreetNmbrType
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
