<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSegmentAdditionalInfoType StructType
 * @subpackage Structs
 */
class VehicleSegmentAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PaymentRules
     * @var \Ammonkc\Otaehi\StructType\PaymentRules
     */
    public $PaymentRules;
    /**
     * The RentalPaymentAmount
     * @var mixed
     */
    public $RentalPaymentAmount;
    /**
     * The PricedCoverages
     * @var \Ammonkc\Otaehi\StructType\PricedCoverages
     */
    public $PricedCoverages;
    /**
     * The PricedOffLocService
     * @var mixed
     */
    public $PricedOffLocService;
    /**
     * The VendorMessages
     * @var \Ammonkc\Otaehi\StructType\VendorMessages
     */
    public $VendorMessages;
    /**
     * The LocationDetails
     * @var mixed
     */
    public $LocationDetails;
    /**
     * The TourInfo
     * @var mixed
     */
    public $TourInfo;
    /**
     * The SpecialReqPref
     * @var mixed
     */
    public $SpecialReqPref;
    /**
     * The ArrivalDetails
     * @var mixed
     */
    public $ArrivalDetails;
    /**
     * The WrittenConfInst
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * @var mixed
     */
    public $Remark;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The WrittenConfInd
     * @var bool
     */
    public $WrittenConfInd;
    /**
     * Constructor method for VehicleSegmentAdditionalInfoType
     * @uses VehicleSegmentAdditionalInfoType::setPaymentRules()
     * @uses VehicleSegmentAdditionalInfoType::setRentalPaymentAmount()
     * @uses VehicleSegmentAdditionalInfoType::setPricedCoverages()
     * @uses VehicleSegmentAdditionalInfoType::setPricedOffLocService()
     * @uses VehicleSegmentAdditionalInfoType::setVendorMessages()
     * @uses VehicleSegmentAdditionalInfoType::setLocationDetails()
     * @uses VehicleSegmentAdditionalInfoType::setTourInfo()
     * @uses VehicleSegmentAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleSegmentAdditionalInfoType::setArrivalDetails()
     * @uses VehicleSegmentAdditionalInfoType::setWrittenConfInst()
     * @uses VehicleSegmentAdditionalInfoType::setRemark()
     * @uses VehicleSegmentAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleSegmentAdditionalInfoType::setWrittenConfInd()
     * @param \Ammonkc\Otaehi\StructType\PaymentRules $paymentRules
     * @param mixed $rentalPaymentAmount
     * @param \Ammonkc\Otaehi\StructType\PricedCoverages $pricedCoverages
     * @param mixed $pricedOffLocService
     * @param \Ammonkc\Otaehi\StructType\VendorMessages $vendorMessages
     * @param mixed $locationDetails
     * @param mixed $tourInfo
     * @param mixed $specialReqPref
     * @param mixed $arrivalDetails
     * @param mixed $writtenConfInst
     * @param mixed $remark
     * @param mixed $tPA_Extensions
     * @param bool $writtenConfInd
     */
    public function __construct(\Ammonkc\Otaehi\StructType\PaymentRules $paymentRules = null, $rentalPaymentAmount = null, \Ammonkc\Otaehi\StructType\PricedCoverages $pricedCoverages = null, $pricedOffLocService = null, \Ammonkc\Otaehi\StructType\VendorMessages $vendorMessages = null, $locationDetails = null, $tourInfo = null, $specialReqPref = null, $arrivalDetails = null, $writtenConfInst = null, $remark = null, $tPA_Extensions = null, $writtenConfInd = null)
    {
        $this
            ->setPaymentRules($paymentRules)
            ->setRentalPaymentAmount($rentalPaymentAmount)
            ->setPricedCoverages($pricedCoverages)
            ->setPricedOffLocService($pricedOffLocService)
            ->setVendorMessages($vendorMessages)
            ->setLocationDetails($locationDetails)
            ->setTourInfo($tourInfo)
            ->setSpecialReqPref($specialReqPref)
            ->setArrivalDetails($arrivalDetails)
            ->setWrittenConfInst($writtenConfInst)
            ->setRemark($remark)
            ->setTPA_Extensions($tPA_Extensions)
            ->setWrittenConfInd($writtenConfInd);
    }
    /**
     * Get PaymentRules value
     * @return \Ammonkc\Otaehi\StructType\PaymentRules|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param \Ammonkc\Otaehi\StructType\PaymentRules $paymentRules
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPaymentRules(\Ammonkc\Otaehi\StructType\PaymentRules $paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get RentalPaymentAmount value
     * @return mixed|null
     */
    public function getRentalPaymentAmount()
    {
        return $this->RentalPaymentAmount;
    }
    /**
     * Set RentalPaymentAmount value
     * @param mixed $rentalPaymentAmount
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setRentalPaymentAmount($rentalPaymentAmount = null)
    {
        $this->RentalPaymentAmount = $rentalPaymentAmount;
        return $this;
    }
    /**
     * Get PricedCoverages value
     * @return \Ammonkc\Otaehi\StructType\PricedCoverages|null
     */
    public function getPricedCoverages()
    {
        return $this->PricedCoverages;
    }
    /**
     * Set PricedCoverages value
     * @param \Ammonkc\Otaehi\StructType\PricedCoverages $pricedCoverages
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPricedCoverages(\Ammonkc\Otaehi\StructType\PricedCoverages $pricedCoverages = null)
    {
        $this->PricedCoverages = $pricedCoverages;
        return $this;
    }
    /**
     * Get PricedOffLocService value
     * @return mixed|null
     */
    public function getPricedOffLocService()
    {
        return $this->PricedOffLocService;
    }
    /**
     * Set PricedOffLocService value
     * @param mixed $pricedOffLocService
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPricedOffLocService($pricedOffLocService = null)
    {
        $this->PricedOffLocService = $pricedOffLocService;
        return $this;
    }
    /**
     * Get VendorMessages value
     * @return \Ammonkc\Otaehi\StructType\VendorMessages|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @param \Ammonkc\Otaehi\StructType\VendorMessages $vendorMessages
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setVendorMessages(\Ammonkc\Otaehi\StructType\VendorMessages $vendorMessages = null)
    {
        $this->VendorMessages = $vendorMessages;
        return $this;
    }
    /**
     * Get LocationDetails value
     * @return mixed|null
     */
    public function getLocationDetails()
    {
        return $this->LocationDetails;
    }
    /**
     * Set LocationDetails value
     * @param mixed $locationDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setLocationDetails($locationDetails = null)
    {
        $this->LocationDetails = $locationDetails;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return mixed|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param mixed $tourInfo
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
        return $this;
    }
    /**
     * Get SpecialReqPref value
     * @return mixed|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @param mixed $specialReqPref
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setSpecialReqPref($specialReqPref = null)
    {
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return mixed|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param mixed $arrivalDetails
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return mixed|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param mixed $remark
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setRemark($remark = null)
    {
        $this->Remark = $remark;
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
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get WrittenConfInd value
     * @return bool|null
     */
    public function getWrittenConfInd()
    {
        return $this->WrittenConfInd;
    }
    /**
     * Set WrittenConfInd value
     * @param bool $writtenConfInd
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setWrittenConfInd($writtenConfInd = null)
    {
        $this->WrittenConfInd = $writtenConfInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehicleSegmentAdditionalInfoType
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
