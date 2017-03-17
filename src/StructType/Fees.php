<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fees StructType
 * @subpackage Structs
 */
class Fees extends AbstractStructBase
{
    /**
     * The Fee
     * @var mixed
     */
    public $Fee;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Fees
     * @uses Fees::setFee()
     * @uses Fees::setInfo()
     * @param mixed $fee
     * @param mixed $info
     */
    public function __construct($fee = null, $info = null)
    {
        $this
            ->setFee($fee)
            ->setInfo($info);
    }
    /**
     * Get Fee value
     * @return mixed|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param mixed $fee
     * @return \ammonkc\otaehi\StructType\Fees
     */
    public function setFee($fee = null)
    {
        $this->Fee = $fee;
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
     * @return \ammonkc\otaehi\StructType\Fees
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
     * @return \ammonkc\otaehi\StructType\Fees
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
