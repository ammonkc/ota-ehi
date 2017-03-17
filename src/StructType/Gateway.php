<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gateway StructType
 * @subpackage Structs
 */
class Gateway extends AbstractStructBase
{
    /**
     * The AuthenticationVerificationValue
     * @var \ammonkc\otaehi\StructType\AuthenticationVerificationValue
     */
    public $AuthenticationVerificationValue;
    /**
     * The TransactionPassword
     * @var \ammonkc\otaehi\StructType\TransactionPassword
     */
    public $TransactionPassword;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ECI
     * @var UNKNOWN
     */
    public $ECI;
    /**
     * The MerchantID
     * @var string
     */
    public $MerchantID;
    /**
     * The ProcessorID
     * @var string
     */
    public $ProcessorID;
    /**
     * The URL
     * @var string
     */
    public $URL;
    /**
     * Constructor method for Gateway
     * @uses Gateway::setAuthenticationVerificationValue()
     * @uses Gateway::setTransactionPassword()
     * @uses Gateway::setTPA_Extensions()
     * @uses Gateway::setECI()
     * @uses Gateway::setMerchantID()
     * @uses Gateway::setProcessorID()
     * @uses Gateway::setURL()
     * @param \ammonkc\otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue
     * @param \ammonkc\otaehi\StructType\TransactionPassword $transactionPassword
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $eCI
     * @param string $merchantID
     * @param string $processorID
     * @param string $uRL
     */
    public function __construct(\ammonkc\otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue = null, \ammonkc\otaehi\StructType\TransactionPassword $transactionPassword = null, $tPA_Extensions = null, UNKNOWN $eCI = null, $merchantID = null, $processorID = null, $uRL = null)
    {
        $this
            ->setAuthenticationVerificationValue($authenticationVerificationValue)
            ->setTransactionPassword($transactionPassword)
            ->setTPA_Extensions($tPA_Extensions)
            ->setECI($eCI)
            ->setMerchantID($merchantID)
            ->setProcessorID($processorID)
            ->setURL($uRL);
    }
    /**
     * Get AuthenticationVerificationValue value
     * @return \ammonkc\otaehi\StructType\AuthenticationVerificationValue|null
     */
    public function getAuthenticationVerificationValue()
    {
        return $this->AuthenticationVerificationValue;
    }
    /**
     * Set AuthenticationVerificationValue value
     * @param \ammonkc\otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setAuthenticationVerificationValue(\ammonkc\otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue = null)
    {
        $this->AuthenticationVerificationValue = $authenticationVerificationValue;
        return $this;
    }
    /**
     * Get TransactionPassword value
     * @return \ammonkc\otaehi\StructType\TransactionPassword|null
     */
    public function getTransactionPassword()
    {
        return $this->TransactionPassword;
    }
    /**
     * Set TransactionPassword value
     * @param \ammonkc\otaehi\StructType\TransactionPassword $transactionPassword
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setTransactionPassword(\ammonkc\otaehi\StructType\TransactionPassword $transactionPassword = null)
    {
        $this->TransactionPassword = $transactionPassword;
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
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ECI value
     * @return UNKNOWN|null
     */
    public function getECI()
    {
        return $this->ECI;
    }
    /**
     * Set ECI value
     * @param UNKNOWN $eCI
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setECI(UNKNOWN $eCI = null)
    {
        $this->ECI = $eCI;
        return $this;
    }
    /**
     * Get MerchantID value
     * @return string|null
     */
    public function getMerchantID()
    {
        return $this->MerchantID;
    }
    /**
     * Set MerchantID value
     * @param string $merchantID
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setMerchantID($merchantID = null)
    {
        // validation for constraint: string
        if (!is_null($merchantID) && !is_string($merchantID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchantID)), __LINE__);
        }
        $this->MerchantID = $merchantID;
        return $this;
    }
    /**
     * Get ProcessorID value
     * @return string|null
     */
    public function getProcessorID()
    {
        return $this->ProcessorID;
    }
    /**
     * Set ProcessorID value
     * @param string $processorID
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setProcessorID($processorID = null)
    {
        // validation for constraint: string
        if (!is_null($processorID) && !is_string($processorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processorID)), __LINE__);
        }
        $this->ProcessorID = $processorID;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \ammonkc\otaehi\StructType\Gateway
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Gateway
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
