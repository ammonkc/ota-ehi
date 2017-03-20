<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifier StructType
 * @subpackage Structs
 */
class RateQualifier extends AbstractStructBase
{
    /**
     * The TourInfoRPH
     * @var
     */
    public $TourInfoRPH;
    /**
     * The CustLoyaltyRPH
     * @var
     */
    public $CustLoyaltyRPH;
    /**
     * The QuoteID
     * @var
     */
    public $QuoteID;
    /**
     * The VendorRateID
     * @var StringLength1to32
     */
    public $VendorRateID;
    /**
     * The TravelPurpose
     * @var
     */
    public $TravelPurpose;
    /**
     * The RateCategory
     * @var
     */
    public $RateCategory;
    /**
     * The CorpDiscountNmbr
     * @var
     */
    public $CorpDiscountNmbr;
    /**
     * The PromotionCode
     * @var
     */
    public $PromotionCode;
    /**
     * The PromotionVendorCode
     * @var
     */
    public $PromotionVendorCode;
    /**
     * The RateQualifier
     * @var
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
     * @param  $tourInfoRPH
     * @param  $custLoyaltyRPH
     * @param  $quoteID
     * @param StringLength1to32 $vendorRateID
     * @param  $travelPurpose
     * @param  $rateCategory
     * @param  $corpDiscountNmbr
     * @param  $promotionCode
     * @param  $promotionVendorCode
     * @param  $rateQualifier
     * @param string $ratePeriod
     * @param bool $guaranteedInd
     */
    public function __construct( $tourInfoRPH = null,  $custLoyaltyRPH = null,  $quoteID = null, StringLength1to32 $vendorRateID = null,  $travelPurpose = null,  $rateCategory = null,  $corpDiscountNmbr = null,  $promotionCode = null,  $promotionVendorCode = null,  $rateQualifier = null, $ratePeriod = null, $guaranteedInd = null)
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
     * @return |null
     */
    public function getTourInfoRPH()
    {
        return $this->TourInfoRPH;
    }
    /**
     * Set TourInfoRPH value
     * @param  $tourInfoRPH
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setTourInfoRPH( $tourInfoRPH = null)
    {
        $this->TourInfoRPH = $tourInfoRPH;
        return $this;
    }
    /**
     * Get CustLoyaltyRPH value
     * @return |null
     */
    public function getCustLoyaltyRPH()
    {
        return $this->CustLoyaltyRPH;
    }
    /**
     * Set CustLoyaltyRPH value
     * @param  $custLoyaltyRPH
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setCustLoyaltyRPH( $custLoyaltyRPH = null)
    {
        $this->CustLoyaltyRPH = $custLoyaltyRPH;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return |null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param  $quoteID
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setQuoteID( $quoteID = null)
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
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setVendorRateID(StringLength1to32 $vendorRateID = null)
    {
        $this->VendorRateID = $vendorRateID;
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return |null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param  $travelPurpose
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setTravelPurpose( $travelPurpose = null)
    {
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Get RateCategory value
     * @return |null
     */
    public function getRateCategory()
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param  $rateCategory
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setRateCategory( $rateCategory = null)
    {
        $this->RateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get CorpDiscountNmbr value
     * @return |null
     */
    public function getCorpDiscountNmbr()
    {
        return $this->CorpDiscountNmbr;
    }
    /**
     * Set CorpDiscountNmbr value
     * @param  $corpDiscountNmbr
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setCorpDiscountNmbr( $corpDiscountNmbr = null)
    {
        $this->CorpDiscountNmbr = $corpDiscountNmbr;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return |null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param  $promotionCode
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setPromotionCode( $promotionCode = null)
    {
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get PromotionVendorCode value
     * @return |null
     */
    public function getPromotionVendorCode()
    {
        return $this->PromotionVendorCode;
    }
    /**
     * Set PromotionVendorCode value
     * @param  $promotionVendorCode
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setPromotionVendorCode( $promotionVendorCode = null)
    {
        $this->PromotionVendorCode = $promotionVendorCode;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return |null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @param  $rateQualifier
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
     */
    public function setRateQualifier( $rateQualifier = null)
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
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
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
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
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
     * @return \Ammonkc\Otaehi\StructType\RateQualifier
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
