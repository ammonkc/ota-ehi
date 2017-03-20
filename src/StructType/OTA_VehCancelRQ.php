<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehCancelRQ StructType
 * @subpackage Structs
 */
class OTA_VehCancelRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \Ammonkc\Otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The VehCancelRQCore
     * @var \Ammonkc\Otaehi\StructType\CancelInfoRQType
     */
    public $VehCancelRQCore;
    /**
     * The VehCancelRQInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType
     */
    public $VehCancelRQInfo;
    /**
     * The EchoToken
     * @var
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
     * @var
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
     * @var
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
     * @var
     */
    public $ReqRespVersion;
    /**
     * Constructor method for OTA_VehCancelRQ
     * @uses OTA_VehCancelRQ::setPOS()
     * @uses OTA_VehCancelRQ::setVehCancelRQCore()
     * @uses OTA_VehCancelRQ::setVehCancelRQInfo()
     * @uses OTA_VehCancelRQ::setEchoToken()
     * @uses OTA_VehCancelRQ::setTimeStamp()
     * @uses OTA_VehCancelRQ::setTarget()
     * @uses OTA_VehCancelRQ::setTargetName()
     * @uses OTA_VehCancelRQ::setVersion()
     * @uses OTA_VehCancelRQ::setTransactionIdentifier()
     * @uses OTA_VehCancelRQ::setSequenceNmbr()
     * @uses OTA_VehCancelRQ::setTransactionStatusCode()
     * @uses OTA_VehCancelRQ::setRetransmissionIndicator()
     * @uses OTA_VehCancelRQ::setCorrelationID()
     * @uses OTA_VehCancelRQ::setPrimaryLangID()
     * @uses OTA_VehCancelRQ::setAltLangID()
     * @uses OTA_VehCancelRQ::setReqRespVersion()
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @param \Ammonkc\Otaehi\StructType\CancelInfoRQType $vehCancelRQCore
     * @param \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType $vehCancelRQInfo
     * @param  $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param  $targetName
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param bool $retransmissionIndicator
     * @param  $correlationID
     * @param string $primaryLangID
     * @param string $altLangID
     * @param  $reqRespVersion
     */
    public function __construct(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null, \Ammonkc\Otaehi\StructType\CancelInfoRQType $vehCancelRQCore = null, \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType $vehCancelRQInfo = null,  $echoToken = null, $timeStamp = null, $target = null,  $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null,  $correlationID = null, $primaryLangID = null, $altLangID = null,  $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setVehCancelRQCore($vehCancelRQCore)
            ->setVehCancelRQInfo($vehCancelRQInfo)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setPOS(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get VehCancelRQCore value
     * @return \Ammonkc\Otaehi\StructType\CancelInfoRQType|null
     */
    public function getVehCancelRQCore()
    {
        return $this->VehCancelRQCore;
    }
    /**
     * Set VehCancelRQCore value
     * @param \Ammonkc\Otaehi\StructType\CancelInfoRQType $vehCancelRQCore
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setVehCancelRQCore(\Ammonkc\Otaehi\StructType\CancelInfoRQType $vehCancelRQCore = null)
    {
        $this->VehCancelRQCore = $vehCancelRQCore;
        return $this;
    }
    /**
     * Get VehCancelRQInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType|null
     */
    public function getVehCancelRQInfo()
    {
        return $this->VehCancelRQInfo;
    }
    /**
     * Set VehCancelRQInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType $vehCancelRQInfo
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setVehCancelRQInfo(\Ammonkc\Otaehi\StructType\VehicleCancelRQAdditionalInfoType $vehCancelRQInfo = null)
    {
        $this->VehCancelRQInfo = $vehCancelRQInfo;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return |null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param  $echoToken
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setEchoToken( $echoToken = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return |null
     */
    public function getTargetName()
    {
        return $this->TargetName;
    }
    /**
     * Set TargetName value
     * @param  $targetName
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setTargetName( $targetName = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setRetransmissionIndicator($retransmissionIndicator = null)
    {
        $this->RetransmissionIndicator = $retransmissionIndicator;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return |null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param  $correlationID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setCorrelationID( $correlationID = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
     * @return |null
     */
    public function getReqRespVersion()
    {
        return $this->ReqRespVersion;
    }
    /**
     * Set ReqRespVersion value
     * @param  $reqRespVersion
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
     */
    public function setReqRespVersion( $reqRespVersion = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRQ
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
