<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleProfileRentalPrefType StructType
 * @subpackage Structs
 */
class VehicleProfileRentalPrefType extends AbstractStructBase
{
    /**
     * The LoyaltyPref
     * @var \Ammonkc\Otaehi\StructType\LoyaltyPref
     */
    public $LoyaltyPref;
    /**
     * The VendorPref
     * @var mixed
     */
    public $VendorPref;
    /**
     * The PaymentFormPref
     * @var \Ammonkc\Otaehi\StructType\PaymentFormPref
     */
    public $PaymentFormPref;
    /**
     * The CoveragePref
     * @var \Ammonkc\Otaehi\StructType\CoveragePref
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
     * @var \Ammonkc\Otaehi\StructType\SpecialEquipPref
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
     * @param \Ammonkc\Otaehi\StructType\LoyaltyPref $loyaltyPref
     * @param mixed $vendorPref
     * @param \Ammonkc\Otaehi\StructType\PaymentFormPref $paymentFormPref
     * @param \Ammonkc\Otaehi\StructType\CoveragePref $coveragePref
     * @param mixed $specialReqPref
     * @param mixed $vehTypePref
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @param bool $gasPrePay
     */
    public function __construct(\Ammonkc\Otaehi\StructType\LoyaltyPref $loyaltyPref = null, $vendorPref = null, \Ammonkc\Otaehi\StructType\PaymentFormPref $paymentFormPref = null, \Ammonkc\Otaehi\StructType\CoveragePref $coveragePref = null, $specialReqPref = null, $vehTypePref = null, \Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref = null, $gasPrePay = null)
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
     * @return \Ammonkc\Otaehi\StructType\LoyaltyPref|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @param \Ammonkc\Otaehi\StructType\LoyaltyPref $loyaltyPref
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setLoyaltyPref(\Ammonkc\Otaehi\StructType\LoyaltyPref $loyaltyPref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setVendorPref($vendorPref = null)
    {
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return \Ammonkc\Otaehi\StructType\PaymentFormPref|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @param \Ammonkc\Otaehi\StructType\PaymentFormPref $paymentFormPref
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setPaymentFormPref(\Ammonkc\Otaehi\StructType\PaymentFormPref $paymentFormPref = null)
    {
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Get CoveragePref value
     * @return \Ammonkc\Otaehi\StructType\CoveragePref|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @param \Ammonkc\Otaehi\StructType\CoveragePref $coveragePref
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setCoveragePref(\Ammonkc\Otaehi\StructType\CoveragePref $coveragePref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setVehTypePref($vehTypePref = null)
    {
        $this->VehTypePref = $vehTypePref;
        return $this;
    }
    /**
     * Get SpecialEquipPref value
     * @return \Ammonkc\Otaehi\StructType\SpecialEquipPref|null
     */
    public function getSpecialEquipPref()
    {
        return $this->SpecialEquipPref;
    }
    /**
     * Set SpecialEquipPref value
     * @param \Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
     */
    public function setSpecialEquipPref(\Ammonkc\Otaehi\StructType\SpecialEquipPref $specialEquipPref = null)
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
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
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
     * @return \Ammonkc\Otaehi\StructType\VehicleProfileRentalPrefType
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
