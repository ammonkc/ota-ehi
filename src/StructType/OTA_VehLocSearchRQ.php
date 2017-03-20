<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehLocSearchRQ StructType
 * @subpackage Structs
 */
class OTA_VehLocSearchRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \Ammonkc\Otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The VehLocSearchCriterion
     * @var \Ammonkc\Otaehi\StructType\ItemSearchCriterionType
     */
    public $VehLocSearchCriterion;
    /**
     * The Vendor
     * @var \Ammonkc\Otaehi\StructType\CompanyNameType
     */
    public $Vendor;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The JustAddressPhone
     * @var bool
     */
    public $JustAddressPhone;
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
     * The MaxResponses
     * @var int
     */
    public $MaxResponses;
    /**
     * The ReqRespVersion
     * @var
     */
    public $ReqRespVersion;
    /**
     * Constructor method for OTA_VehLocSearchRQ
     * @uses OTA_VehLocSearchRQ::setPOS()
     * @uses OTA_VehLocSearchRQ::setVehLocSearchCriterion()
     * @uses OTA_VehLocSearchRQ::setVendor()
     * @uses OTA_VehLocSearchRQ::setTPA_Extensions()
     * @uses OTA_VehLocSearchRQ::setJustAddressPhone()
     * @uses OTA_VehLocSearchRQ::setEchoToken()
     * @uses OTA_VehLocSearchRQ::setTimeStamp()
     * @uses OTA_VehLocSearchRQ::setTarget()
     * @uses OTA_VehLocSearchRQ::setTargetName()
     * @uses OTA_VehLocSearchRQ::setVersion()
     * @uses OTA_VehLocSearchRQ::setTransactionIdentifier()
     * @uses OTA_VehLocSearchRQ::setSequenceNmbr()
     * @uses OTA_VehLocSearchRQ::setTransactionStatusCode()
     * @uses OTA_VehLocSearchRQ::setRetransmissionIndicator()
     * @uses OTA_VehLocSearchRQ::setCorrelationID()
     * @uses OTA_VehLocSearchRQ::setPrimaryLangID()
     * @uses OTA_VehLocSearchRQ::setAltLangID()
     * @uses OTA_VehLocSearchRQ::setMaxResponses()
     * @uses OTA_VehLocSearchRQ::setReqRespVersion()
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @param \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @param \Ammonkc\Otaehi\StructType\CompanyNameType $vendor
     * @param mixed $tPA_Extensions
     * @param bool $justAddressPhone
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
     * @param int $maxResponses
     * @param  $reqRespVersion
     */
    public function __construct(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null, \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null, \Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null, $tPA_Extensions = null, $justAddressPhone = null,  $echoToken = null, $timeStamp = null, $target = null,  $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null,  $correlationID = null, $primaryLangID = null, $altLangID = null, $maxResponses = null,  $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setVehLocSearchCriterion($vehLocSearchCriterion)
            ->setVendor($vendor)
            ->setTPA_Extensions($tPA_Extensions)
            ->setJustAddressPhone($justAddressPhone)
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
            ->setMaxResponses($maxResponses)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
     */
    public function setPOS(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get VehLocSearchCriterion value
     * @return \Ammonkc\Otaehi\StructType\ItemSearchCriterionType|null
     */
    public function getVehLocSearchCriterion()
    {
        return $this->VehLocSearchCriterion;
    }
    /**
     * Set VehLocSearchCriterion value
     * @param \Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
     */
    public function setVehLocSearchCriterion(\Ammonkc\Otaehi\StructType\ItemSearchCriterionType $vehLocSearchCriterion = null)
    {
        $this->VehLocSearchCriterion = $vehLocSearchCriterion;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
     */
    public function setVendor(\Ammonkc\Otaehi\StructType\CompanyNameType $vendor = null)
    {
        $this->Vendor = $vendor;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get JustAddressPhone value
     * @return bool|null
     */
    public function getJustAddressPhone()
    {
        return $this->JustAddressPhone;
    }
    /**
     * Set JustAddressPhone value
     * @param bool $justAddressPhone
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
     */
    public function setJustAddressPhone($justAddressPhone = null)
    {
        $this->JustAddressPhone = $justAddressPhone;
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehLocSearchRQ
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
