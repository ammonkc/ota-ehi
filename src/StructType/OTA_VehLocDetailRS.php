<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehLocDetailRS StructType
 * @subpackage Structs
 */
class OTA_VehLocDetailRS extends AbstractStructBase
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
     * The Vendor
     * @var \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The LocationDetail
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType
     */
    public $LocationDetail;
    /**
     * The Vehicles
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType
     */
    public $Vehicles;
    /**
     * The Requirements
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType
     */
    public $Requirements;
    /**
     * The AdditionalFees
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType
     */
    public $AdditionalFees;
    /**
     * The Liabilities
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType
     */
    public $Liabilities;
    /**
     * The ServicesOffered
     * @var \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType
     */
    public $ServicesOffered;
    /**
     * The Date
     * @var \Ammonkc\Otaehi\StructType\Date
     */
    public $Date;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
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
     * @param \Ammonkc\Otaehi\StructType\SuccessType $success
     * @param \Ammonkc\Otaehi\StructType\WarningsType $warnings
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType $vehicles
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType $requirements
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType $liabilities
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered
     * @param \Ammonkc\Otaehi\StructType\Date $date
     * @param mixed $tPA_Extensions
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
    public function __construct(\Ammonkc\Otaehi\StructType\SuccessType $success = null, \Ammonkc\Otaehi\StructType\WarningsType $warnings = null, \Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null, \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail = null, \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType $vehicles = null, \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType $requirements = null, \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees = null, \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType $liabilities = null, \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered = null, \Ammonkc\Otaehi\StructType\Date $date = null, $tPA_Extensions = null, \Ammonkc\Otaehi\StructType\ErrorsType $errors = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null)
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
     * @return \Ammonkc\Otaehi\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Ammonkc\Otaehi\StructType\SuccessType $success
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setWarnings(\Ammonkc\Otaehi\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Ammonkc\Otaehi\StructType\CompanyNameType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setVendor(\Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get LocationDetail value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType|null
     */
    public function getLocationDetail()
    {
        return $this->LocationDetail;
    }
    /**
     * Set LocationDetail value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setLocationDetail(\Ammonkc\Otaehi\StructType\VehicleLocationDetailsType $locationDetail = null)
    {
        $this->LocationDetail = $locationDetail;
        return $this;
    }
    /**
     * Get Vehicles value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType|null
     */
    public function getVehicles()
    {
        return $this->Vehicles;
    }
    /**
     * Set Vehicles value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType $vehicles
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setVehicles(\Ammonkc\Otaehi\StructType\VehicleLocationVehiclesType $vehicles = null)
    {
        $this->Vehicles = $vehicles;
        return $this;
    }
    /**
     * Get Requirements value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType|null
     */
    public function getRequirements()
    {
        return $this->Requirements;
    }
    /**
     * Set Requirements value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType $requirements
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setRequirements(\Ammonkc\Otaehi\StructType\VehicleLocationRequirementsType $requirements = null)
    {
        $this->Requirements = $requirements;
        return $this;
    }
    /**
     * Get AdditionalFees value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType|null
     */
    public function getAdditionalFees()
    {
        return $this->AdditionalFees;
    }
    /**
     * Set AdditionalFees value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setAdditionalFees(\Ammonkc\Otaehi\StructType\VehicleLocationAdditionalFeesType $additionalFees = null)
    {
        $this->AdditionalFees = $additionalFees;
        return $this;
    }
    /**
     * Get Liabilities value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType|null
     */
    public function getLiabilities()
    {
        return $this->Liabilities;
    }
    /**
     * Set Liabilities value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType $liabilities
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setLiabilities(\Ammonkc\Otaehi\StructType\VehicleLocationLiabilitiesType $liabilities = null)
    {
        $this->Liabilities = $liabilities;
        return $this;
    }
    /**
     * Get ServicesOffered value
     * @return \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType|null
     */
    public function getServicesOffered()
    {
        return $this->ServicesOffered;
    }
    /**
     * Set ServicesOffered value
     * @param \Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setServicesOffered(\Ammonkc\Otaehi\StructType\VehicleLocationServicesOfferedType $servicesOffered = null)
    {
        $this->ServicesOffered = $servicesOffered;
        return $this;
    }
    /**
     * Get Date value
     * @return \Ammonkc\Otaehi\StructType\Date|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param \Ammonkc\Otaehi\StructType\Date $date
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setDate(\Ammonkc\Otaehi\StructType\Date $date = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocDetailRS
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
