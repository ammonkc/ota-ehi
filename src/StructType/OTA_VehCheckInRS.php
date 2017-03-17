<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehCheckInRS StructType
 * @subpackage Structs
 */
class OTA_VehCheckInRS extends AbstractStructBase
{
    /**
     * The Success
     * @var \ammonkc\otaehi\StructType\SuccessType
     */
    public $Success;
    /**
     * The Warnings
     * @var \ammonkc\otaehi\StructType\WarningsType
     */
    public $Warnings;
    /**
     * The POS
     * @var \ammonkc\otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The Customer
     * @var \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public $Customer;
    /**
     * The VehRentalTransaction
     * @var \ammonkc\otaehi\StructType\VehicleRentalTransactionType
     */
    public $VehRentalTransaction;
    /**
     * The VehCheckInInfo
     * @var \ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public $VehCheckInInfo;
    /**
     * The Remarks
     * @var \ammonkc\otaehi\StructType\Remarks
     */
    public $Remarks;
    /**
     * The Errors
     * @var \ammonkc\otaehi\StructType\ErrorsType
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
     * The RentalActionCode
     * @var UNKNOWN
     */
    public $RentalActionCode;
    /**
     * The RentalAgreementStatusCode
     * @var string
     */
    public $RentalAgreementStatusCode;
    /**
     * Constructor method for OTA_VehCheckInRS
     * @uses OTA_VehCheckInRS::setSuccess()
     * @uses OTA_VehCheckInRS::setWarnings()
     * @uses OTA_VehCheckInRS::setPOS()
     * @uses OTA_VehCheckInRS::setCustomer()
     * @uses OTA_VehCheckInRS::setVehRentalTransaction()
     * @uses OTA_VehCheckInRS::setVehCheckInInfo()
     * @uses OTA_VehCheckInRS::setRemarks()
     * @uses OTA_VehCheckInRS::setErrors()
     * @uses OTA_VehCheckInRS::setEchoToken()
     * @uses OTA_VehCheckInRS::setTimeStamp()
     * @uses OTA_VehCheckInRS::setTarget()
     * @uses OTA_VehCheckInRS::setTargetName()
     * @uses OTA_VehCheckInRS::setVersion()
     * @uses OTA_VehCheckInRS::setTransactionIdentifier()
     * @uses OTA_VehCheckInRS::setSequenceNmbr()
     * @uses OTA_VehCheckInRS::setTransactionStatusCode()
     * @uses OTA_VehCheckInRS::setRetransmissionIndicator()
     * @uses OTA_VehCheckInRS::setCorrelationID()
     * @uses OTA_VehCheckInRS::setPrimaryLangID()
     * @uses OTA_VehCheckInRS::setAltLangID()
     * @uses OTA_VehCheckInRS::setRentalActionCode()
     * @uses OTA_VehCheckInRS::setRentalAgreementStatusCode()
     * @param \ammonkc\otaehi\StructType\SuccessType $success
     * @param \ammonkc\otaehi\StructType\WarningsType $warnings
     * @param \ammonkc\otaehi\StructType\POS_Type $pOS
     * @param \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @param \ammonkc\otaehi\StructType\VehicleRentalTransactionType $vehRentalTransaction
     * @param \ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType $vehCheckInInfo
     * @param \ammonkc\otaehi\StructType\Remarks $remarks
     * @param \ammonkc\otaehi\StructType\ErrorsType $errors
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
     * @param UNKNOWN $rentalActionCode
     * @param string $rentalAgreementStatusCode
     */
    public function __construct(\ammonkc\otaehi\StructType\SuccessType $success = null, \ammonkc\otaehi\StructType\WarningsType $warnings = null, \ammonkc\otaehi\StructType\POS_Type $pOS = null, \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null, \ammonkc\otaehi\StructType\VehicleRentalTransactionType $vehRentalTransaction = null, \ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType $vehCheckInInfo = null, \ammonkc\otaehi\StructType\Remarks $remarks = null, \ammonkc\otaehi\StructType\ErrorsType $errors = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $rentalActionCode = null, $rentalAgreementStatusCode = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setPOS($pOS)
            ->setCustomer($customer)
            ->setVehRentalTransaction($vehRentalTransaction)
            ->setVehCheckInInfo($vehCheckInInfo)
            ->setRemarks($remarks)
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
            ->setAltLangID($altLangID)
            ->setRentalActionCode($rentalActionCode)
            ->setRentalAgreementStatusCode($rentalAgreementStatusCode);
    }
    /**
     * Get Success value
     * @return \ammonkc\otaehi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \ammonkc\otaehi\StructType\SuccessType $success
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setSuccess(\ammonkc\otaehi\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \ammonkc\otaehi\StructType\WarningsType|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \ammonkc\otaehi\StructType\WarningsType $warnings
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setWarnings(\ammonkc\otaehi\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setPOS(\ammonkc\otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Customer value
     * @return \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setCustomer(\ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VehRentalTransaction value
     * @return \ammonkc\otaehi\StructType\VehicleRentalTransactionType|null
     */
    public function getVehRentalTransaction()
    {
        return $this->VehRentalTransaction;
    }
    /**
     * Set VehRentalTransaction value
     * @param \ammonkc\otaehi\StructType\VehicleRentalTransactionType $vehRentalTransaction
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setVehRentalTransaction(\ammonkc\otaehi\StructType\VehicleRentalTransactionType $vehRentalTransaction = null)
    {
        $this->VehRentalTransaction = $vehRentalTransaction;
        return $this;
    }
    /**
     * Get VehCheckInInfo value
     * @return \ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType|null
     */
    public function getVehCheckInInfo()
    {
        return $this->VehCheckInInfo;
    }
    /**
     * Set VehCheckInInfo value
     * @param \ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType $vehCheckInInfo
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setVehCheckInInfo(\ammonkc\otaehi\StructType\VehicleSegmentAdditionalInfoType $vehCheckInInfo = null)
    {
        $this->VehCheckInInfo = $vehCheckInInfo;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \ammonkc\otaehi\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \ammonkc\otaehi\StructType\Remarks $remarks
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setRemarks(\ammonkc\otaehi\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get Errors value
     * @return \ammonkc\otaehi\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \ammonkc\otaehi\StructType\ErrorsType $errors
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setErrors(\ammonkc\otaehi\StructType\ErrorsType $errors = null)
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
     * Get RentalActionCode value
     * @return UNKNOWN|null
     */
    public function getRentalActionCode()
    {
        return $this->RentalActionCode;
    }
    /**
     * Set RentalActionCode value
     * @param UNKNOWN $rentalActionCode
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setRentalActionCode(UNKNOWN $rentalActionCode = null)
    {
        $this->RentalActionCode = $rentalActionCode;
        return $this;
    }
    /**
     * Get RentalAgreementStatusCode value
     * @return string|null
     */
    public function getRentalAgreementStatusCode()
    {
        return $this->RentalAgreementStatusCode;
    }
    /**
     * Set RentalAgreementStatusCode value
     * @param string $rentalAgreementStatusCode
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
     */
    public function setRentalAgreementStatusCode($rentalAgreementStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($rentalAgreementStatusCode) && !is_string($rentalAgreementStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rentalAgreementStatusCode)), __LINE__);
        }
        $this->RentalAgreementStatusCode = $rentalAgreementStatusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRS
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
