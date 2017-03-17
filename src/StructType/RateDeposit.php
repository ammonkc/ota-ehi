<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDeposit StructType
 * @subpackage Structs
 */
class RateDeposit extends AbstractStructBase
{
    /**
     * The DepositRequiredInd
     * @var bool
     */
    public $DepositRequiredInd;
    /**
     * Constructor method for RateDeposit
     * @uses RateDeposit::setDepositRequiredInd()
     * @param bool $depositRequiredInd
     */
    public function __construct($depositRequiredInd = null)
    {
        $this
            ->setDepositRequiredInd($depositRequiredInd);
    }
    /**
     * Get DepositRequiredInd value
     * @return bool|null
     */
    public function getDepositRequiredInd()
    {
        return $this->DepositRequiredInd;
    }
    /**
     * Set DepositRequiredInd value
     * @param bool $depositRequiredInd
     * @return \Ammonkc\Otaehi\StructType\RateDeposit
     */
    public function setDepositRequiredInd($depositRequiredInd = null)
    {
        $this->DepositRequiredInd = $depositRequiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RateDeposit
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
