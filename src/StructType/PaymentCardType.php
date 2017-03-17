<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ammonkc\otaehi\StructType\Issuer
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
     * @var \ammonkc\otaehi\StructType\Telephone
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
     * @var \ammonkc\otaehi\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The MagneticStripe
     * @var mixed
     */
    public $MagneticStripe;
    /**
     * The ThreeDomainSecurity
     * @var \ammonkc\otaehi\StructType\ThreeDomainSecurity
     */
    public $ThreeDomainSecurity;
    /**
     * The SignatureOnFile
     * @var \ammonkc\otaehi\StructType\SignatureOnFile
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
     * @param \ammonkc\otaehi\StructType\Issuer $issuer
     * @param mixed $cardHolderName
     * @param mixed $cardHolderNameDetails
     * @param mixed $address
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @param mixed $email
     * @param mixed $cardNumber
     * @param mixed $seriesCode
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @param mixed $magneticStripe
     * @param \ammonkc\otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity
     * @param \ammonkc\otaehi\StructType\SignatureOnFile $signatureOnFile
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
    public function __construct($cardType = null, \ammonkc\otaehi\StructType\Issuer $issuer = null, $cardHolderName = null, $cardHolderNameDetails = null, $address = null, \ammonkc\otaehi\StructType\Telephone $telephone = null, $email = null, $cardNumber = null, $seriesCode = null, \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null, $magneticStripe = null, \ammonkc\otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity = null, \ammonkc\otaehi\StructType\SignatureOnFile $signatureOnFile = null, $tPA_Extensions = null, $extendedPaymentInd = null, $secureInd = null, $signatureOnFileInd = null, UNKNOWN $cardCode = null, UNKNOWN $cardHolderRPH = null, UNKNOWN $companyCardReference = null, UNKNOWN $countryOfIssue = null, UNKNOWN $remark = null, UNKNOWN $rPH = null)
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setCardType($cardType = null)
    {
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get Issuer value
     * @return \ammonkc\otaehi\StructType\Issuer|null
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }
    /**
     * Set Issuer value
     * @param \ammonkc\otaehi\StructType\Issuer $issuer
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setIssuer(\ammonkc\otaehi\StructType\Issuer $issuer = null)
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \ammonkc\otaehi\StructType\Telephone|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @param \ammonkc\otaehi\StructType\Telephone $telephone
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setTelephone(\ammonkc\otaehi\StructType\Telephone $telephone = null)
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setSeriesCode($seriesCode = null)
    {
        $this->SeriesCode = $seriesCode;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \ammonkc\otaehi\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \ammonkc\otaehi\StructType\CustLoyalty $custLoyalty
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setCustLoyalty(\ammonkc\otaehi\StructType\CustLoyalty $custLoyalty = null)
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setMagneticStripe($magneticStripe = null)
    {
        $this->MagneticStripe = $magneticStripe;
        return $this;
    }
    /**
     * Get ThreeDomainSecurity value
     * @return \ammonkc\otaehi\StructType\ThreeDomainSecurity|null
     */
    public function getThreeDomainSecurity()
    {
        return $this->ThreeDomainSecurity;
    }
    /**
     * Set ThreeDomainSecurity value
     * @param \ammonkc\otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setThreeDomainSecurity(\ammonkc\otaehi\StructType\ThreeDomainSecurity $threeDomainSecurity = null)
    {
        $this->ThreeDomainSecurity = $threeDomainSecurity;
        return $this;
    }
    /**
     * Get SignatureOnFile value
     * @return \ammonkc\otaehi\StructType\SignatureOnFile|null
     */
    public function getSignatureOnFile()
    {
        return $this->SignatureOnFile;
    }
    /**
     * Set SignatureOnFile value
     * @param \ammonkc\otaehi\StructType\SignatureOnFile $signatureOnFile
     * @return \ammonkc\otaehi\StructType\PaymentCardType
     */
    public function setSignatureOnFile(\ammonkc\otaehi\StructType\SignatureOnFile $signatureOnFile = null)
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
     * @return \ammonkc\otaehi\StructType\PaymentCardType
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
