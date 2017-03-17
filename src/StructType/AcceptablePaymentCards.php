<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCards StructType
 * @subpackage Structs
 */
class AcceptablePaymentCards extends AbstractStructBase
{
    /**
     * The AcceptablePaymentCard
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCard
     */
    public $AcceptablePaymentCard;
    /**
     * Constructor method for AcceptablePaymentCards
     * @uses AcceptablePaymentCards::setAcceptablePaymentCard()
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard = null)
    {
        $this
            ->setAcceptablePaymentCard($acceptablePaymentCard);
    }
    /**
     * Get AcceptablePaymentCard value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCard|null
     */
    public function getAcceptablePaymentCard()
    {
        return $this->AcceptablePaymentCard;
    }
    /**
     * Set AcceptablePaymentCard value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCards
     */
    public function setAcceptablePaymentCard(\Ammonkc\Otaehi\StructType\AcceptablePaymentCard $acceptablePaymentCard = null)
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
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCards
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
