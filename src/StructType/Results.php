<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Results StructType
 * @subpackage Structs
 */
class Results extends AbstractStructBase
{
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The CAVV
     * @var string
     */
    public $CAVV;
    /**
     * The PAResStatus
     * @var UNKNOWN
     */
    public $PAResStatus;
    /**
     * The SignatureVerfication
     * @var string
     */
    public $SignatureVerfication;
    /**
     * The TransactionID
     * @var string
     */
    public $TransactionID;
    /**
     * The XID
     * @var string
     */
    public $XID;
    /**
     * Constructor method for Results
     * @uses Results::setTPA_Extensions()
     * @uses Results::setCAVV()
     * @uses Results::setPAResStatus()
     * @uses Results::setSignatureVerfication()
     * @uses Results::setTransactionID()
     * @uses Results::setXID()
     * @param mixed $tPA_Extensions
     * @param string $cAVV
     * @param UNKNOWN $pAResStatus
     * @param string $signatureVerfication
     * @param string $transactionID
     * @param string $xID
     */
    public function __construct($tPA_Extensions = null, $cAVV = null, UNKNOWN $pAResStatus = null, $signatureVerfication = null, $transactionID = null, $xID = null)
    {
        $this
            ->setTPA_Extensions($tPA_Extensions)
            ->setCAVV($cAVV)
            ->setPAResStatus($pAResStatus)
            ->setSignatureVerfication($signatureVerfication)
            ->setTransactionID($transactionID)
            ->setXID($xID);
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
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CAVV value
     * @return string|null
     */
    public function getCAVV()
    {
        return $this->CAVV;
    }
    /**
     * Set CAVV value
     * @param string $cAVV
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setCAVV($cAVV = null)
    {
        // validation for constraint: string
        if (!is_null($cAVV) && !is_string($cAVV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cAVV)), __LINE__);
        }
        $this->CAVV = $cAVV;
        return $this;
    }
    /**
     * Get PAResStatus value
     * @return UNKNOWN|null
     */
    public function getPAResStatus()
    {
        return $this->PAResStatus;
    }
    /**
     * Set PAResStatus value
     * @param UNKNOWN $pAResStatus
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setPAResStatus(UNKNOWN $pAResStatus = null)
    {
        $this->PAResStatus = $pAResStatus;
        return $this;
    }
    /**
     * Get SignatureVerfication value
     * @return string|null
     */
    public function getSignatureVerfication()
    {
        return $this->SignatureVerfication;
    }
    /**
     * Set SignatureVerfication value
     * @param string $signatureVerfication
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setSignatureVerfication($signatureVerfication = null)
    {
        // validation for constraint: string
        if (!is_null($signatureVerfication) && !is_string($signatureVerfication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signatureVerfication)), __LINE__);
        }
        $this->SignatureVerfication = $signatureVerfication;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get XID value
     * @return string|null
     */
    public function getXID()
    {
        return $this->XID;
    }
    /**
     * Set XID value
     * @param string $xID
     * @return \Ammonkc\Otaehi\StructType\Results
     */
    public function setXID($xID = null)
    {
        // validation for constraint: string
        if (!is_null($xID) && !is_string($xID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xID)), __LINE__);
        }
        $this->XID = $xID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Results
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
