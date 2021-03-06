<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCardsInfoType StructType
 * @subpackage Structs
 */
class AcceptablePaymentCardsInfoType extends AbstractStructBase
{
    /**
     * The AcceptablePaymentCards
     * @var \Ammonkc\Otaehi\StructType\AcceptablePaymentCards
     */
    public $AcceptablePaymentCards;
    /**
     * The Info
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for AcceptablePaymentCardsInfoType
     * @uses AcceptablePaymentCardsInfoType::setAcceptablePaymentCards()
     * @uses AcceptablePaymentCardsInfoType::setInfo()
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCards $acceptablePaymentCards
     * @param mixed $info
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AcceptablePaymentCards $acceptablePaymentCards = null, $info = null)
    {
        $this
            ->setAcceptablePaymentCards($acceptablePaymentCards)
            ->setInfo($info);
    }
    /**
     * Get AcceptablePaymentCards value
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCards|null
     */
    public function getAcceptablePaymentCards()
    {
        return $this->AcceptablePaymentCards;
    }
    /**
     * Set AcceptablePaymentCards value
     * @param \Ammonkc\Otaehi\StructType\AcceptablePaymentCards $acceptablePaymentCards
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
     */
    public function setAcceptablePaymentCards(\Ammonkc\Otaehi\StructType\AcceptablePaymentCards $acceptablePaymentCards = null)
    {
        $this->AcceptablePaymentCards = $acceptablePaymentCards;
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
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
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
     * @return \Ammonkc\Otaehi\StructType\AcceptablePaymentCardsInfoType
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
