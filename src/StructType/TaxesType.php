<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The Tax
     * @var mixed
     */
    public $Tax;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTax()
     * @param mixed $tax
     */
    public function __construct($tax = null)
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return mixed|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param mixed $tax
     * @return \ammonkc\otaehi\StructType\TaxesType
     */
    public function setTax($tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\TaxesType
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
