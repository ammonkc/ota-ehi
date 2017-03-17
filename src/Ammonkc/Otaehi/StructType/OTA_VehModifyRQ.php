<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehModifyRQ StructType
 * @subpackage Structs
 */
class OTA_VehModifyRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \Ammonkc\Otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The UniqueID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The VehModifyRQCore
     * @var \Ammonkc\Otaehi\StructType\VehModifyRQCore
     */
    public $VehModifyRQCore;
    /**
     * The VehModifyRQInfo
     * @var \Ammonkc\Otaehi\StructType\VehModifyRQInfo
     */
    public $VehModifyRQInfo;
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
     * Constructor method for OTA_VehModifyRQ
     * @uses OTA_VehModifyRQ::setPOS()
     * @uses OTA_VehModifyRQ::setUniqueID()
     * @uses OTA_VehModifyRQ::setVehModifyRQCore()
     * @uses OTA_VehModifyRQ::setVehModifyRQInfo()
     * @uses OTA_VehModifyRQ::setEchoToken()
     * @uses OTA_VehModifyRQ::setTimeStamp()
     * @uses OTA_VehModifyRQ::setTarget()
     * @uses OTA_VehModifyRQ::setTargetName()
     * @uses OTA_VehModifyRQ::setVersion()
     * @uses OTA_VehModifyRQ::setTransactionIdentifier()
     * @uses OTA_VehModifyRQ::setSequenceNmbr()
     * @uses OTA_VehModifyRQ::setTransactionStatusCode()
     * @uses OTA_VehModifyRQ::setRetransmissionIndicator()
     * @uses OTA_VehModifyRQ::setCorrelationID()
     * @uses OTA_VehModifyRQ::setPrimaryLangID()
     * @uses OTA_VehModifyRQ::setAltLangID()
     * @uses OTA_VehModifyRQ::setReqRespVersion()
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @param \Ammonkc\Otaehi\StructType\VehModifyRQCore $vehModifyRQCore
     * @param \Ammonkc\Otaehi\StructType\VehModifyRQInfo $vehModifyRQInfo
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
    public function __construct(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null, \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null, \Ammonkc\Otaehi\StructType\VehModifyRQCore $vehModifyRQCore = null, \Ammonkc\Otaehi\StructType\VehModifyRQInfo $vehModifyRQInfo = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setVehModifyRQCore($vehModifyRQCore)
            ->setVehModifyRQInfo($vehModifyRQInfo)
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
     * @return \Ammonkc\Otaehi\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
     */
    public function setPOS(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
     */
    public function setUniqueID(\Ammonkc\Otaehi\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get VehModifyRQCore value
     * @return \Ammonkc\Otaehi\StructType\VehModifyRQCore|null
     */
    public function getVehModifyRQCore()
    {
        return $this->VehModifyRQCore;
    }
    /**
     * Set VehModifyRQCore value
     * @param \Ammonkc\Otaehi\StructType\VehModifyRQCore $vehModifyRQCore
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
     */
    public function setVehModifyRQCore(\Ammonkc\Otaehi\StructType\VehModifyRQCore $vehModifyRQCore = null)
    {
        $this->VehModifyRQCore = $vehModifyRQCore;
        return $this;
    }
    /**
     * Get VehModifyRQInfo value
     * @return \Ammonkc\Otaehi\StructType\VehModifyRQInfo|null
     */
    public function getVehModifyRQInfo()
    {
        return $this->VehModifyRQInfo;
    }
    /**
     * Set VehModifyRQInfo value
     * @param \Ammonkc\Otaehi\StructType\VehModifyRQInfo $vehModifyRQInfo
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
     */
    public function setVehModifyRQInfo(\Ammonkc\Otaehi\StructType\VehModifyRQInfo $vehModifyRQInfo = null)
    {
        $this->VehModifyRQInfo = $vehModifyRQInfo;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehModifyRQ
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
