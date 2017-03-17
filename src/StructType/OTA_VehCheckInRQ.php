<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehCheckInRQ StructType
 * @subpackage Structs
 */
class OTA_VehCheckInRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \ammonkc\otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The ConfID
     * @var \ammonkc\otaehi\StructType\UniqueID_Type
     */
    public $ConfID;
    /**
     * The ContractID
     * @var \ammonkc\otaehi\StructType\UniqueID_Type
     */
    public $ContractID;
    /**
     * The Customer
     * @var \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public $Customer;
    /**
     * The PickUpReturnDetails
     * @var \ammonkc\otaehi\StructType\VehicleRentalCoreType
     */
    public $PickUpReturnDetails;
    /**
     * The PaymentDetails
     * @var \ammonkc\otaehi\StructType\PaymentDetailType
     */
    public $PaymentDetails;
    /**
     * The Vehicle
     * @var \ammonkc\otaehi\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The VehRentalDetails
     * @var \ammonkc\otaehi\StructType\VehicleRentalDetailsType
     */
    public $VehRentalDetails;
    /**
     * The PricedEquips
     * @var \ammonkc\otaehi\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The AdjustmentDetails
     * @var \ammonkc\otaehi\StructType\AdjustmentDetails
     */
    public $AdjustmentDetails;
    /**
     * The OffLocationServiceDetails
     * @var \ammonkc\otaehi\StructType\OffLocationServiceCoreType
     */
    public $OffLocationServiceDetails;
    /**
     * The Remarks
     * @var \ammonkc\otaehi\StructType\Remarks
     */
    public $Remarks;
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
     * The ReqRespVersion
     * @var UNKNOWN
     */
    public $ReqRespVersion;
    /**
     * Constructor method for OTA_VehCheckInRQ
     * @uses OTA_VehCheckInRQ::setPOS()
     * @uses OTA_VehCheckInRQ::setConfID()
     * @uses OTA_VehCheckInRQ::setContractID()
     * @uses OTA_VehCheckInRQ::setCustomer()
     * @uses OTA_VehCheckInRQ::setPickUpReturnDetails()
     * @uses OTA_VehCheckInRQ::setPaymentDetails()
     * @uses OTA_VehCheckInRQ::setVehicle()
     * @uses OTA_VehCheckInRQ::setVehRentalDetails()
     * @uses OTA_VehCheckInRQ::setPricedEquips()
     * @uses OTA_VehCheckInRQ::setAdjustmentDetails()
     * @uses OTA_VehCheckInRQ::setOffLocationServiceDetails()
     * @uses OTA_VehCheckInRQ::setRemarks()
     * @uses OTA_VehCheckInRQ::setEchoToken()
     * @uses OTA_VehCheckInRQ::setTimeStamp()
     * @uses OTA_VehCheckInRQ::setTarget()
     * @uses OTA_VehCheckInRQ::setTargetName()
     * @uses OTA_VehCheckInRQ::setVersion()
     * @uses OTA_VehCheckInRQ::setTransactionIdentifier()
     * @uses OTA_VehCheckInRQ::setSequenceNmbr()
     * @uses OTA_VehCheckInRQ::setTransactionStatusCode()
     * @uses OTA_VehCheckInRQ::setRetransmissionIndicator()
     * @uses OTA_VehCheckInRQ::setCorrelationID()
     * @uses OTA_VehCheckInRQ::setPrimaryLangID()
     * @uses OTA_VehCheckInRQ::setAltLangID()
     * @uses OTA_VehCheckInRQ::setRentalActionCode()
     * @uses OTA_VehCheckInRQ::setRentalAgreementStatusCode()
     * @uses OTA_VehCheckInRQ::setReqRespVersion()
     * @param \ammonkc\otaehi\StructType\POS_Type $pOS
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $confID
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $contractID
     * @param \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @param \ammonkc\otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails
     * @param \ammonkc\otaehi\StructType\PaymentDetailType $paymentDetails
     * @param \ammonkc\otaehi\StructType\VehicleType $vehicle
     * @param \ammonkc\otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails
     * @param \ammonkc\otaehi\StructType\PricedEquips $pricedEquips
     * @param \ammonkc\otaehi\StructType\AdjustmentDetails $adjustmentDetails
     * @param \ammonkc\otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails
     * @param \ammonkc\otaehi\StructType\Remarks $remarks
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
     * @param UNKNOWN $reqRespVersion
     */
    public function __construct(\ammonkc\otaehi\StructType\POS_Type $pOS = null, \ammonkc\otaehi\StructType\UniqueID_Type $confID = null, \ammonkc\otaehi\StructType\UniqueID_Type $contractID = null, \ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null, \ammonkc\otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails = null, \ammonkc\otaehi\StructType\PaymentDetailType $paymentDetails = null, \ammonkc\otaehi\StructType\VehicleType $vehicle = null, \ammonkc\otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails = null, \ammonkc\otaehi\StructType\PricedEquips $pricedEquips = null, \ammonkc\otaehi\StructType\AdjustmentDetails $adjustmentDetails = null, \ammonkc\otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails = null, \ammonkc\otaehi\StructType\Remarks $remarks = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $rentalActionCode = null, $rentalAgreementStatusCode = null, UNKNOWN $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setConfID($confID)
            ->setContractID($contractID)
            ->setCustomer($customer)
            ->setPickUpReturnDetails($pickUpReturnDetails)
            ->setPaymentDetails($paymentDetails)
            ->setVehicle($vehicle)
            ->setVehRentalDetails($vehRentalDetails)
            ->setPricedEquips($pricedEquips)
            ->setAdjustmentDetails($adjustmentDetails)
            ->setOffLocationServiceDetails($offLocationServiceDetails)
            ->setRemarks($remarks)
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
            ->setRentalAgreementStatusCode($rentalAgreementStatusCode)
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPOS(\ammonkc\otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get ConfID value
     * @return \ammonkc\otaehi\StructType\UniqueID_Type|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $confID
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setConfID(\ammonkc\otaehi\StructType\UniqueID_Type $confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get ContractID value
     * @return \ammonkc\otaehi\StructType\UniqueID_Type|null
     */
    public function getContractID()
    {
        return $this->ContractID;
    }
    /**
     * Set ContractID value
     * @param \ammonkc\otaehi\StructType\UniqueID_Type $contractID
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setContractID(\ammonkc\otaehi\StructType\UniqueID_Type $contractID = null)
    {
        $this->ContractID = $contractID;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setCustomer(\ammonkc\otaehi\StructType\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get PickUpReturnDetails value
     * @return \ammonkc\otaehi\StructType\VehicleRentalCoreType|null
     */
    public function getPickUpReturnDetails()
    {
        return $this->PickUpReturnDetails;
    }
    /**
     * Set PickUpReturnDetails value
     * @param \ammonkc\otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPickUpReturnDetails(\ammonkc\otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails = null)
    {
        $this->PickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }
    /**
     * Get PaymentDetails value
     * @return \ammonkc\otaehi\StructType\PaymentDetailType|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \ammonkc\otaehi\StructType\PaymentDetailType $paymentDetails
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPaymentDetails(\ammonkc\otaehi\StructType\PaymentDetailType $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \ammonkc\otaehi\StructType\VehicleType|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \ammonkc\otaehi\StructType\VehicleType $vehicle
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setVehicle(\ammonkc\otaehi\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get VehRentalDetails value
     * @return \ammonkc\otaehi\StructType\VehicleRentalDetailsType|null
     */
    public function getVehRentalDetails()
    {
        return $this->VehRentalDetails;
    }
    /**
     * Set VehRentalDetails value
     * @param \ammonkc\otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setVehRentalDetails(\ammonkc\otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails = null)
    {
        $this->VehRentalDetails = $vehRentalDetails;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \ammonkc\otaehi\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \ammonkc\otaehi\StructType\PricedEquips $pricedEquips
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPricedEquips(\ammonkc\otaehi\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
        return $this;
    }
    /**
     * Get AdjustmentDetails value
     * @return \ammonkc\otaehi\StructType\AdjustmentDetails|null
     */
    public function getAdjustmentDetails()
    {
        return $this->AdjustmentDetails;
    }
    /**
     * Set AdjustmentDetails value
     * @param \ammonkc\otaehi\StructType\AdjustmentDetails $adjustmentDetails
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setAdjustmentDetails(\ammonkc\otaehi\StructType\AdjustmentDetails $adjustmentDetails = null)
    {
        $this->AdjustmentDetails = $adjustmentDetails;
        return $this;
    }
    /**
     * Get OffLocationServiceDetails value
     * @return \ammonkc\otaehi\StructType\OffLocationServiceCoreType|null
     */
    public function getOffLocationServiceDetails()
    {
        return $this->OffLocationServiceDetails;
    }
    /**
     * Set OffLocationServiceDetails value
     * @param \ammonkc\otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setOffLocationServiceDetails(\ammonkc\otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails = null)
    {
        $this->OffLocationServiceDetails = $offLocationServiceDetails;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setRemarks(\ammonkc\otaehi\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \ammonkc\otaehi\StructType\OTA_VehCheckInRQ
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
