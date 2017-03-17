<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscellaneousCharges StructType
 * @subpackage Structs
 */
class MiscellaneousCharges extends AbstractStructBase
{
    /**
     * The MiscellaneousCharge
     * @var \ammonkc\otaehi\StructType\MiscellaneousCharge
     */
    public $MiscellaneousCharge;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for MiscellaneousCharges
     * @uses MiscellaneousCharges::setMiscellaneousCharge()
     * @uses MiscellaneousCharges::setInfo()
     * @param \ammonkc\otaehi\StructType\MiscellaneousCharge $miscellaneousCharge
     * @param mixed $info
     */
    public function __construct(\ammonkc\otaehi\StructType\MiscellaneousCharge $miscellaneousCharge = null, $info = null)
    {
        $this
            ->setMiscellaneousCharge($miscellaneousCharge)
            ->setInfo($info);
    }
    /**
     * Get MiscellaneousCharge value
     * @return \ammonkc\otaehi\StructType\MiscellaneousCharge|null
     */
    public function getMiscellaneousCharge()
    {
        return $this->MiscellaneousCharge;
    }
    /**
     * Set MiscellaneousCharge value
     * @param \ammonkc\otaehi\StructType\MiscellaneousCharge $miscellaneousCharge
     * @return \ammonkc\otaehi\StructType\MiscellaneousCharges
     */
    public function setMiscellaneousCharge(\ammonkc\otaehi\StructType\MiscellaneousCharge $miscellaneousCharge = null)
    {
        $this->MiscellaneousCharge = $miscellaneousCharge;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \ammonkc\otaehi\StructType\MiscellaneousCharges
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\MiscellaneousCharges
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
