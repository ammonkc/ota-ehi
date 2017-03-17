<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RebateType StructType
 * @subpackage Structs
 */
class RebateType extends AbstractStructBase
{
    /**
     * The PaymentInformation
     * @var mixed
     */
    public $PaymentInformation;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ParticipationInd
     * @var bool
     */
    public $ParticipationInd;
    /**
     * The ProgramName
     * @var string
     */
    public $ProgramName;
    /**
     * Constructor method for RebateType
     * @uses RebateType::setPaymentInformation()
     * @uses RebateType::setTPA_Extensions()
     * @uses RebateType::setParticipationInd()
     * @uses RebateType::setProgramName()
     * @param mixed $paymentInformation
     * @param mixed $tPA_Extensions
     * @param bool $participationInd
     * @param string $programName
     */
    public function __construct($paymentInformation = null, $tPA_Extensions = null, $participationInd = null, $programName = null)
    {
        $this
            ->setPaymentInformation($paymentInformation)
            ->setTPA_Extensions($tPA_Extensions)
            ->setParticipationInd($participationInd)
            ->setProgramName($programName);
    }
    /**
     * Get PaymentInformation value
     * @return mixed|null
     */
    public function getPaymentInformation()
    {
        return $this->PaymentInformation;
    }
    /**
     * Set PaymentInformation value
     * @param mixed $paymentInformation
     * @return \ammonkc\otaehi\StructType\RebateType
     */
    public function setPaymentInformation($paymentInformation = null)
    {
        $this->PaymentInformation = $paymentInformation;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\RebateType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ParticipationInd value
     * @return bool|null
     */
    public function getParticipationInd()
    {
        return $this->ParticipationInd;
    }
    /**
     * Set ParticipationInd value
     * @param bool $participationInd
     * @return \ammonkc\otaehi\StructType\RebateType
     */
    public function setParticipationInd($participationInd = null)
    {
        $this->ParticipationInd = $participationInd;
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \ammonkc\otaehi\StructType\RebateType
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RebateType
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
