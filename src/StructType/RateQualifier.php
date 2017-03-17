<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifier StructType
 * @subpackage Structs
 */
class RateQualifier extends AbstractStructBase
{
    /**
     * The TourInfoRPH
     * @var UNKNOWN
     */
    public $TourInfoRPH;
    /**
     * The CustLoyaltyRPH
     * @var UNKNOWN
     */
    public $CustLoyaltyRPH;
    /**
     * The QuoteID
     * @var UNKNOWN
     */
    public $QuoteID;
    /**
     * The VendorRateID
     * @var StringLength1to32
     */
    public $VendorRateID;
    /**
     * The TravelPurpose
     * @var UNKNOWN
     */
    public $TravelPurpose;
    /**
     * The RateCategory
     * @var UNKNOWN
     */
    public $RateCategory;
    /**
     * The CorpDiscountNmbr
     * @var UNKNOWN
     */
    public $CorpDiscountNmbr;
    /**
     * The PromotionCode
     * @var UNKNOWN
     */
    public $PromotionCode;
    /**
     * The PromotionVendorCode
     * @var UNKNOWN
     */
    public $PromotionVendorCode;
    /**
     * The RateQualifier
     * @var UNKNOWN
     */
    public $RateQualifier;
    /**
     * The RatePeriod
     * @var string
     */
    public $RatePeriod;
    /**
     * The GuaranteedInd
     * @var bool
     */
    public $GuaranteedInd;
    /**
     * Constructor method for RateQualifier
     * @uses RateQualifier::setTourInfoRPH()
     * @uses RateQualifier::setCustLoyaltyRPH()
     * @uses RateQualifier::setQuoteID()
     * @uses RateQualifier::setVendorRateID()
     * @uses RateQualifier::setTravelPurpose()
     * @uses RateQualifier::setRateCategory()
     * @uses RateQualifier::setCorpDiscountNmbr()
     * @uses RateQualifier::setPromotionCode()
     * @uses RateQualifier::setPromotionVendorCode()
     * @uses RateQualifier::setRateQualifier()
     * @uses RateQualifier::setRatePeriod()
     * @uses RateQualifier::setGuaranteedInd()
     * @param UNKNOWN $tourInfoRPH
     * @param UNKNOWN $custLoyaltyRPH
     * @param UNKNOWN $quoteID
     * @param StringLength1to32 $vendorRateID
     * @param UNKNOWN $travelPurpose
     * @param UNKNOWN $rateCategory
     * @param UNKNOWN $corpDiscountNmbr
     * @param UNKNOWN $promotionCode
     * @param UNKNOWN $promotionVendorCode
     * @param UNKNOWN $rateQualifier
     * @param string $ratePeriod
     * @param bool $guaranteedInd
     */
    public function __construct(UNKNOWN $tourInfoRPH = null, UNKNOWN $custLoyaltyRPH = null, UNKNOWN $quoteID = null, StringLength1to32 $vendorRateID = null, UNKNOWN $travelPurpose = null, UNKNOWN $rateCategory = null, UNKNOWN $corpDiscountNmbr = null, UNKNOWN $promotionCode = null, UNKNOWN $promotionVendorCode = null, UNKNOWN $rateQualifier = null, $ratePeriod = null, $guaranteedInd = null)
    {
        $this
            ->setTourInfoRPH($tourInfoRPH)
            ->setCustLoyaltyRPH($custLoyaltyRPH)
            ->setQuoteID($quoteID)
            ->setVendorRateID($vendorRateID)
            ->setTravelPurpose($travelPurpose)
            ->setRateCategory($rateCategory)
            ->setCorpDiscountNmbr($corpDiscountNmbr)
            ->setPromotionCode($promotionCode)
            ->setPromotionVendorCode($promotionVendorCode)
            ->setRateQualifier($rateQualifier)
            ->setRatePeriod($ratePeriod)
            ->setGuaranteedInd($guaranteedInd);
    }
    /**
     * Get TourInfoRPH value
     * @return UNKNOWN|null
     */
    public function getTourInfoRPH()
    {
        return $this->TourInfoRPH;
    }
    /**
     * Set TourInfoRPH value
     * @param UNKNOWN $tourInfoRPH
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setTourInfoRPH(UNKNOWN $tourInfoRPH = null)
    {
        $this->TourInfoRPH = $tourInfoRPH;
        return $this;
    }
    /**
     * Get CustLoyaltyRPH value
     * @return UNKNOWN|null
     */
    public function getCustLoyaltyRPH()
    {
        return $this->CustLoyaltyRPH;
    }
    /**
     * Set CustLoyaltyRPH value
     * @param UNKNOWN $custLoyaltyRPH
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setCustLoyaltyRPH(UNKNOWN $custLoyaltyRPH = null)
    {
        $this->CustLoyaltyRPH = $custLoyaltyRPH;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return UNKNOWN|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param UNKNOWN $quoteID
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setQuoteID(UNKNOWN $quoteID = null)
    {
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Get VendorRateID value
     * @return StringLength1to32|null
     */
    public function getVendorRateID()
    {
        return $this->VendorRateID;
    }
    /**
     * Set VendorRateID value
     * @param StringLength1to32 $vendorRateID
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setVendorRateID(StringLength1to32 $vendorRateID = null)
    {
        $this->VendorRateID = $vendorRateID;
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return UNKNOWN|null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param UNKNOWN $travelPurpose
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setTravelPurpose(UNKNOWN $travelPurpose = null)
    {
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Get RateCategory value
     * @return UNKNOWN|null
     */
    public function getRateCategory()
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param UNKNOWN $rateCategory
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setRateCategory(UNKNOWN $rateCategory = null)
    {
        $this->RateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return UNKNOWN|null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param UNKNOWN $corpDiscountNmbr
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setCorpDiscountNmbr(UNKNOWN $corpDiscountNmbr = null)
    {
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return UNKNOWN|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param UNKNOWN $promotionCode
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setPromotionCode(UNKNOWN $promotionCode = null)
    {
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get PromotionVendorCode value
     * @return UNKNOWN|null
     */
    public function getPromotionVendorCode()
    {
        return $this->PromotionVendorCode;
    }
    /**
     * Set PromotionVendorCode value
     * @param UNKNOWN $promotionVendorCode
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setPromotionVendorCode(UNKNOWN $promotionVendorCode = null)
    {
        $this->PromotionVendorCode = $promotionVendorCode;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return UNKNOWN|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param UNKNOWN $rateQualifier
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setRateQualifier(UNKNOWN $rateQualifier = null)
    {
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string|null
     */
    public function getRatePeriod()
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @param string $ratePeriod
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setRatePeriod($ratePeriod = null)
    {
        // validation for constraint: string
        if (!is_null($ratePeriod) && !is_string($ratePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePeriod)), __LINE__);
        }
        $this->RatePeriod = $ratePeriod;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return bool|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param bool $guaranteedInd
     * @return \ammonkc\otaehi\StructType\RateQualifier
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\RateQualifier
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
