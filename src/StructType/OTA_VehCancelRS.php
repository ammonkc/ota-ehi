<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehCancelRS StructType
 * @subpackage Structs
 */
class OTA_VehCancelRS extends AbstractStructBase
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
     * The VehCancelRSCore
     * @var \Ammonkc\Otaehi\StructType\VehCancelRSCore
     */
    public $VehCancelRSCore;
    /**
     * The VehCancelRSInfo
     * @var \Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType
     */
    public $VehCancelRSInfo;
    /**
     * The Errors
     * @var \Ammonkc\Otaehi\StructType\ErrorsType
     */
    public $Errors;
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
     * Constructor method for OTA_VehCancelRS
     * @uses OTA_VehCancelRS::setSuccess()
     * @uses OTA_VehCancelRS::setWarnings()
     * @uses OTA_VehCancelRS::setVehCancelRSCore()
     * @uses OTA_VehCancelRS::setVehCancelRSInfo()
     * @uses OTA_VehCancelRS::setErrors()
     * @uses OTA_VehCancelRS::setEchoToken()
     * @uses OTA_VehCancelRS::setTimeStamp()
     * @uses OTA_VehCancelRS::setTarget()
     * @uses OTA_VehCancelRS::setTargetName()
     * @uses OTA_VehCancelRS::setVersion()
     * @uses OTA_VehCancelRS::setTransactionIdentifier()
     * @uses OTA_VehCancelRS::setSequenceNmbr()
     * @uses OTA_VehCancelRS::setTransactionStatusCode()
     * @uses OTA_VehCancelRS::setRetransmissionIndicator()
     * @uses OTA_VehCancelRS::setCorrelationID()
     * @uses OTA_VehCancelRS::setPrimaryLangID()
     * @uses OTA_VehCancelRS::setAltLangID()
     * @param \Ammonkc\Otaehi\StructType\SuccessType $success
     * @param \Ammonkc\Otaehi\StructType\WarningsType $warnings
     * @param \Ammonkc\Otaehi\StructType\VehCancelRSCore $vehCancelRSCore
     * @param \Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType $vehCancelRSInfo
     * @param \Ammonkc\Otaehi\StructType\ErrorsType $errors
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
     */
    public function __construct(\Ammonkc\Otaehi\StructType\SuccessType $success = null, \Ammonkc\Otaehi\StructType\WarningsType $warnings = null, \Ammonkc\Otaehi\StructType\VehCancelRSCore $vehCancelRSCore = null, \Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType $vehCancelRSInfo = null, \Ammonkc\Otaehi\StructType\ErrorsType $errors = null,  $echoToken = null, $timeStamp = null, $target = null,  $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null,  $correlationID = null, $primaryLangID = null, $altLangID = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setVehCancelRSCore($vehCancelRSCore)
            ->setVehCancelRSInfo($vehCancelRSInfo)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
     */
    public function setWarnings(\Ammonkc\Otaehi\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get VehCancelRSCore value
     * @return \Ammonkc\Otaehi\StructType\VehCancelRSCore|null
     */
    public function getVehCancelRSCore()
    {
        return $this->VehCancelRSCore;
    }
    /**
     * Set VehCancelRSCore value
     * @param \Ammonkc\Otaehi\StructType\VehCancelRSCore $vehCancelRSCore
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
     */
    public function setVehCancelRSCore(\Ammonkc\Otaehi\StructType\VehCancelRSCore $vehCancelRSCore = null)
    {
        $this->VehCancelRSCore = $vehCancelRSCore;
        return $this;
    }
    /**
     * Get VehCancelRSInfo value
     * @return \Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType|null
     */
    public function getVehCancelRSInfo()
    {
        return $this->VehCancelRSInfo;
    }
    /**
     * Set VehCancelRSInfo value
     * @param \Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType $vehCancelRSInfo
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
     */
    public function setVehCancelRSInfo(\Ammonkc\Otaehi\StructType\VehicleCancelRSAdditionalInfoType $vehCancelRSInfo = null)
    {
        $this->VehCancelRSInfo = $vehCancelRSInfo;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
     */
    public function setErrors(\Ammonkc\Otaehi\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCancelRS
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
