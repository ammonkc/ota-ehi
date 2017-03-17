<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehRetResRS StructType
 * @subpackage Structs
 */
class OTA_VehRetResRS extends AbstractStructBase
{
    /**
     * The Success
     * @var \Ammonkc\Otaehi\StructType\SuccessType
     */
    public $Success;
    /**
     * The Warnings
     * @var \Ammonkc\Otaehi\StructType\WarningsType
     */
    public $Warnings;
    /**
     * The VehRetResRSCore
     * @var \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType
     */
    public $VehRetResRSCore;
    /**
     * The VehRetResRSInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType
     */
    public $VehRetResRSInfo;
    /**
     * The Errors
     * @var \Ammonkc\Otaehi\StructType\ErrorsType
     */
    public $Errors;
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
     * Constructor method for OTA_VehRetResRS
     * @uses OTA_VehRetResRS::setSuccess()
     * @uses OTA_VehRetResRS::setWarnings()
     * @uses OTA_VehRetResRS::setVehRetResRSCore()
     * @uses OTA_VehRetResRS::setVehRetResRSInfo()
     * @uses OTA_VehRetResRS::setErrors()
     * @uses OTA_VehRetResRS::setEchoToken()
     * @uses OTA_VehRetResRS::setTimeStamp()
     * @uses OTA_VehRetResRS::setTarget()
     * @uses OTA_VehRetResRS::setTargetName()
     * @uses OTA_VehRetResRS::setVersion()
     * @uses OTA_VehRetResRS::setTransactionIdentifier()
     * @uses OTA_VehRetResRS::setSequenceNmbr()
     * @uses OTA_VehRetResRS::setTransactionStatusCode()
     * @uses OTA_VehRetResRS::setRetransmissionIndicator()
     * @uses OTA_VehRetResRS::setCorrelationID()
     * @uses OTA_VehRetResRS::setPrimaryLangID()
     * @uses OTA_VehRetResRS::setAltLangID()
     * @param \Ammonkc\Otaehi\StructType\SuccessType $success
     * @param \Ammonkc\Otaehi\StructType\WarningsType $warnings
     * @param \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType $vehRetResRSCore
     * @param \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType $vehRetResRSInfo
     * @param \Ammonkc\Otaehi\StructType\ErrorsType $errors
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
     */
    public function __construct(\Ammonkc\Otaehi\StructType\SuccessType $success = null, \Ammonkc\Otaehi\StructType\WarningsType $warnings = null, \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType $vehRetResRSCore = null, \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType $vehRetResRSInfo = null, \Ammonkc\Otaehi\StructType\ErrorsType $errors = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setVehRetResRSCore($vehRetResRSCore)
            ->setVehRetResRSInfo($vehRetResRSInfo)
            ->setErrors($errors)
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
            ->setAltLangID($altLangID);
    }
    /**
     * Get Success value
     * @return \Ammonkc\Otaehi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Ammonkc\Otaehi\StructType\SuccessType $success
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
     */
    public function setSuccess(\Ammonkc\Otaehi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \Ammonkc\Otaehi\StructType\WarningsType|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \Ammonkc\Otaehi\StructType\WarningsType $warnings
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
     */
    public function setWarnings(\Ammonkc\Otaehi\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get VehRetResRSCore value
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType|null
     */
    public function getVehRetResRSCore()
    {
        return $this->VehRetResRSCore;
    }
    /**
     * Set VehRetResRSCore value
     * @param \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType $vehRetResRSCore
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
     */
    public function setVehRetResRSCore(\Ammonkc\Otaehi\StructType\VehicleRetrieveResRSCoreType $vehRetResRSCore = null)
    {
        $this->VehRetResRSCore = $vehRetResRSCore;
        return $this;
    }
    /**
     * Get VehRetResRSInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType|null
     */
    public function getVehRetResRSInfo()
    {
        return $this->VehRetResRSInfo;
    }
    /**
     * Set VehRetResRSInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType $vehRetResRSInfo
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
     */
    public function setVehRetResRSInfo(\Ammonkc\Otaehi\StructType\VehicleRetrieveResRSAdditionalInfoType $vehRetResRSInfo = null)
    {
        $this->VehRetResRSInfo = $vehRetResRSInfo;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Ammonkc\Otaehi\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Ammonkc\Otaehi\StructType\ErrorsType $errors
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
     */
    public function setErrors(\Ammonkc\Otaehi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\OTA_VehRetResRS
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
