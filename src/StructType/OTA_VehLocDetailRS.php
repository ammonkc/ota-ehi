<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehLocDetailRS StructType
 * @subpackage Structs
 */
class OTA_VehLocDetailRS extends AbstractStructBase
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
     * The Vendor
     * @var \ammonkc\otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The LocationDetail
     * @var \ammonkc\otaehi\StructType\VehicleLocationDetailsType
     */
    public $LocationDetail;
    /**
     * The Vehicles
     * @var \ammonkc\otaehi\StructType\VehicleLocationVehiclesType
     */
    public $Vehicles;
    /**
     * The Requirements
     * @var \ammonkc\otaehi\StructType\VehicleLocationRequirementsType
     */
    public $Requirements;
    /**
     * The AdditionalFees
     * @var \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public $AdditionalFees;
    /**
     * The Liabilities
     * @var \ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType
     */
    public $Liabilities;
    /**
     * The ServicesOffered
     * @var \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public $ServicesOffered;
    /**
     * The Date
     * @var \ammonkc\otaehi\StructType\Date
     */
    public $Date;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
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
     * Constructor method for OTA_VehLocDetailRS
     * @uses OTA_VehLocDetailRS::setSuccess()
     * @uses OTA_VehLocDetailRS::setWarnings()
     * @uses OTA_VehLocDetailRS::setVendor()
     * @uses OTA_VehLocDetailRS::setLocationDetail()
     * @uses OTA_VehLocDetailRS::setVehicles()
     * @uses OTA_VehLocDetailRS::setRequirements()
     * @uses OTA_VehLocDetailRS::setAdditionalFees()
     * @uses OTA_VehLocDetailRS::setLiabilities()
     * @uses OTA_VehLocDetailRS::setServicesOffered()
     * @uses OTA_VehLocDetailRS::setDate()
     * @uses OTA_VehLocDetailRS::setTPA_Extensions()
     * @uses OTA_VehLocDetailRS::setErrors()
     * @uses OTA_VehLocDetailRS::setEchoToken()
     * @uses OTA_VehLocDetailRS::setTimeStamp()
     * @uses OTA_VehLocDetailRS::setTarget()
     * @uses OTA_VehLocDetailRS::setTargetName()
     * @uses OTA_VehLocDetailRS::setVersion()
     * @uses OTA_VehLocDetailRS::setTransactionIdentifier()
     * @uses OTA_VehLocDetailRS::setSequenceNmbr()
     * @uses OTA_VehLocDetailRS::setTransactionStatusCode()
     * @uses OTA_VehLocDetailRS::setRetransmissionIndicator()
     * @uses OTA_VehLocDetailRS::setCorrelationID()
     * @uses OTA_VehLocDetailRS::setPrimaryLangID()
     * @uses OTA_VehLocDetailRS::setAltLangID()
     * @param \ammonkc\otaehi\StructType\SuccessType $success
     * @param \ammonkc\otaehi\StructType\WarningsType $warnings
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @param \ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @param \ammonkc\otaehi\StructType\VehicleLocationVehiclesType $vehicles
     * @param \ammonkc\otaehi\StructType\VehicleLocationRequirementsType $requirements
     * @param \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees
     * @param \ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType $liabilities
     * @param \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered
     * @param \ammonkc\otaehi\StructType\Date $date
     * @param mixed $tPA_Extensions
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
     */
    public function __construct(\ammonkc\otaehi\StructType\SuccessType $success = null, \ammonkc\otaehi\StructType\WarningsType $warnings = null, \ammonkc\otaehi\StructType\CompanyNameType $vendor = null, \ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail = null, \ammonkc\otaehi\StructType\VehicleLocationVehiclesType $vehicles = null, \ammonkc\otaehi\StructType\VehicleLocationRequirementsType $requirements = null, \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees = null, \ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType $liabilities = null, \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered = null, \ammonkc\otaehi\StructType\Date $date = null, $tPA_Extensions = null, \ammonkc\otaehi\StructType\ErrorsType $errors = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null)
    {
        $this
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setVendor($vendor)
            ->setLocationDetail($locationDetail)
            ->setVehicles($vehicles)
            ->setRequirements($requirements)
            ->setAdditionalFees($additionalFees)
            ->setLiabilities($liabilities)
            ->setServicesOffered($servicesOffered)
            ->setDate($date)
            ->setTPA_Extensions($tPA_Extensions)
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
     * @return \ammonkc\otaehi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \ammonkc\otaehi\StructType\SuccessType $success
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setWarnings(\ammonkc\otaehi\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \ammonkc\otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setVendor(\ammonkc\otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get LocationDetail value
     * @return \ammonkc\otaehi\StructType\VehicleLocationDetailsType|null
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    /**
     * Set LocationDetail value
     * @param \ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setLocationDetail(\ammonkc\otaehi\StructType\VehicleLocationDetailsType $locationDetail = null)
    {
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \ammonkc\otaehi\StructType\VehicleLocationVehiclesType|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \ammonkc\otaehi\StructType\VehicleLocationVehiclesType $vehicles
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setVehicles(\ammonkc\otaehi\StructType\VehicleLocationVehiclesType $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Requirements value
     * @return \ammonkc\otaehi\StructType\VehicleLocationRequirementsType|null
     */
    public function getRequirements()
    {
        return $this->Requirements;
    }
    /**
     * Set Requirements value
     * @param \ammonkc\otaehi\StructType\VehicleLocationRequirementsType $requirements
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setRequirements(\ammonkc\otaehi\StructType\VehicleLocationRequirementsType $requirements = null)
    {
        $this->Requirements = $requirements;
        return $this;
    }
    /**
     * Get AdditionalFees value
     * @return \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType|null
     */
    public function getAdditionalFees()
    {
        return $this->AdditionalFees;
    }
    /**
     * Set AdditionalFees value
     * @param \ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setAdditionalFees(\ammonkc\otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees = null)
    {
        $this->AdditionalFees = $additionalFees;
        return $this;
    }
    /**
     * Get Liabilities value
     * @return \ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType|null
     */
    public function getLiabilities()
    {
        return $this->Liabilities;
    }
    /**
     * Set Liabilities value
     * @param \ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType $liabilities
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setLiabilities(\ammonkc\otaehi\StructType\VehicleLocationLiabilitiesType $liabilities = null)
    {
        $this->Liabilities = $liabilities;
        return $this;
    }
    /**
     * Get ServicesOffered value
     * @return \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType|null
     */
    public function getServicesOffered()
    {
        return $this->ServicesOffered;
    }
    /**
     * Set ServicesOffered value
     * @param \ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setServicesOffered(\ammonkc\otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered = null)
    {
        $this->ServicesOffered = $servicesOffered;
        return $this;
    }
    /**
     * Get Date value
     * @return \ammonkc\otaehi\StructType\Date|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param \ammonkc\otaehi\StructType\Date $date
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setDate(\ammonkc\otaehi\StructType\Date $date = null)
    {
        $this->Date = $date;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRS
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
