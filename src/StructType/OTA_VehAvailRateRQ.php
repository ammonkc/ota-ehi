<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehAvailRateRQ StructType
 * @subpackage Structs
 */
class OTA_VehAvailRateRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \Ammonkc\Otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The CustomerID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $CustomerID;
    /**
     * The VehAvailRQCore
     * @var \Ammonkc\Otaehi\StructType\VehAvailRQCore
     */
    public $VehAvailRQCore;
    /**
     * The VehAvailRQInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType
     */
    public $VehAvailRQInfo;
    /**
     * The MaxPerVendorInd
     * @var bool
     */
    public $MaxPerVendorInd;
    /**
     * The EchoToken
     * @var UNKNOWN
     */
    public $EchoToken;
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * The Target
     * @var string
     */
    public $Target;
    /**
     * The TargetName
     * @var UNKNOWN
     */
    public $TargetName;
    /**
     * The Version
     * @var float
     */
    public $Version;
    /**
     * The TransactionIdentifier
     * @var string
     */
    public $TransactionIdentifier;
    /**
     * The SequenceNmbr
     * @var int
     */
    public $SequenceNmbr;
    /**
     * The TransactionStatusCode
     * @var string
     */
    public $TransactionStatusCode;
    /**
     * The RetransmissionIndicator
     * @var bool
     */
    public $RetransmissionIndicator;
    /**
     * The CorrelationID
     * @var UNKNOWN
     */
    public $CorrelationID;
    /**
     * The PrimaryLangID
     * @var string
     */
    public $PrimaryLangID;
    /**
     * The AltLangID
     * @var string
     */
    public $AltLangID;
    /**
     * The ReqRespVersion
     * @var UNKNOWN
     */
    public $ReqRespVersion;
    /**
     * The MaxResponses
     * @var int
     */
    public $MaxResponses;
    /**
     * Constructor method for OTA_VehAvailRateRQ
     * @uses OTA_VehAvailRateRQ::setPOS()
     * @uses OTA_VehAvailRateRQ::setCustomerID()
     * @uses OTA_VehAvailRateRQ::setVehAvailRQCore()
     * @uses OTA_VehAvailRateRQ::setVehAvailRQInfo()
     * @uses OTA_VehAvailRateRQ::setMaxPerVendorInd()
     * @uses OTA_VehAvailRateRQ::setEchoToken()
     * @uses OTA_VehAvailRateRQ::setTimeStamp()
     * @uses OTA_VehAvailRateRQ::setTarget()
     * @uses OTA_VehAvailRateRQ::setTargetName()
     * @uses OTA_VehAvailRateRQ::setVersion()
     * @uses OTA_VehAvailRateRQ::setTransactionIdentifier()
     * @uses OTA_VehAvailRateRQ::setSequenceNmbr()
     * @uses OTA_VehAvailRateRQ::setTransactionStatusCode()
     * @uses OTA_VehAvailRateRQ::setRetransmissionIndicator()
     * @uses OTA_VehAvailRateRQ::setCorrelationID()
     * @uses OTA_VehAvailRateRQ::setPrimaryLangID()
     * @uses OTA_VehAvailRateRQ::setAltLangID()
     * @uses OTA_VehAvailRateRQ::setReqRespVersion()
     * @uses OTA_VehAvailRateRQ::setMaxResponses()
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $customerID
     * @param \Ammonkc\Otaehi\StructType\VehAvailRQCore $vehAvailRQCore
     * @param \Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType $vehAvailRQInfo
     * @param bool $maxPerVendorInd
     * @param UNKNOWN $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param UNKNOWN $targetName
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param bool $retransmissionIndicator
     * @param UNKNOWN $correlationID
     * @param string $primaryLangID
     * @param string $altLangID
     * @param UNKNOWN $reqRespVersion
     * @param int $maxResponses
     */
    public function __construct(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null, \Ammonkc\Otaehi\StructType\UniqueID_Type $customerID = null, \Ammonkc\Otaehi\StructType\VehAvailRQCore $vehAvailRQCore = null, \Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType $vehAvailRQInfo = null, $maxPerVendorInd = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $reqRespVersion = null, $maxResponses = null)
    {
        $this
            ->setPOS($pOS)
            ->setCustomerID($customerID)
            ->setVehAvailRQCore($vehAvailRQCore)
            ->setVehAvailRQInfo($vehAvailRQInfo)
            ->setMaxPerVendorInd($maxPerVendorInd)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setTargetName($targetName)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setRetransmissionIndicator($retransmissionIndicator)
            ->setCorrelationID($correlationID)
            ->setPrimaryLangID($primaryLangID)
            ->setAltLangID($altLangID)
            ->setReqRespVersion($reqRespVersion)
            ->setMaxResponses($maxResponses);
    }
    /**
     * Get POS value
     * @return \Ammonkc\Otaehi\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setPOS(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get CustomerID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $customerID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setCustomerID(\Ammonkc\Otaehi\StructType\UniqueID_Type $customerID = null)
    {
        $this->CustomerID = $customerID;
        return $this;
    }
    /**
     * Get VehAvailRQCore value
     * @return \Ammonkc\Otaehi\StructType\VehAvailRQCore|null
     */
    public function getVehAvailRQCore()
    {
        return $this->VehAvailRQCore;
    }
    /**
     * Set VehAvailRQCore value
     * @param \Ammonkc\Otaehi\StructType\VehAvailRQCore $vehAvailRQCore
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setVehAvailRQCore(\Ammonkc\Otaehi\StructType\VehAvailRQCore $vehAvailRQCore = null)
    {
        $this->VehAvailRQCore = $vehAvailRQCore;
        return $this;
    }
    /**
     * Get VehAvailRQInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType|null
     */
    public function getVehAvailRQInfo()
    {
        return $this->VehAvailRQInfo;
    }
    /**
     * Set VehAvailRQInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType $vehAvailRQInfo
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setVehAvailRQInfo(\Ammonkc\Otaehi\StructType\VehicleAvailRQAdditionalInfoType $vehAvailRQInfo = null)
    {
        $this->VehAvailRQInfo = $vehAvailRQInfo;
        return $this;
    }
    /**
     * Get MaxPerVendorInd value
     * @return bool|null
     */
    public function getMaxPerVendorInd()
    {
        return $this->MaxPerVendorInd;
    }
    /**
     * Set MaxPerVendorInd value
     * @param bool $maxPerVendorInd
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setMaxPerVendorInd($maxPerVendorInd = null)
    {
        $this->MaxPerVendorInd = $maxPerVendorInd;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return UNKNOWN|null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param UNKNOWN $echoToken
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setEchoToken(UNKNOWN $echoToken = null)
    {
        $this->EchoToken = $echoToken;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $target
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get TargetName value
     * @return UNKNOWN|null
     */
    public function getTargetName()
    {
        return $this->TargetName;
    }
    /**
     * Set TargetName value
     * @param UNKNOWN $targetName
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setTargetName(UNKNOWN $targetName = null)
    {
        $this->TargetName = $targetName;
        return $this;
    }
    /**
     * Get Version value
     * @return float|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param float $version
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setVersion($version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionIdentifier value
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }
    /**
     * Set TransactionIdentifier value
     * @param string $transactionIdentifier
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setTransactionIdentifier($transactionIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($transactionIdentifier) && !is_string($transactionIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionIdentifier)), __LINE__);
        }
        $this->TransactionIdentifier = $transactionIdentifier;
        return $this;
    }
    /**
     * Get SequenceNmbr value
     * @return int|null
     */
    public function getSequenceNmbr()
    {
        return $this->SequenceNmbr;
    }
    /**
     * Set SequenceNmbr value
     * @param int $sequenceNmbr
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setSequenceNmbr($sequenceNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNmbr) && !is_numeric($sequenceNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNmbr)), __LINE__);
        }
        $this->SequenceNmbr = $sequenceNmbr;
        return $this;
    }
    /**
     * Get TransactionStatusCode value
     * @return string|null
     */
    public function getTransactionStatusCode()
    {
        return $this->TransactionStatusCode;
    }
    /**
     * Set TransactionStatusCode value
     * @param string $transactionStatusCode
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setTransactionStatusCode($transactionStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusCode) && !is_string($transactionStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusCode)), __LINE__);
        }
        $this->TransactionStatusCode = $transactionStatusCode;
        return $this;
    }
    /**
     * Get RetransmissionIndicator value
     * @return bool|null
     */
    public function getRetransmissionIndicator()
    {
        return $this->RetransmissionIndicator;
    }
    /**
     * Set RetransmissionIndicator value
     * @param bool $retransmissionIndicator
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setRetransmissionIndicator($retransmissionIndicator = null)
    {
        $this->RetransmissionIndicator = $retransmissionIndicator;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return UNKNOWN|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param UNKNOWN $correlationID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setCorrelationID(UNKNOWN $correlationID = null)
    {
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get PrimaryLangID value
     * @return string|null
     */
    public function getPrimaryLangID()
    {
        return $this->PrimaryLangID;
    }
    /**
     * Set PrimaryLangID value
     * @param string $primaryLangID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setPrimaryLangID($primaryLangID = null)
    {
        // validation for constraint: string
        if (!is_null($primaryLangID) && !is_string($primaryLangID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryLangID)), __LINE__);
        }
        $this->PrimaryLangID = $primaryLangID;
        return $this;
    }
    /**
     * Get AltLangID value
     * @return string|null
     */
    public function getAltLangID()
    {
        return $this->AltLangID;
    }
    /**
     * Set AltLangID value
     * @param string $altLangID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setAltLangID($altLangID = null)
    {
        // validation for constraint: string
        if (!is_null($altLangID) && !is_string($altLangID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($altLangID)), __LINE__);
        }
        $this->AltLangID = $altLangID;
        return $this;
    }
    /**
     * Get ReqRespVersion value
     * @return UNKNOWN|null
     */
    public function getReqRespVersion()
    {
        return $this->ReqRespVersion;
    }
    /**
     * Set ReqRespVersion value
     * @param UNKNOWN $reqRespVersion
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setReqRespVersion(UNKNOWN $reqRespVersion = null)
    {
        $this->ReqRespVersion = $reqRespVersion;
        return $this;
    }
    /**
     * Get MaxResponses value
     * @return int|null
     */
    public function getMaxResponses()
    {
        return $this->MaxResponses;
    }
    /**
     * Set MaxResponses value
     * @param int $maxResponses
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
     */
    public function setMaxResponses($maxResponses = null)
    {
        // validation for constraint: int
        if (!is_null($maxResponses) && !is_numeric($maxResponses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxResponses)), __LINE__);
        }
        $this->MaxResponses = $maxResponses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OTA_VehAvailRateRQ
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
