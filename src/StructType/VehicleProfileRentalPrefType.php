<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleProfileRentalPrefType StructType
 * @subpackage Structs
 */
class VehicleProfileRentalPrefType extends AbstractStructBase
{
    /**
     * The LoyaltyPref
     * @var \ammonkc\otaehi\StructType\LoyaltyPref
     */
    public $LoyaltyPref;
    /**
     * The VendorPref
     * @var mixed
     */
    public $VendorPref;
    /**
     * The PaymentFormPref
     * @var \ammonkc\otaehi\StructType\PaymentFormPref
     */
    public $PaymentFormPref;
    /**
     * The CoveragePref
     * @var \ammonkc\otaehi\StructType\CoveragePref
     */
    public $CoveragePref;
    /**
     * The SpecialReqPref
     * @var mixed
     */
    public $SpecialReqPref;
    /**
     * The VehTypePref
     * @var mixed
     */
    public $VehTypePref;
    /**
     * The SpecialEquipPref
     * @var \ammonkc\otaehi\StructType\SpecialEquipPref
     */
    public $SpecialEquipPref;
    /**
     * The GasPrePay
     * @var bool
     */
    public $GasPrePay;
    /**
     * Constructor method for VehicleProfileRentalPrefType
     * @uses VehicleProfileRentalPrefType::setLoyaltyPref()
     * @uses VehicleProfileRentalPrefType::setVendorPref()
     * @uses VehicleProfileRentalPrefType::setPaymentFormPref()
     * @uses VehicleProfileRentalPrefType::setCoveragePref()
     * @uses VehicleProfileRentalPrefType::setSpecialReqPref()
     * @uses VehicleProfileRentalPrefType::setVehTypePref()
     * @uses VehicleProfileRentalPrefType::setSpecialEquipPref()
     * @uses VehicleProfileRentalPrefType::setGasPrePay()
     * @param \ammonkc\otaehi\StructType\LoyaltyPref $loyaltyPref
     * @param mixed $vendorPref
     * @param \ammonkc\otaehi\StructType\PaymentFormPref $paymentFormPref
     * @param \ammonkc\otaehi\StructType\CoveragePref $coveragePref
     * @param mixed $specialReqPref
     * @param mixed $vehTypePref
     * @param \ammonkc\otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @param bool $gasPrePay
     */
    public function __construct(\ammonkc\otaehi\StructType\LoyaltyPref $loyaltyPref = null, $vendorPref = null, \ammonkc\otaehi\StructType\PaymentFormPref $paymentFormPref = null, \ammonkc\otaehi\StructType\CoveragePref $coveragePref = null, $specialReqPref = null, $vehTypePref = null, \ammonkc\otaehi\StructType\SpecialEquipPref $specialEquipPref = null, $gasPrePay = null)
    {
        $this
            ->setLoyaltyPref($loyaltyPref)
            ->setVendorPref($vendorPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setCoveragePref($coveragePref)
            ->setSpecialReqPref($specialReqPref)
            ->setVehTypePref($vehTypePref)
            ->setSpecialEquipPref($specialEquipPref)
            ->setGasPrePay($gasPrePay);
    }
    /**
     * Get LoyaltyPref value
     * @return \ammonkc\otaehi\StructType\LoyaltyPref|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @param \ammonkc\otaehi\StructType\LoyaltyPref $loyaltyPref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setLoyaltyPref(\ammonkc\otaehi\StructType\LoyaltyPref $loyaltyPref = null)
    {
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @param mixed $vendorPref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setVendorPref($vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return \ammonkc\otaehi\StructType\PaymentFormPref|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @param \ammonkc\otaehi\StructType\PaymentFormPref $paymentFormPref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setPaymentFormPref(\ammonkc\otaehi\StructType\PaymentFormPref $paymentFormPref = null)
    {
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Get CoveragePref value
     * @return \ammonkc\otaehi\StructType\CoveragePref|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @param \ammonkc\otaehi\StructType\CoveragePref $coveragePref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setCoveragePref(\ammonkc\otaehi\StructType\CoveragePref $coveragePref = null)
    {
        $this->CoveragePref = $coveragePref;
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
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setSpecialReqPref($specialReqPref = null)
    {
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Get VehTypePref value
     * @return mixed|null
     */
    public function getVehTypePref()
    {
        return $this->VehTypePref;
    }
    /**
     * Set VehTypePref value
     * @param mixed $vehTypePref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setVehTypePref($vehTypePref = null)
    {
        $this->VehTypePref = $vehTypePref;
        return $this;
    }
    /**
     * Get SpecialEquipPref value
     * @return \ammonkc\otaehi\StructType\SpecialEquipPref|null
     */
    public function getSpecialEquipPref()
    {
        return $this->SpecialEquipPref;
    }
    /**
     * Set SpecialEquipPref value
     * @param \ammonkc\otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setSpecialEquipPref(\ammonkc\otaehi\StructType\SpecialEquipPref $specialEquipPref = null)
    {
        $this->SpecialEquipPref = $specialEquipPref;
        return $this;
    }
    /**
     * Get GasPrePay value
     * @return bool|null
     */
    public function getGasPrePay()
    {
        return $this->GasPrePay;
    }
    /**
     * Set GasPrePay value
     * @param bool $gasPrePay
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setGasPrePay($gasPrePay = null)
    {
        $this->GasPrePay = $gasPrePay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleProfileRentalPrefType
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
