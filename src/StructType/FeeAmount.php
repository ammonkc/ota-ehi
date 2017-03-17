<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeAmount StructType
 * @subpackage Structs
 */
class FeeAmount extends AbstractStructBase
{
    /**
     * The RateConvertedInd
     * @var bool
     */
    public $RateConvertedInd;
    /**
     * The GuaranteeReqInd
     * @var bool
     */
    public $GuaranteeReqInd;
    /**
     * The EmailRequiredInd
     * @var bool
     */
    public $EmailRequiredInd;
    /**
     * Constructor method for FeeAmount
     * @uses FeeAmount::setRateConvertedInd()
     * @uses FeeAmount::setGuaranteeReqInd()
     * @uses FeeAmount::setEmailRequiredInd()
     * @param bool $rateConvertedInd
     * @param bool $guaranteeReqInd
     * @param bool $emailRequiredInd
     */
    public function __construct($rateConvertedInd = null, $guaranteeReqInd = null, $emailRequiredInd = null)
    {
        $this
            ->setRateConvertedInd($rateConvertedInd)
            ->setGuaranteeReqInd($guaranteeReqInd)
            ->setEmailRequiredInd($emailRequiredInd);
    }
    /**
     * Get RateConvertedInd value
     * @return bool|null
     */
    public function getRateConvertedInd()
    {
        return $this->RateConvertedInd;
    }
    /**
     * Set RateConvertedInd value
     * @param bool $rateConvertedInd
     * @return \Ammonkc\Otaehi\StructType\FeeAmount
     */
    public function setRateConvertedInd($rateConvertedInd = null)
    {
        $this->RateConvertedInd = $rateConvertedInd;
        return $this;
    }
    /**
     * Get GuaranteeReqInd value
     * @return bool|null
     */
    public function getGuaranteeReqInd()
    {
        return $this->GuaranteeReqInd;
    }
    /**
     * Set GuaranteeReqInd value
     * @param bool $guaranteeReqInd
     * @return \Ammonkc\Otaehi\StructType\FeeAmount
     */
    public function setGuaranteeReqInd($guaranteeReqInd = null)
    {
        $this->GuaranteeReqInd = $guaranteeReqInd;
        return $this;
    }
    /**
     * Get EmailRequiredInd value
     * @return bool|null
     */
    public function getEmailRequiredInd()
    {
        return $this->EmailRequiredInd;
    }
    /**
     * Set EmailRequiredInd value
     * @param bool $emailRequiredInd
     * @return \Ammonkc\Otaehi\StructType\FeeAmount
     */
    public function setEmailRequiredInd($emailRequiredInd = null)
    {
        $this->EmailRequiredInd = $emailRequiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\FeeAmount
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
