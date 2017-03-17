<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehResRQ StructType
 * @subpackage Structs
 */
class OTA_VehResRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \ammonkc\otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The VehResRQCore
     * @var \ammonkc\otaehi\StructType\VehResRQCore
     */
    public $VehResRQCore;
    /**
     * The VehResRQInfo
     * @var \ammonkc\otaehi\StructType\VehResRQInfo
     */
    public $VehResRQInfo;
    /**
     * The DonationInformation
     * @var \ammonkc\otaehi\StructType\DonationType
     */
    public $DonationInformation;
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
     * Constructor method for OTA_VehResRQ
     * @uses OTA_VehResRQ::setPOS()
     * @uses OTA_VehResRQ::setVehResRQCore()
     * @uses OTA_VehResRQ::setVehResRQInfo()
     * @uses OTA_VehResRQ::setDonationInformation()
     * @uses OTA_VehResRQ::setEchoToken()
     * @uses OTA_VehResRQ::setTimeStamp()
     * @uses OTA_VehResRQ::setTarget()
     * @uses OTA_VehResRQ::setTargetName()
     * @uses OTA_VehResRQ::setVersion()
     * @uses OTA_VehResRQ::setTransactionIdentifier()
     * @uses OTA_VehResRQ::setSequenceNmbr()
     * @uses OTA_VehResRQ::setTransactionStatusCode()
     * @uses OTA_VehResRQ::setRetransmissionIndicator()
     * @uses OTA_VehResRQ::setCorrelationID()
     * @uses OTA_VehResRQ::setPrimaryLangID()
     * @uses OTA_VehResRQ::setAltLangID()
     * @uses OTA_VehResRQ::setReqRespVersion()
     * @param \ammonkc\otaehi\StructType\POS_Type $pOS
     * @param \ammonkc\otaehi\StructType\VehResRQCore $vehResRQCore
     * @param \ammonkc\otaehi\StructType\VehResRQInfo $vehResRQInfo
     * @param \ammonkc\otaehi\StructType\DonationType $donationInformation
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
     */
    public function __construct(\ammonkc\otaehi\StructType\POS_Type $pOS = null, \ammonkc\otaehi\StructType\VehResRQCore $vehResRQCore = null, \ammonkc\otaehi\StructType\VehResRQInfo $vehResRQInfo = null, \ammonkc\otaehi\StructType\DonationType $donationInformation = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setVehResRQCore($vehResRQCore)
            ->setVehResRQInfo($vehResRQInfo)
            ->setDonationInformation($donationInformation)
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
            ->setReqRespVersion($reqRespVersion);
    }
    /**
     * Get POS value
     * @return \ammonkc\otaehi\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \ammonkc\otaehi\StructType\POS_Type $pOS
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
     */
    public function setPOS(\ammonkc\otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get VehResRQCore value
     * @return \ammonkc\otaehi\StructType\VehResRQCore|null
     */
    public function getVehResRQCore()
    {
        return $this->VehResRQCore;
    }
    /**
     * Set VehResRQCore value
     * @param \ammonkc\otaehi\StructType\VehResRQCore $vehResRQCore
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
     */
    public function setVehResRQCore(\ammonkc\otaehi\StructType\VehResRQCore $vehResRQCore = null)
    {
        $this->VehResRQCore = $vehResRQCore;
        return $this;
    }
    /**
     * Get VehResRQInfo value
     * @return \ammonkc\otaehi\StructType\VehResRQInfo|null
     */
    public function getVehResRQInfo()
    {
        return $this->VehResRQInfo;
    }
    /**
     * Set VehResRQInfo value
     * @param \ammonkc\otaehi\StructType\VehResRQInfo $vehResRQInfo
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
     */
    public function setVehResRQInfo(\ammonkc\otaehi\StructType\VehResRQInfo $vehResRQInfo = null)
    {
        $this->VehResRQInfo = $vehResRQInfo;
        return $this;
    }
    /**
     * Get DonationInformation value
     * @return \ammonkc\otaehi\StructType\DonationType|null
     */
    public function getDonationInformation()
    {
        return $this->DonationInformation;
    }
    /**
     * Set DonationInformation value
     * @param \ammonkc\otaehi\StructType\DonationType $donationInformation
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
     */
    public function setDonationInformation(\ammonkc\otaehi\StructType\DonationType $donationInformation = null)
    {
        $this->DonationInformation = $donationInformation;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
     */
    public function setReqRespVersion(UNKNOWN $reqRespVersion = null)
    {
        $this->ReqRespVersion = $reqRespVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OTA_VehResRQ
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
