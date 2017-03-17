<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehPref StructType
 * @subpackage Structs
 */
class VehPref extends AbstractStructBase
{
    /**
     * The UpSellInd
     * @var bool
     */
    public $UpSellInd;
    /**
     * Constructor method for VehPref
     * @uses VehPref::setUpSellInd()
     * @param bool $upSellInd
     */
    public function __construct($upSellInd = null)
    {
        $this
            ->setUpSellInd($upSellInd);
    }
    /**
     * Get UpSellInd value
     * @return bool|null
     */
    public function getUpSellInd()
    {
        return $this->UpSellInd;
    }
    /**
     * Set UpSellInd value
     * @param bool $upSellInd
     * @return \ammonkc\otaehi\StructType\VehPref
     */
    public function setUpSellInd($upSellInd = null)
    {
        $this->UpSellInd = $upSellInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehPref
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
