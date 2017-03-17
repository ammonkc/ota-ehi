<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehCheckInRQ StructType
 * @subpackage Structs
 */
class OTA_VehCheckInRQ extends AbstractStructBase
{
    /**
     * The POS
     * @var \Ammonkc\Otaehi\StructType\POS_Type
     */
    public $POS;
    /**
     * The ConfID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $ConfID;
    /**
     * The ContractID
     * @var \Ammonkc\Otaehi\StructType\UniqueID_Type
     */
    public $ContractID;
    /**
     * The Customer
     * @var \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType
     */
    public $Customer;
    /**
     * The PickUpReturnDetails
     * @var \Ammonkc\Otaehi\StructType\VehicleRentalCoreType
     */
    public $PickUpReturnDetails;
    /**
     * The PaymentDetails
     * @var \Ammonkc\Otaehi\StructType\PaymentDetailType
     */
    public $PaymentDetails;
    /**
     * The Vehicle
     * @var \Ammonkc\Otaehi\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The VehRentalDetails
     * @var \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType
     */
    public $VehRentalDetails;
    /**
     * The PricedEquips
     * @var \Ammonkc\Otaehi\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The AdjustmentDetails
     * @var \Ammonkc\Otaehi\StructType\AdjustmentDetails
     */
    public $AdjustmentDetails;
    /**
     * The OffLocationServiceDetails
     * @var \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType
     */
    public $OffLocationServiceDetails;
    /**
     * The Remarks
     * @var \Ammonkc\Otaehi\StructType\Remarks
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
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $confID
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $contractID
     * @param \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails
     * @param \Ammonkc\Otaehi\StructType\PaymentDetailType $paymentDetails
     * @param \Ammonkc\Otaehi\StructType\VehicleType $vehicle
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @param \Ammonkc\Otaehi\StructType\AdjustmentDetails $adjustmentDetails
     * @param \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails
     * @param \Ammonkc\Otaehi\StructType\Remarks $remarks
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
    public function __construct(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null, \Ammonkc\Otaehi\StructType\UniqueID_Type $confID = null, \Ammonkc\Otaehi\StructType\UniqueID_Type $contractID = null, \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer = null, \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails = null, \Ammonkc\Otaehi\StructType\PaymentDetailType $paymentDetails = null, \Ammonkc\Otaehi\StructType\VehicleType $vehicle = null, \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails = null, \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null, \Ammonkc\Otaehi\StructType\AdjustmentDetails $adjustmentDetails = null, \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails = null, \Ammonkc\Otaehi\StructType\Remarks $remarks = null, UNKNOWN $echoToken = null, $timeStamp = null, $target = null, UNKNOWN $targetName = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, UNKNOWN $correlationID = null, $primaryLangID = null, $altLangID = null, UNKNOWN $rentalActionCode = null, $rentalAgreementStatusCode = null, UNKNOWN $reqRespVersion = null)
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
     * @return \Ammonkc\Otaehi\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Ammonkc\Otaehi\StructType\POS_Type $pOS
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPOS(\Ammonkc\Otaehi\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get ConfID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $confID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setConfID(\Ammonkc\Otaehi\StructType\UniqueID_Type $confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get ContractID value
     * @return \Ammonkc\Otaehi\StructType\UniqueID_Type|null
     */
    public function getContractID()
    {
        return $this->ContractID;
    }
    /**
     * Set ContractID value
     * @param \Ammonkc\Otaehi\StructType\UniqueID_Type $contractID
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setContractID(\Ammonkc\Otaehi\StructType\UniqueID_Type $contractID = null)
    {
        $this->ContractID = $contractID;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setCustomer(\Ammonkc\Otaehi\StructType\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get PickUpReturnDetails value
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalCoreType|null
     */
    public function getPickUpReturnDetails()
    {
        return $this->PickUpReturnDetails;
    }
    /**
     * Set PickUpReturnDetails value
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPickUpReturnDetails(\Ammonkc\Otaehi\StructType\VehicleRentalCoreType $pickUpReturnDetails = null)
    {
        $this->PickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }
    /**
     * Get PaymentDetails value
     * @return \Ammonkc\Otaehi\StructType\PaymentDetailType|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \Ammonkc\Otaehi\StructType\PaymentDetailType $paymentDetails
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPaymentDetails(\Ammonkc\Otaehi\StructType\PaymentDetailType $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Ammonkc\Otaehi\StructType\VehicleType|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Ammonkc\Otaehi\StructType\VehicleType $vehicle
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setVehicle(\Ammonkc\Otaehi\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get VehRentalDetails value
     * @return \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType|null
     */
    public function getVehRentalDetails()
    {
        return $this->VehRentalDetails;
    }
    /**
     * Set VehRentalDetails value
     * @param \Ammonkc\Otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setVehRentalDetails(\Ammonkc\Otaehi\StructType\VehicleRentalDetailsType $vehRentalDetails = null)
    {
        $this->VehRentalDetails = $vehRentalDetails;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \Ammonkc\Otaehi\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setPricedEquips(\Ammonkc\Otaehi\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
        return $this;
    }
    /**
     * Get AdjustmentDetails value
     * @return \Ammonkc\Otaehi\StructType\AdjustmentDetails|null
     */
    public function getAdjustmentDetails()
    {
        return $this->AdjustmentDetails;
    }
    /**
     * Set AdjustmentDetails value
     * @param \Ammonkc\Otaehi\StructType\AdjustmentDetails $adjustmentDetails
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setAdjustmentDetails(\Ammonkc\Otaehi\StructType\AdjustmentDetails $adjustmentDetails = null)
    {
        $this->AdjustmentDetails = $adjustmentDetails;
        return $this;
    }
    /**
     * Get OffLocationServiceDetails value
     * @return \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType|null
     */
    public function getOffLocationServiceDetails()
    {
        return $this->OffLocationServiceDetails;
    }
    /**
     * Set OffLocationServiceDetails value
     * @param \Ammonkc\Otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setOffLocationServiceDetails(\Ammonkc\Otaehi\StructType\OffLocationServiceCoreType $offLocationServiceDetails = null)
    {
        $this->OffLocationServiceDetails = $offLocationServiceDetails;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Ammonkc\Otaehi\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Ammonkc\Otaehi\StructType\Remarks $remarks
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
     */
    public function setRemarks(\Ammonkc\Otaehi\StructType\Remarks $remarks = null)
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
     * @return \Ammonkc\Otaehi\StructType\OTA_VehCheckInRQ
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
