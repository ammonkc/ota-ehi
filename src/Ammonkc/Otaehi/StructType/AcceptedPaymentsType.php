<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptedPaymentsType StructType
 * @subpackage Structs
 */
class AcceptedPaymentsType extends AbstractStructBase
{
    /**
     * The AcceptedPayment
     * @var \Ammonkc\Otaehi\StructType\AcceptedPayment
     */
    public $AcceptedPayment;
    /**
     * Constructor method for AcceptedPaymentsType
     * @uses AcceptedPaymentsType::setAcceptedPayment()
     * @param \Ammonkc\Otaehi\StructType\AcceptedPayment $acceptedPayment
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AcceptedPayment $acceptedPayment = null)
    {
        $this
            ->setAcceptedPayment($acceptedPayment);
    }
    /**
     * Get AcceptedPayment value
     * @return \Ammonkc\Otaehi\StructType\AcceptedPayment|null
     */
    public function getAcceptedPayment()
    {
        return $this->AcceptedPayment;
    }
    /**
     * Set AcceptedPayment value
     * @param \Ammonkc\Otaehi\StructType\AcceptedPayment $acceptedPayment
     * @return \Ammonkc\Otaehi\StructType\AcceptedPaymentsType
     */
    public function setAcceptedPayment(\Ammonkc\Otaehi\StructType\AcceptedPayment $acceptedPayment = null)
    {
        $this->AcceptedPayment = $acceptedPayment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AcceptedPaymentsType
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
