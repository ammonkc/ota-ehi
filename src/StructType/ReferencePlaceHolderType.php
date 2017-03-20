<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferencePlaceHolderType StructType
 * @subpackage Structs
 */
class ReferencePlaceHolderType extends AbstractStructBase
{
    /**
     * The RPH
     * @var
     */
    public $RPH;
    /**
     * Constructor method for ReferencePlaceHolderType
     * @uses ReferencePlaceHolderType::setRPH()
     * @param  $rPH
     */
    public function __construct( $rPH = null)
    {
        $this
            ->setRPH($rPH);
    }
    /**
     * Get RPH value
     * @return |null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param  $rPH
     * @return \Ammonkc\Otaehi\StructType\ReferencePlaceHolderType
     */
    public function setRPH( $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\ReferencePlaceHolderType
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
