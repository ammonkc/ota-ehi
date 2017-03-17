<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubAccountBalance StructType
 * @subpackage Structs
 */
class SubAccountBalance extends AbstractStructBase
{
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * The Balance
     * @var int
     */
    public $Balance;
    /**
     * Constructor method for SubAccountBalance
     * @uses SubAccountBalance::setType()
     * @uses SubAccountBalance::setBalance()
     * @param UNKNOWN $type
     * @param int $balance
     */
    public function __construct(UNKNOWN $type = null, $balance = null)
    {
        $this
            ->setType($type)
            ->setBalance($balance);
    }
    /**
     * Get Type value
     * @return UNKNOWN|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param UNKNOWN $type
     * @return \Ammonkc\Otaehi\StructType\SubAccountBalance
     */
    public function setType(UNKNOWN $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Balance value
     * @return int|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param int $balance
     * @return \Ammonkc\Otaehi\StructType\SubAccountBalance
     */
    public function setBalance($balance = null)
    {
        // validation for constraint: int
        if (!is_null($balance) && !is_numeric($balance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($balance)), __LINE__);
        }
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\SubAccountBalance
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
