<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for List_LoyaltyPrgCurrency StructType
 * @subpackage Structs
 */
class List_LoyaltyPrgCurrency extends AbstractStructBase
{
    /**
     * The List
     * @var mixed
     */
    public $List;
    /**
     * The Extension
     * @var mixed
     */
    public $Extension;
    /**
     * Constructor method for List_LoyaltyPrgCurrency
     * @uses List_LoyaltyPrgCurrency::setList()
     * @uses List_LoyaltyPrgCurrency::setExtension()
     * @param mixed $list
     * @param mixed $extension
     */
    public function __construct($list = null, $extension = null)
    {
        $this
            ->setList($list)
            ->setExtension($extension);
    }
    /**
     * Get List value
     * @return mixed|null
     */
    public function getList()
    {
        return $this->List;
    }
    /**
     * Set List value
     * @param mixed $list
     * @return \ammonkc\otaehi\StructType\List_LoyaltyPrgCurrency
     */
    public function setList($list = null)
    {
        $this->List = $list;
        return $this;
    }
    /**
     * Get Extension value
     * @return mixed|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param mixed $extension
     * @return \ammonkc\otaehi\StructType\List_LoyaltyPrgCurrency
     */
    public function setExtension($extension = null)
    {
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\List_LoyaltyPrgCurrency
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
