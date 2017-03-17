<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePayment StructType
 * @subpackage Structs
 */
class AcceptablePayment extends AbstractStructBase
{
    /**
     * The CreditCardCode
     * @var UNKNOWN
     */
    public $CreditCardCode;
    /**
     * Constructor method for AcceptablePayment
     * @uses AcceptablePayment::setCreditCardCode()
     * @param UNKNOWN $creditCardCode
     */
    public function __construct(UNKNOWN $creditCardCode = null)
    {
        $this
            ->setCreditCardCode($creditCardCode);
    }
    /**
     * Get CreditCardCode value
     * @return UNKNOWN|null
     */
    public function getCreditCardCode()
    {
        return $this->CreditCardCode;
    }
    /**
     * Set CreditCardCode value
     * @param UNKNOWN $creditCardCode
     * @return \ammonkc\otaehi\StructType\AcceptablePayment
     */
    public function setCreditCardCode(UNKNOWN $creditCardCode = null)
    {
        $this->CreditCardCode = $creditCardCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AcceptablePayment
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
