<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonPrefType StructType
 * @subpackage Structs
 */
class CommonPrefType extends AbstractStructBase
{
    /**
     * The NamePref
     * @var mixed
     */
    public $NamePref;
    /**
     * The PhonePref
     * @var mixed
     */
    public $PhonePref;
    /**
     * The AddressPref
     * @var mixed
     */
    public $AddressPref;
    /**
     * The PaymentFormPref
     * @var mixed
     */
    public $PaymentFormPref;
    /**
     * The InterestPref
     * @var mixed
     */
    public $InterestPref;
    /**
     * The InsurancePref
     * @var mixed
     */
    public $InsurancePref;
    /**
     * The SeatingPref
     * @var mixed
     */
    public $SeatingPref;
    /**
     * The TicketDistribPref
     * @var mixed
     */
    public $TicketDistribPref;
    /**
     * The MediaEntertainPref
     * @var mixed
     */
    public $MediaEntertainPref;
    /**
     * The PetInfoPref
     * @var mixed
     */
    public $PetInfoPref;
    /**
     * The MealPref
     * @var mixed
     */
    public $MealPref;
    /**
     * The LoyaltyPref
     * @var mixed
     */
    public $LoyaltyPref;
    /**
     * The SpecRequestPref
     * @var mixed
     */
    public $SpecRequestPref;
    /**
     * The RelatedTravelerPref
     * @var mixed
     */
    public $RelatedTravelerPref;
    /**
     * The ContactPref
     * @var \Ammonkc\Otaehi\StructType\ContactPref
     */
    public $ContactPref;
    /**
     * The EmployeeLevelInfo
     * @var mixed
     */
    public $EmployeeLevelInfo;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for CommonPrefType
     * @uses CommonPrefType::setNamePref()
     * @uses CommonPrefType::setPhonePref()
     * @uses CommonPrefType::setAddressPref()
     * @uses CommonPrefType::setPaymentFormPref()
     * @uses CommonPrefType::setInterestPref()
     * @uses CommonPrefType::setInsurancePref()
     * @uses CommonPrefType::setSeatingPref()
     * @uses CommonPrefType::setTicketDistribPref()
     * @uses CommonPrefType::setMediaEntertainPref()
     * @uses CommonPrefType::setPetInfoPref()
     * @uses CommonPrefType::setMealPref()
     * @uses CommonPrefType::setLoyaltyPref()
     * @uses CommonPrefType::setSpecRequestPref()
     * @uses CommonPrefType::setRelatedTravelerPref()
     * @uses CommonPrefType::setContactPref()
     * @uses CommonPrefType::setEmployeeLevelInfo()
     * @uses CommonPrefType::setTPA_Extensions()
     * @param mixed $namePref
     * @param mixed $phonePref
     * @param mixed $addressPref
     * @param mixed $paymentFormPref
     * @param mixed $interestPref
     * @param mixed $insurancePref
     * @param mixed $seatingPref
     * @param mixed $ticketDistribPref
     * @param mixed $mediaEntertainPref
     * @param mixed $petInfoPref
     * @param mixed $mealPref
     * @param mixed $loyaltyPref
     * @param mixed $specRequestPref
     * @param mixed $relatedTravelerPref
     * @param \Ammonkc\Otaehi\StructType\ContactPref $contactPref
     * @param mixed $employeeLevelInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct($namePref = null, $phonePref = null, $addressPref = null, $paymentFormPref = null, $interestPref = null, $insurancePref = null, $seatingPref = null, $ticketDistribPref = null, $mediaEntertainPref = null, $petInfoPref = null, $mealPref = null, $loyaltyPref = null, $specRequestPref = null, $relatedTravelerPref = null, \Ammonkc\Otaehi\StructType\ContactPref $contactPref = null, $employeeLevelInfo = null, $tPA_Extensions = null)
    {
        $this
            ->setNamePref($namePref)
            ->setPhonePref($phonePref)
            ->setAddressPref($addressPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setInterestPref($interestPref)
            ->setInsurancePref($insurancePref)
            ->setSeatingPref($seatingPref)
            ->setTicketDistribPref($ticketDistribPref)
            ->setMediaEntertainPref($mediaEntertainPref)
            ->setPetInfoPref($petInfoPref)
            ->setMealPref($mealPref)
            ->setLoyaltyPref($loyaltyPref)
            ->setSpecRequestPref($specRequestPref)
            ->setRelatedTravelerPref($relatedTravelerPref)
            ->setContactPref($contactPref)
            ->setEmployeeLevelInfo($employeeLevelInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get NamePref value
     * @return mixed|null
     */
    public function getNamePref()
    {
        return $this->NamePref;
    }
    /**
     * Set NamePref value
     * @param mixed $namePref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setNamePref($namePref = null)
    {
        $this->NamePref = $namePref;
        return $this;
    }
    /**
     * Get PhonePref value
     * @return mixed|null
     */
    public function getPhonePref()
    {
        return $this->PhonePref;
    }
    /**
     * Set PhonePref value
     * @param mixed $phonePref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setPhonePref($phonePref = null)
    {
        $this->PhonePref = $phonePref;
        return $this;
    }
    /**
     * Get AddressPref value
     * @return mixed|null
     */
    public function getAddressPref()
    {
        return $this->AddressPref;
    }
    /**
     * Set AddressPref value
     * @param mixed $addressPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setAddressPref($addressPref = null)
    {
        $this->AddressPref = $addressPref;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return mixed|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @param mixed $paymentFormPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setPaymentFormPref($paymentFormPref = null)
    {
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Get InterestPref value
     * @return mixed|null
     */
    public function getInterestPref()
    {
        return $this->InterestPref;
    }
    /**
     * Set InterestPref value
     * @param mixed $interestPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setInterestPref($interestPref = null)
    {
        $this->InterestPref = $interestPref;
        return $this;
    }
    /**
     * Get InsurancePref value
     * @return mixed|null
     */
    public function getInsurancePref()
    {
        return $this->InsurancePref;
    }
    /**
     * Set InsurancePref value
     * @param mixed $insurancePref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setInsurancePref($insurancePref = null)
    {
        $this->InsurancePref = $insurancePref;
        return $this;
    }
    /**
     * Get SeatingPref value
     * @return mixed|null
     */
    public function getSeatingPref()
    {
        return $this->SeatingPref;
    }
    /**
     * Set SeatingPref value
     * @param mixed $seatingPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setSeatingPref($seatingPref = null)
    {
        $this->SeatingPref = $seatingPref;
        return $this;
    }
    /**
     * Get TicketDistribPref value
     * @return mixed|null
     */
    public function getTicketDistribPref()
    {
        return $this->TicketDistribPref;
    }
    /**
     * Set TicketDistribPref value
     * @param mixed $ticketDistribPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setTicketDistribPref($ticketDistribPref = null)
    {
        $this->TicketDistribPref = $ticketDistribPref;
        return $this;
    }
    /**
     * Get MediaEntertainPref value
     * @return mixed|null
     */
    public function getMediaEntertainPref()
    {
        return $this->MediaEntertainPref;
    }
    /**
     * Set MediaEntertainPref value
     * @param mixed $mediaEntertainPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setMediaEntertainPref($mediaEntertainPref = null)
    {
        $this->MediaEntertainPref = $mediaEntertainPref;
        return $this;
    }
    /**
     * Get PetInfoPref value
     * @return mixed|null
     */
    public function getPetInfoPref()
    {
        return $this->PetInfoPref;
    }
    /**
     * Set PetInfoPref value
     * @param mixed $petInfoPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setPetInfoPref($petInfoPref = null)
    {
        $this->PetInfoPref = $petInfoPref;
        return $this;
    }
    /**
     * Get MealPref value
     * @return mixed|null
     */
    public function getMealPref()
    {
        return $this->MealPref;
    }
    /**
     * Set MealPref value
     * @param mixed $mealPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setMealPref($mealPref = null)
    {
        $this->MealPref = $mealPref;
        return $this;
    }
    /**
     * Get LoyaltyPref value
     * @return mixed|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @param mixed $loyaltyPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setLoyaltyPref($loyaltyPref = null)
    {
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Get SpecRequestPref value
     * @return mixed|null
     */
    public function getSpecRequestPref()
    {
        return $this->SpecRequestPref;
    }
    /**
     * Set SpecRequestPref value
     * @param mixed $specRequestPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setSpecRequestPref($specRequestPref = null)
    {
        $this->SpecRequestPref = $specRequestPref;
        return $this;
    }
    /**
     * Get RelatedTravelerPref value
     * @return mixed|null
     */
    public function getRelatedTravelerPref()
    {
        return $this->RelatedTravelerPref;
    }
    /**
     * Set RelatedTravelerPref value
     * @param mixed $relatedTravelerPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setRelatedTravelerPref($relatedTravelerPref = null)
    {
        $this->RelatedTravelerPref = $relatedTravelerPref;
        return $this;
    }
    /**
     * Get ContactPref value
     * @return \Ammonkc\Otaehi\StructType\ContactPref|null
     */
    public function getContactPref()
    {
        return $this->ContactPref;
    }
    /**
     * Set ContactPref value
     * @param \Ammonkc\Otaehi\StructType\ContactPref $contactPref
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setContactPref(\Ammonkc\Otaehi\StructType\ContactPref $contactPref = null)
    {
        $this->ContactPref = $contactPref;
        return $this;
    }
    /**
     * Get EmployeeLevelInfo value
     * @return mixed|null
     */
    public function getEmployeeLevelInfo()
    {
        return $this->EmployeeLevelInfo;
    }
    /**
     * Set EmployeeLevelInfo value
     * @param mixed $employeeLevelInfo
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setEmployeeLevelInfo($employeeLevelInfo = null)
    {
        $this->EmployeeLevelInfo = $employeeLevelInfo;
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
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CommonPrefType
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
