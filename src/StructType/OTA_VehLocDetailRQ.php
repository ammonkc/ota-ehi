<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehLocDetailRQ StructType
 * @subpackage Structs
 */
class OTA_VehLocDetailRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \ammonkc\otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The Location
     * @var \ammonkc\otaehi\StructType\Location
     */
    public $Location;
    /**
     * The Vendor
     * @var \ammonkc\otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The ResponseFilter
     * @var \ammonkc\otaehi\StructType\ResponseFilter
     */
    public $ResponseFilter;
    /**
     * The Date
     * @var \ammonkc\otaehi\StructType\Date
     */
    public $Date;
    /**
     * The Keyword
     * @var \ammonkc\otaehi\StructType\Keyword
     */
    public $Keyword;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
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
     * Constructor method for OTA_VehLocDetailRQ
     * @uses OTA_VehLocDetailRQ::setPOS()
     * @uses OTA_VehLocDetailRQ::setLocation()
     * @uses OTA_VehLocDetailRQ::setVendor()
     * @uses OTA_VehLocDetailRQ::setResponseFilter()
     * @uses OTA_VehLocDetailRQ::setDate()
     * @uses OTA_VehLocDetailRQ::setKeyword()
     * @uses OTA_VehLocDetailRQ::setTPA_Extensions()
     * @uses OTA_VehLocDetailRQ::setEchoToken()
     * @uses OTA_VehLocDetailRQ::setTimeStamp()
     * @uses OTA_VehLocDetailRQ::setTarget()
     * @uses OTA_VehLocDetailRQ::setTargetName()
     * @uses OTA_VehLocDetailRQ::setVersion()
     * @uses OTA_VehLocDetailRQ::setTransactionIdentifier()
     * @uses OTA_VehLocDetailRQ::setSequenceNmbr()
     * @uses OTA_VehLocDetailRQ::setTransactionStatusCode()
     * @uses OTA_VehLocDetailRQ::setRetransmissionIndicator()
     * @uses OTA_VehLocDetailRQ::setCorrelationID()
     * @uses OTA_VehLocDetailRQ::setPrimaryLangID()
     * @uses OTA_VehLocDetailRQ::setAltLangID()
     * @uses OTA_VehLocDetailRQ::setReqRespVersion()
     * @param \ammonkc\otaehi\StructType\POS_Type $pOS
     * @param \ammonkc\otaehi\StructType\Location $location
     * @param \ammonkc\otaehi\StructType\CompanyNameType $vendor
     * @param \ammonkc\otaehi\StructType\ResponseFilter $responseFilter
     * @param \ammonkc\otaehi\StructType\Date $date
     * @param \ammonkc\otaehi\StructType\Keyword $keyword
     * @param mixed $tPA_Extensions
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
    public function __construct(\ammonkc\otaehi\StructType\POS_Type $pOS = null, \ammonkc\otaehi\StructType\Location $location = null, \ammonkc\otaehi\StructType\CompanyNameType $vendor = null, \ammonkc\otaehi\StructType\ResponseFilter $responseFilter = null, \ammonkc\otaehi\StructType\Date $date = null, \ammonkc\otaehi\StructType\Keyword $keyword = null, $tPA_Extensions = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setLocation($location)
            ->setVendor($vendor)
            ->setResponseFilter($responseFilter)
            ->setDate($date)
            ->setKeyword($keyword)
            ->setTPA_Extensions($tPA_Extensions)
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setPOS(\ammonkc\otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Location value
     * @return \ammonkc\otaehi\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \ammonkc\otaehi\StructType\Location $location
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setLocation(\ammonkc\otaehi\StructType\Location $location = null)
    {
        $this->Location = $location;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setVendor(\ammonkc\otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get ResponseFilter value
     * @return \ammonkc\otaehi\StructType\ResponseFilter|null
     */
    public function getResponseFilter()
    {
        return $this->ResponseFilter;
    }
    /**
     * Set ResponseFilter value
     * @param \ammonkc\otaehi\StructType\ResponseFilter $responseFilter
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setResponseFilter(\ammonkc\otaehi\StructType\ResponseFilter $responseFilter = null)
    {
        $this->ResponseFilter = $responseFilter;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setDate(\ammonkc\otaehi\StructType\Date $date = null)
    {
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Keyword value
     * @return \ammonkc\otaehi\StructType\Keyword|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param \ammonkc\otaehi\StructType\Keyword $keyword
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setKeyword(\ammonkc\otaehi\StructType\Keyword $keyword = null)
    {
        $this->Keyword = $keyword;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehLocDetailRQ
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
