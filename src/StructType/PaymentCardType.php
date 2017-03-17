<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardType StructType
 * @subpackage Structs
 */
class PaymentCardType extends AbstractStructBase
{
    /**
     * The CardType
     * @var mixed
     */
    public $CardType;
    /**
     * The Issuer
     * @var \Ammonkc\Otaehi\StructType\Issuer
     */
    public $Issuer;
    /**
     * The CardHolderName
     * @var mixed
     */
    public $CardHolderName;
    /**
     * The CardHolderNameDetails
     * @var mixed
     */
    public $CardHolderNameDetails;
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * The Telephone
     * @var \Ammonkc\Otaehi\StructType\Telephone
     */
    public $Telephone;
    /**
     * The Email
     * @var mixed
     */
    public $Email;
    /**
     * The CardNumber
     * @var mixed
     */
    public $CardNumber;
    /**
     * The SeriesCode
     * @var mixed
     */
    public $SeriesCode;
    /**
     * The CustLoyalty
     * @var \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The MagneticStripe
     * @var mixed
     */
    public $MagneticStripe;
    /**
     * The ThreeDomainSecurity
     * @var \Ammonkc\Otaehi\StructType\ThreeDomainSecurity
     */
    public $ThreeDomainSecurity;
    /**
     * The SignatureOnFile
     * @var \Ammonkc\Otaehi\StructType\SignatureOnFile
     */
    public $SignatureOnFile;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ExtendedPaymentInd
     * @var bool
     */
    public $ExtendedPaymentInd;
    /**
     * The SecureInd
     * @var bool
     */
    public $SecureInd;
    /**
     * The SignatureOnFileInd
     * @var bool
     */
    public $SignatureOnFileInd;
    /**
     * The CardCode
     * @var UNKNOWN
     */
    public $CardCode;
    /**
     * The CardHolderRPH
     * @var UNKNOWN
     */
    public $CardHolderRPH;
    /**
     * The CompanyCardReference
     * @var UNKNOWN
     */
    public $CompanyCardReference;
    /**
     * The CountryOfIssue
     * @var UNKNOWN
     */
    public $CountryOfIssue;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * Constructor method for PaymentCardType
     * @uses PaymentCardType::setCardType()
     * @uses PaymentCardType::setIssuer()
     * @uses PaymentCardType::setCardHolderName()
     * @uses PaymentCardType::setCardHolderNameDetails()
     * @uses PaymentCardType::setAddress()
     * @uses PaymentCardType::setTelephone()
     * @uses PaymentCardType::setEmail()
     * @uses PaymentCardType::setCardNumber()
     * @uses PaymentCardType::setSeriesCode()
     * @uses PaymentCardType::setCustLoyalty()
     * @uses PaymentCardType::setMagneticStripe()
     * @uses PaymentCardType::setThreeDomainSecurity()
     * @uses PaymentCardType::setSignatureOnFile()
     * @uses PaymentCardType::setTPA_Extensions()
     * @uses PaymentCardType::setExtendedPaymentInd()
     * @uses PaymentCardType::setSecureInd()
     * @uses PaymentCardType::setSignatureOnFileInd()
     * @uses PaymentCardType::setCardCode()
     * @uses PaymentCardType::setCardHolderRPH()
     * @uses PaymentCardType::setCompanyCardReference()
     * @uses PaymentCardType::setCountryOfIssue()
     * @uses PaymentCardType::setRemark()
     * @uses PaymentCardType::setRPH()
     * @param mixed $cardType
     * @param \Ammonkc\Otaehi\StructType\Issuer $issuer
     * @param mixed $cardHolderName
     * @param mixed $cardHolderNameDetails
     * @param mixed $address
     * @param \Ammonkc\Otaehi\StructType\Telephone $telephone
     * @param mixed $email
     * @param mixed $cardNumber
     * @param mixed $seriesCode
     * @param \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $magneticStripe
     * @param \Ammonkc\Otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity
     * @param \Ammonkc\Otaehi\StructType\SignatureOnFile $signatureOnFile
     * @param mixed $tPA_Extensions
     * @param bool $extendedPaymentInd
     * @param bool $secureInd
     * @param bool $signatureOnFileInd
     * @param UNKNOWN $cardCode
     * @param UNKNOWN $cardHolderRPH
     * @param UNKNOWN $companyCardReference
     * @param UNKNOWN $countryOfIssue
     * @param UNKNOWN $remark
     * @param UNKNOWN $rPH
     */
    public function __construct($cardType = null, \Ammonkc\Otaehi\StructType\Issuer $issuer = null, $cardHolderName = null, $cardHolderNameDetails = null, $address = null, \Ammonkc\Otaehi\StructType\Telephone $telephone = null, $email = null, $cardNumber = null, $seriesCode = null, \Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null, $magneticStripe = null, \Ammonkc\Otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity = null, \Ammonkc\Otaehi\StructType\SignatureOnFile $signatureOnFile = null, $tPA_Extensions = null, $extendedPaymentInd = null, $secureInd = null, $signatureOnFileInd = null, UNKNOWN $cardCode = null, UNKNOWN $cardHolderRPH = null, UNKNOWN $companyCardReference = null, UNKNOWN $countryOfIssue = null, UNKNOWN $remark = null, UNKNOWN $rPH = null)
    {
        $this
            ->setCardType($cardType)
            ->setIssuer($issuer)
            ->setCardHolderName($cardHolderName)
            ->setCardHolderNameDetails($cardHolderNameDetails)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setCardNumber($cardNumber)
            ->setSeriesCode($seriesCode)
            ->setCustLoyalty($custLoyalty)
            ->setMagneticStripe($magneticStripe)
            ->setThreeDomainSecurity($threeDomainSecurity)
            ->setSignatureOnFile($signatureOnFile)
            ->setTPA_Extensions($tPA_Extensions)
            ->setExtendedPaymentInd($extendedPaymentInd)
            ->setSecureInd($secureInd)
            ->setSignatureOnFileInd($signatureOnFileInd)
            ->setCardCode($cardCode)
            ->setCardHolderRPH($cardHolderRPH)
            ->setCompanyCardReference($companyCardReference)
            ->setCountryOfIssue($countryOfIssue)
            ->setRemark($remark)
            ->setRPH($rPH);
    }
    /**
     * Get CardType value
     * @return mixed|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param mixed $cardType
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardType($cardType = null)
    {
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get Issuer value
     * @return \Ammonkc\Otaehi\StructType\Issuer|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }
    /**
     * Set Issuer value
     * @param \Ammonkc\Otaehi\StructType\Issuer $issuer
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setIssuer(\Ammonkc\Otaehi\StructType\Issuer $issuer = null)
    {
        $this->Issuer = $issuer;
        return $this;
    }
    /**
     * Get CardHolderName value
     * @return mixed|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param mixed $cardHolderName
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardHolderName($cardHolderName = null)
    {
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get CardHolderNameDetails value
     * @return mixed|null
     */
    public function getCardHolderNameDetails()
    {
        return $this->CardHolderNameDetails;
    }
    /**
     * Set CardHolderNameDetails value
     * @param mixed $cardHolderNameDetails
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardHolderNameDetails($cardHolderNameDetails = null)
    {
        $this->CardHolderNameDetails = $cardHolderNameDetails;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setTelephone(\Ammonkc\Otaehi\StructType\Telephone $telephone = null)
    {
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param mixed $email
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return mixed|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param mixed $cardNumber
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardNumber($cardNumber = null)
    {
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get SeriesCode value
     * @return mixed|null
     */
    public function getSeriesCode()
    {
        return $this->SeriesCode;
    }
    /**
     * Set SeriesCode value
     * @param mixed $seriesCode
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setSeriesCode($seriesCode = null)
    {
        $this->SeriesCode = $seriesCode;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCustLoyalty(\Ammonkc\Otaehi\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get MagneticStripe value
     * @return mixed|null
     */
    public function getMagneticStripe()
    {
        return $this->MagneticStripe;
    }
    /**
     * Set MagneticStripe value
     * @param mixed $magneticStripe
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setMagneticStripe($magneticStripe = null)
    {
        $this->MagneticStripe = $magneticStripe;
        return $this;
    }
    /**
     * Get ThreeDomainSecurity value
     * @return \Ammonkc\Otaehi\StructType\ThreeDomainSecurity|null
     */
    public function getThreeDomainSecurity()
    {
        return $this->ThreeDomainSecurity;
    }
    /**
     * Set ThreeDomainSecurity value
     * @param \Ammonkc\Otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setThreeDomainSecurity(\Ammonkc\Otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity = null)
    {
        $this->ThreeDomainSecurity = $threeDomainSecurity;
        return $this;
    }
    /**
     * Get SignatureOnFile value
     * @return \Ammonkc\Otaehi\StructType\SignatureOnFile|null
     */
    public function getSignatureOnFile()
    {
        return $this->SignatureOnFile;
    }
    /**
     * Set SignatureOnFile value
     * @param \Ammonkc\Otaehi\StructType\SignatureOnFile $signatureOnFile
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setSignatureOnFile(\Ammonkc\Otaehi\StructType\SignatureOnFile $signatureOnFile = null)
    {
        $this->SignatureOnFile = $signatureOnFile;
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
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ExtendedPaymentInd value
     * @return bool|null
     */
    public function getExtendedPaymentInd()
    {
        return $this->ExtendedPaymentInd;
    }
    /**
     * Set ExtendedPaymentInd value
     * @param bool $extendedPaymentInd
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setExtendedPaymentInd($extendedPaymentInd = null)
    {
        $this->ExtendedPaymentInd = $extendedPaymentInd;
        return $this;
    }
    /**
     * Get SecureInd value
     * @return bool|null
     */
    public function getSecureInd()
    {
        return $this->SecureInd;
    }
    /**
     * Set SecureInd value
     * @param bool $secureInd
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setSecureInd($secureInd = null)
    {
        $this->SecureInd = $secureInd;
        return $this;
    }
    /**
     * Get SignatureOnFileInd value
     * @return bool|null
     */
    public function getSignatureOnFileInd()
    {
        return $this->SignatureOnFileInd;
    }
    /**
     * Set SignatureOnFileInd value
     * @param bool $signatureOnFileInd
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setSignatureOnFileInd($signatureOnFileInd = null)
    {
        $this->SignatureOnFileInd = $signatureOnFileInd;
        return $this;
    }
    /**
     * Get CardCode value
     * @return UNKNOWN|null
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @param UNKNOWN $cardCode
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardCode(UNKNOWN $cardCode = null)
    {
        $this->CardCode = $cardCode;
        return $this;
    }
    /**
     * Get CardHolderRPH value
     * @return UNKNOWN|null
     */
    public function getCardHolderRPH()
    {
        return $this->CardHolderRPH;
    }
    /**
     * Set CardHolderRPH value
     * @param UNKNOWN $cardHolderRPH
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCardHolderRPH(UNKNOWN $cardHolderRPH = null)
    {
        $this->CardHolderRPH = $cardHolderRPH;
        return $this;
    }
    /**
     * Get CompanyCardReference value
     * @return UNKNOWN|null
     */
    public function getCompanyCardReference()
    {
        return $this->CompanyCardReference;
    }
    /**
     * Set CompanyCardReference value
     * @param UNKNOWN $companyCardReference
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCompanyCardReference(UNKNOWN $companyCardReference = null)
    {
        $this->CompanyCardReference = $companyCardReference;
        return $this;
    }
    /**
     * Get CountryOfIssue value
     * @return UNKNOWN|null
     */
    public function getCountryOfIssue()
    {
        return $this->CountryOfIssue;
    }
    /**
     * Set CountryOfIssue value
     * @param UNKNOWN $countryOfIssue
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setCountryOfIssue(UNKNOWN $countryOfIssue = null)
    {
        $this->CountryOfIssue = $countryOfIssue;
        return $this;
    }
    /**
     * Get Remark value
     * @return UNKNOWN|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param UNKNOWN $remark
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get RPH value
     * @return UNKNOWN|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param UNKNOWN $rPH
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
     */
    public function setRPH(UNKNOWN $rPH = null)
    {
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\PaymentCardType
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
