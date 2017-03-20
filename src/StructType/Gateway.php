<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gateway StructType
 * @subpackage Structs
 */
class Gateway extends AbstractStructBase
{
    /**
     * The AuthenticationVerificationValue
     * @var \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue
     */
    public $AuthenticationVerificationValue;
    /**
     * The TransactionPassword
     * @var \Ammonkc\Otaehi\StructType\TransactionPassword
     */
    public $TransactionPassword;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ECI
     * @var
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
     * @param \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue
     * @param \Ammonkc\Otaehi\StructType\TransactionPassword $transactionPassword
     * @param mixed $tPA_Extensions
     * @param  $eCI
     * @param string $merchantID
     * @param string $processorID
     * @param string $uRL
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue = null, \Ammonkc\Otaehi\StructType\TransactionPassword $transactionPassword = null, $tPA_Extensions = null,  $eCI = null, $merchantID = null, $processorID = null, $uRL = null)
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
     * @return \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue|null
     */
    public function getAuthenticationVerificationValue()
    {
        return $this->AuthenticationVerificationValue;
    }
    /**
     * Set AuthenticationVerificationValue value
     * @param \Ammonkc\Otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue
     * @return \Ammonkc\Otaehi\StructType\Gateway
     */
    public function setAuthenticationVerificationValue(\Ammonkc\Otaehi\StructType\AuthenticationVerificationValue $authenticationVerificationValue = null)
    {
        $this->AuthenticationVerificationValue = $authenticationVerificationValue;
        return $this;
    }
    /**
     * Get TransactionPassword value
     * @return \Ammonkc\Otaehi\StructType\TransactionPassword|null
     */
    public function getTransactionPassword()
    {
        return $this->TransactionPassword;
    }
    /**
     * Set TransactionPassword value
     * @param \Ammonkc\Otaehi\StructType\TransactionPassword $transactionPassword
     * @return \Ammonkc\Otaehi\StructType\Gateway
     */
    public function setTransactionPassword(\Ammonkc\Otaehi\StructType\TransactionPassword $transactionPassword = null)
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
     * @return \Ammonkc\Otaehi\StructType\Gateway
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ECI value
     * @return |null
     */
    public function getECI()
    {
        return $this->ECI;
    }
    /**
     * Set ECI value
     * @param  $eCI
     * @return \Ammonkc\Otaehi\StructType\Gateway
     */
    public function setECI( $eCI = null)
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
     * @return \Ammonkc\Otaehi\StructType\Gateway
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
     * @return \Ammonkc\Otaehi\StructType\Gateway
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
     * @return \Ammonkc\Otaehi\StructType\Gateway
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
     * @return \Ammonkc\Otaehi\StructType\Gateway
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
