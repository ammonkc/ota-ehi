<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerType StructType
 * @subpackage Structs
 */
class CustomerType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Email
     * @var \Ammonkc\Otaehi\StructType\Email
     */
    public $Email;
    /**
     * The Address
     * @var \Ammonkc\Otaehi\StructType\Address
     */
    public $Address;
    /**
     * The URL
     * @var \Ammonkc\Otaehi\StructType\URL
     */
    public $URL;
    /**
     * The CitizenCountryName
     * @var \Ammonkc\Otaehi\StructType\CitizenCountryName
     */
    public $CitizenCountryName;
    /**
     * The PhysChallName
     * @var \Ammonkc\Otaehi\StructType\PhysChallName
     */
    public $PhysChallName;
    /**
     * The PetInfo
     * @var mixed
     */
    public $PetInfo;
    /**
     * The PaymentForm
     * @var \Ammonkc\Otaehi\StructType\PaymentForm
     */
    public $PaymentForm;
    /**
     * The RelatedTraveler
     * @var mixed
     */
    public $RelatedTraveler;
    /**
     * The ContactPerson
     * @var mixed
     */
    public $ContactPerson;
    /**
     * The Document
     * @var mixed
     */
    public $Document;
    /**
     * The CustLoyalty
     * @var \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The EmployeeInfo
     * @var mixed
     */
    public $EmployeeInfo;
    /**
     * The EmployerInfo
     * @var mixed
     */
    public $EmployerInfo;
    /**
     * The AdditionalLanguage
     * @var \Ammonkc\Otaehi\StructType\AdditionalLanguage
     */
    public $AdditionalLanguage;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Deceased
     * @var bool
     */
    public $Deceased;
    /**
     * The LockoutType
     * @var UNKNOWN
     */
    public $LockoutType;
    /**
     * The VIP_Indicator
     * @var bool
     */
    public $VIP_Indicator;
    /**
     * The Text
     * @var UNKNOWN
     */
    public $Text;
    /**
     * The CustomerValue
     * @var UNKNOWN
     */
    public $CustomerValue;
    /**
     * The MaritalStatus
     * @var string
     */
    public $MaritalStatus;
    /**
     * The PreviouslyMarriedIndicator
     * @var bool
     */
    public $PreviouslyMarriedIndicator;
    /**
     * The ChildQuantity
     * @var UNKNOWN
     */
    public $ChildQuantity;
    /**
     * Constructor method for CustomerType
     * @uses CustomerType::setPersonName()
     * @uses CustomerType::setTelephone()
     * @uses CustomerType::setEmail()
     * @uses CustomerType::setAddress()
     * @uses CustomerType::setURL()
     * @uses CustomerType::setCitizenCountryName()
     * @uses CustomerType::setPhysChallName()
     * @uses CustomerType::setPetInfo()
     * @uses CustomerType::setPaymentForm()
     * @uses CustomerType::setRelatedTraveler()
     * @uses CustomerType::setContactPerson()
     * @uses CustomerType::setDocument()
     * @uses CustomerType::setCustLoyalty()
     * @uses CustomerType::setEmployeeInfo()
     * @uses CustomerType::setEmployerInfo()
     * @uses CustomerType::setAdditionalLanguage()
     * @uses CustomerType::setTPA_Extensions()
     * @uses CustomerType::setDeceased()
     * @uses CustomerType::setLockoutType()
     * @uses CustomerType::setVIP_Indicator()
     * @uses CustomerType::setText()
     * @uses CustomerType::setCustomerValue()
     * @uses CustomerType::setMaritalStatus()
     * @uses CustomerType::setPreviouslyMarriedIndicator()
     * @uses CustomerType::setChildQuantity()
     * @param mixed $personName
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param \Ammonkc\Otaehi\StructType\Email $email
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @param \Ammonkc\Otaehi\StructType\URL $uRL
     * @param \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName
     * @param \Ammonkc\Otaehi\StructType\PhysChallName $physChallName
     * @param mixed $petInfo
     * @param \Ammonkc\Otaehi\StructType\PaymentForm $paymentForm
     * @param mixed $relatedTraveler
     * @param mixed $contactPerson
     * @param mixed $document
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $employeeInfo
     * @param mixed $employerInfo
     * @param \Ammonkc\Otaehi\StructType\AdditionalLanguage $additionalLanguage
     * @param mixed $tPA_Extensions
     * @param bool $deceased
     * @param UNKNOWN $lockoutType
     * @param bool $vIP_Indicator
     * @param UNKNOWN $text
     * @param UNKNOWN $customerValue
     * @param string $maritalStatus
     * @param bool $previouslyMarriedIndicator
     * @param UNKNOWN $childQuantity
     */
    public function __construct($personName = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, \Ammonkc\Otaehi\StructType\Email $email = null, \Ammonkc\Otaehi\StructType\Address $address = null, \Ammonkc\Otaehi\StructType\URL $uRL = null, \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName = null, \Ammonkc\Otaehi\StructType\PhysChallName $physChallName = null, $petInfo = null, \Ammonkc\Otaehi\StructType\PaymentForm $paymentForm = null, $relatedTraveler = null, $contactPerson = null, $document = null, \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null, $employeeInfo = null, $employerInfo = null, \Ammonkc\Otaehi\StructType\AdditionalLanguage $additionalLanguage = null, $tPA_Extensions = null, $deceased = null, UNKNOWN $lockoutType = null, $vIP_Indicator = null, UNKNOWN $text = null, UNKNOWN $customerValue = null, $maritalStatus = null, $previouslyMarriedIndicator = null, UNKNOWN $childQuantity = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address)
            ->setURL($uRL)
            ->setCitizenCountryName($citizenCountryName)
            ->setPhysChallName($physChallName)
            ->setPetInfo($petInfo)
            ->setPaymentForm($paymentForm)
            ->setRelatedTraveler($relatedTraveler)
            ->setContactPerson($contactPerson)
            ->setDocument($document)
            ->setCustLoyalty($custLoyalty)
            ->setEmployeeInfo($employeeInfo)
            ->setEmployerInfo($employerInfo)
            ->setAdditionalLanguage($additionalLanguage)
            ->setTPA_Extensions($tPA_Extensions)
            ->setDeceased($deceased)
            ->setLockoutType($lockoutType)
            ->setVIP_Indicator($vIP_Indicator)
            ->setText($text)
            ->setCustomerValue($customerValue)
            ->setMaritalStatus($maritalStatus)
            ->setPreviouslyMarriedIndicator($previouslyMarriedIndicator)
            ->setChildQuantity($childQuantity);
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Ammonkc\Otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Email value
     * @return \Ammonkc\Otaehi\StructType\Email|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Ammonkc\Otaehi\StructType\Email $email
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setEmail(\Ammonkc\Otaehi\StructType\Email $email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Address value
     * @return \Ammonkc\Otaehi\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Ammonkc\Otaehi\StructType\Address $address
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setAddress(\Ammonkc\Otaehi\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get URL value
     * @return \Ammonkc\Otaehi\StructType\URL|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param \Ammonkc\Otaehi\StructType\URL $uRL
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setURL(\Ammonkc\Otaehi\StructType\URL $uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get CitizenCountryName value
     * @return \Ammonkc\Otaehi\StructType\CitizenCountryName|null
     */
    public function getCitizenCountryName()
    {
        return $this->CitizenCountryName;
    }
    /**
     * Set CitizenCountryName value
     * @param \Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setCitizenCountryName(\Ammonkc\Otaehi\StructType\CitizenCountryName $citizenCountryName = null)
    {
        $this->CitizenCountryName = $citizenCountryName;
        return $this;
    }
    /**
     * Get PhysChallName value
     * @return \Ammonkc\Otaehi\StructType\PhysChallName|null
     */
    public function getPhysChallName()
    {
        return $this->PhysChallName;
    }
    /**
     * Set PhysChallName value
     * @param \Ammonkc\Otaehi\StructType\PhysChallName $physChallName
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setPhysChallName(\Ammonkc\Otaehi\StructType\PhysChallName $physChallName = null)
    {
        $this->PhysChallName = $physChallName;
        return $this;
    }
    /**
     * Get PetInfo value
     * @return mixed|null
     */
    public function getPetInfo()
    {
        return $this->PetInfo;
    }
    /**
     * Set PetInfo value
     * @param mixed $petInfo
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setPetInfo($petInfo = null)
    {
        $this->PetInfo = $petInfo;
        return $this;
    }
    /**
     * Get PaymentForm value
     * @return \Ammonkc\Otaehi\StructType\PaymentForm|null
     */
    public function getPaymentForm()
    {
        return $this->PaymentForm;
    }
    /**
     * Set PaymentForm value
     * @param \Ammonkc\Otaehi\StructType\PaymentForm $paymentForm
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setPaymentForm(\Ammonkc\Otaehi\StructType\PaymentForm $paymentForm = null)
    {
        $this->PaymentForm = $paymentForm;
        return $this;
    }
    /**
     * Get RelatedTraveler value
     * @return mixed|null
     */
    public function getRelatedTraveler()
    {
        return $this->RelatedTraveler;
    }
    /**
     * Set RelatedTraveler value
     * @param mixed $relatedTraveler
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setRelatedTraveler($relatedTraveler = null)
    {
        $this->RelatedTraveler = $relatedTraveler;
        return $this;
    }
    /**
     * Get ContactPerson value
     * @return mixed|null
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }
    /**
     * Set ContactPerson value
     * @param mixed $contactPerson
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setContactPerson($contactPerson = null)
    {
        $this->ContactPerson = $contactPerson;
        return $this;
    }
    /**
     * Get Document value
     * @return mixed|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @param mixed $document
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setDocument($document = null)
    {
        $this->Document = $document;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setCustLoyalty(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get EmployeeInfo value
     * @return mixed|null
     */
    public function getEmployeeInfo()
    {
        return $this->EmployeeInfo;
    }
    /**
     * Set EmployeeInfo value
     * @param mixed $employeeInfo
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setEmployeeInfo($employeeInfo = null)
    {
        $this->EmployeeInfo = $employeeInfo;
        return $this;
    }
    /**
     * Get EmployerInfo value
     * @return mixed|null
     */
    public function getEmployerInfo()
    {
        return $this->EmployerInfo;
    }
    /**
     * Set EmployerInfo value
     * @param mixed $employerInfo
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setEmployerInfo($employerInfo = null)
    {
        $this->EmployerInfo = $employerInfo;
        return $this;
    }
    /**
     * Get AdditionalLanguage value
     * @return \Ammonkc\Otaehi\StructType\AdditionalLanguage|null
     */
    public function getAdditionalLanguage()
    {
        return $this->AdditionalLanguage;
    }
    /**
     * Set AdditionalLanguage value
     * @param \Ammonkc\Otaehi\StructType\AdditionalLanguage $additionalLanguage
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setAdditionalLanguage(\Ammonkc\Otaehi\StructType\AdditionalLanguage $additionalLanguage = null)
    {
        $this->AdditionalLanguage = $additionalLanguage;
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
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Deceased value
     * @return bool|null
     */
    public function getDeceased()
    {
        return $this->Deceased;
    }
    /**
     * Set Deceased value
     * @param bool $deceased
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setDeceased($deceased = null)
    {
        $this->Deceased = $deceased;
        return $this;
    }
    /**
     * Get LockoutType value
     * @return UNKNOWN|null
     */
    public function getLockoutType()
    {
        return $this->LockoutType;
    }
    /**
     * Set LockoutType value
     * @param UNKNOWN $lockoutType
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setLockoutType(UNKNOWN $lockoutType = null)
    {
        $this->LockoutType = $lockoutType;
        return $this;
    }
    /**
     * Get VIP_Indicator value
     * @return bool|null
     */
    public function getVIP_Indicator()
    {
        return $this->VIP_Indicator;
    }
    /**
     * Set VIP_Indicator value
     * @param bool $vIP_Indicator
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setVIP_Indicator($vIP_Indicator = null)
    {
        $this->VIP_Indicator = $vIP_Indicator;
        return $this;
    }
    /**
     * Get Text value
     * @return UNKNOWN|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param UNKNOWN $text
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setText(UNKNOWN $text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get CustomerValue value
     * @return UNKNOWN|null
     */
    public function getCustomerValue()
    {
        return $this->CustomerValue;
    }
    /**
     * Set CustomerValue value
     * @param UNKNOWN $customerValue
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setCustomerValue(UNKNOWN $customerValue = null)
    {
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Get MaritalStatus value
     * @return string|null
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }
    /**
     * Set MaritalStatus value
     * @param string $maritalStatus
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setMaritalStatus($maritalStatus = null)
    {
        // validation for constraint: string
        if (!is_null($maritalStatus) && !is_string($maritalStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maritalStatus)), __LINE__);
        }
        $this->MaritalStatus = $maritalStatus;
        return $this;
    }
    /**
     * Get PreviouslyMarriedIndicator value
     * @return bool|null
     */
    public function getPreviouslyMarriedIndicator()
    {
        return $this->PreviouslyMarriedIndicator;
    }
    /**
     * Set PreviouslyMarriedIndicator value
     * @param bool $previouslyMarriedIndicator
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setPreviouslyMarriedIndicator($previouslyMarriedIndicator = null)
    {
        $this->PreviouslyMarriedIndicator = $previouslyMarriedIndicator;
        return $this;
    }
    /**
     * Get ChildQuantity value
     * @return UNKNOWN|null
     */
    public function getChildQuantity()
    {
        return $this->ChildQuantity;
    }
    /**
     * Set ChildQuantity value
     * @param UNKNOWN $childQuantity
     * @return \Ammonkc\Otaehi\StructType\CustomerType
     */
    public function setChildQuantity(UNKNOWN $childQuantity = null)
    {
        $this->ChildQuantity = $childQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CustomerType
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
