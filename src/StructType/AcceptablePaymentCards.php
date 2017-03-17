<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCards StructType
 * @subpackage Structs
 */
class AcceptablePaymentCards extends AbstractStructBase
{
    /**
     * The AcceptablePaymentCard
     * @var \ammonkc\otaehi\StructType\AcceptablePaymentCard
     */
    public $AcceptablePaymentCard;
    /**
     * Constructor method for AcceptablePaymentCards
     * @uses AcceptablePaymentCards::setAcceptablePaymentCard()
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard
     */
    public function __construct(\ammonkc\otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard = null)
    {
        $this
            ->setAcceptablePaymentCard($acceptablePaymentCard);
    }
    /**
     * Get AcceptablePaymentCard value
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCard|null
     */
    public function getAcceptablePaymentCard()
    {
        return $this->AcceptablePaymentCard;
    }
    /**
     * Set AcceptablePaymentCard value
     * @param \ammonkc\otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCards
     */
    public function setAcceptablePaymentCard(\ammonkc\otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard = null)
    {
        $this->AcceptablePaymentCard = $acceptablePaymentCard;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AcceptablePaymentCards
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
