<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends AbstractStructBase
{
    /**
     * The SpecialItemInd
     * @var bool
     */
    public $SpecialItemInd;
    /**
     * Constructor method for Item
     * @uses Item::setSpecialItemInd()
     * @param bool $specialItemInd
     */
    public function __construct($specialItemInd = null)
    {
        $this
            ->setSpecialItemInd($specialItemInd);
    }
    /**
     * Get SpecialItemInd value
     * @return bool|null
     */
    public function getSpecialItemInd()
    {
        return $this->SpecialItemInd;
    }
    /**
     * Set SpecialItemInd value
     * @param bool $specialItemInd
     * @return \ammonkc\otaehi\StructType\Item
     */
    public function setSpecialItemInd($specialItemInd = null)
    {
        $this->SpecialItemInd = $specialItemInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Item
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
