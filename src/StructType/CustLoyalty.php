<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustLoyalty StructType
 * @subpackage Structs
 */
class CustLoyalty extends AbstractStructBase
{
    /**
     * The MemberPreferences
     * @var \Ammonkc\Otaehi\StructType\MemberPreferences
     */
    public $MemberPreferences;
    /**
     * The SecurityInfo
     * @var \Ammonkc\Otaehi\StructType\SecurityInfo
     */
    public $SecurityInfo;
    /**
     * The SubAccountBalance
     * @var \Ammonkc\Otaehi\StructType\SubAccountBalance
     */
    public $SubAccountBalance;
    /**
     * The Remark
     * @var UNKNOWN
     */
    public $Remark;
    /**
     * The ShareSynchInd
     * @var string
     */
    public $ShareSynchInd;
    /**
     * The ShareMarketInd
     * @var string
     */
    public $ShareMarketInd;
    /**
     * The ProgramID
     * @var UNKNOWN
     */
    public $ProgramID;
    /**
     * The MembershipID
     * @var UNKNOWN
     */
    public $MembershipID;
    /**
     * The TravelSector
     * @var UNKNOWN
     */
    public $TravelSector;
    /**
     * The VendorCode
     * @var UNKNOWN
     */
    public $VendorCode;
    /**
     * The PrimaryLoyaltyIndicator
     * @var bool
     */
    public $PrimaryLoyaltyIndicator;
    /**
     * The AllianceLoyaltyLevelName
     * @var UNKNOWN
     */
    public $AllianceLoyaltyLevelName;
    /**
     * The CustomerType
     * @var UNKNOWN
     */
    public $CustomerType;
    /**
     * The CustomerValue
     * @var UNKNOWN
     */
    public $CustomerValue;
    /**
     * The Password
     * @var UNKNOWN
     */
    public $Password;
    /**
     * The LoyalLevel
     * @var UNKNOWN
     */
    public $LoyalLevel;
    /**
     * The LoyalLevelCode
     * @var UNKNOWN
     */
    public $LoyalLevelCode;
    /**
     * The SingleVendorInd
     * @var string
     */
    public $SingleVendorInd;
    /**
     * The SignupDate
     * @var string
     */
    public $SignupDate;
    /**
     * The EffectiveDate
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpireDate
     * @var string
     */
    public $ExpireDate;
    /**
     * The ExpireDateExclusiveIndicator
     * @var bool
     */
    public $ExpireDateExclusiveIndicator;
    /**
     * The RPH
     * @var UNKNOWN
     */
    public $RPH;
    /**
     * Constructor method for CustLoyalty
     * @uses CustLoyalty::setMemberPreferences()
     * @uses CustLoyalty::setSecurityInfo()
     * @uses CustLoyalty::setSubAccountBalance()
     * @uses CustLoyalty::setRemark()
     * @uses CustLoyalty::setShareSynchInd()
     * @uses CustLoyalty::setShareMarketInd()
     * @uses CustLoyalty::setProgramID()
     * @uses CustLoyalty::setMembershipID()
     * @uses CustLoyalty::setTravelSector()
     * @uses CustLoyalty::setVendorCode()
     * @uses CustLoyalty::setPrimaryLoyaltyIndicator()
     * @uses CustLoyalty::setAllianceLoyaltyLevelName()
     * @uses CustLoyalty::setCustomerType()
     * @uses CustLoyalty::setCustomerValue()
     * @uses CustLoyalty::setPassword()
     * @uses CustLoyalty::setLoyalLevel()
     * @uses CustLoyalty::setLoyalLevelCode()
     * @uses CustLoyalty::setSingleVendorInd()
     * @uses CustLoyalty::setSignupDate()
     * @uses CustLoyalty::setEffectiveDate()
     * @uses CustLoyalty::setExpireDate()
     * @uses CustLoyalty::setExpireDateExclusiveIndicator()
     * @uses CustLoyalty::setRPH()
     * @param \Ammonkc\Otaehi\StructType\MemberPreferences $memberPreferences
     * @param \Ammonkc\Otaehi\StructType\SecurityInfo $securityInfo
     * @param \Ammonkc\Otaehi\StructType\SubAccountBalance $subAccountBalance
     * @param UNKNOWN $remark
     * @param string $shareSynchInd
     * @param string $shareMarketInd
     * @param UNKNOWN $programID
     * @param UNKNOWN $membershipID
     * @param UNKNOWN $travelSector
     * @param UNKNOWN $vendorCode
     * @param bool $primaryLoyaltyIndicator
     * @param UNKNOWN $allianceLoyaltyLevelName
     * @param UNKNOWN $customerType
     * @param UNKNOWN $customerValue
     * @param UNKNOWN $password
     * @param UNKNOWN $loyalLevel
     * @param UNKNOWN $loyalLevelCode
     * @param string $singleVendorInd
     * @param string $signupDate
     * @param string $effectiveDate
     * @param string $expireDate
     * @param bool $expireDateExclusiveIndicator
     * @param UNKNOWN $rPH
     */
    public function __construct(\Ammonkc\Otaehi\StructType\MemberPreferences $memberPreferences = null, \Ammonkc\Otaehi\StructType\SecurityInfo $securityInfo = null, \Ammonkc\Otaehi\StructType\SubAccountBalance $subAccountBalance = null, UNKNOWN $remark = null, $shareSynchInd = null, $shareMarketInd = null, UNKNOWN $programID = null, UNKNOWN $membershipID = null, UNKNOWN $travelSector = null, UNKNOWN $vendorCode = null, $primaryLoyaltyIndicator = null, UNKNOWN $allianceLoyaltyLevelName = null, UNKNOWN $customerType = null, UNKNOWN $customerValue = null, UNKNOWN $password = null, UNKNOWN $loyalLevel = null, UNKNOWN $loyalLevelCode = null, $singleVendorInd = null, $signupDate = null, $effectiveDate = null, $expireDate = null, $expireDateExclusiveIndicator = null, UNKNOWN $rPH = null)
    {
        $this
            ->setMemberPreferences($memberPreferences)
            ->setSecurityInfo($securityInfo)
            ->setSubAccountBalance($subAccountBalance)
            ->setRemark($remark)
            ->setShareSynchInd($shareSynchInd)
            ->setShareMarketInd($shareMarketInd)
            ->setProgramID($programID)
            ->setMembershipID($membershipID)
            ->setTravelSector($travelSector)
            ->setVendorCode($vendorCode)
            ->setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator)
            ->setAllianceLoyaltyLevelName($allianceLoyaltyLevelName)
            ->setCustomerType($customerType)
            ->setCustomerValue($customerValue)
            ->setPassword($password)
            ->setLoyalLevel($loyalLevel)
            ->setLoyalLevelCode($loyalLevelCode)
            ->setSingleVendorInd($singleVendorInd)
            ->setSignupDate($signupDate)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
            ->setRPH($rPH);
    }
    /**
     * Get MemberPreferences value
     * @return \Ammonkc\Otaehi\StructType\MemberPreferences|null
     */
    public function getMemberPreferences()
    {
        return $this->MemberPreferences;
    }
    /**
     * Set MemberPreferences value
     * @param \Ammonkc\Otaehi\StructType\MemberPreferences $memberPreferences
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setMemberPreferences(\Ammonkc\Otaehi\StructType\MemberPreferences $memberPreferences = null)
    {
        $this->MemberPreferences = $memberPreferences;
        return $this;
    }
    /**
     * Get SecurityInfo value
     * @return \Ammonkc\Otaehi\StructType\SecurityInfo|null
     */
    public function getSecurityInfo()
    {
        return $this->SecurityInfo;
    }
    /**
     * Set SecurityInfo value
     * @param \Ammonkc\Otaehi\StructType\SecurityInfo $securityInfo
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setSecurityInfo(\Ammonkc\Otaehi\StructType\SecurityInfo $securityInfo = null)
    {
        $this->SecurityInfo = $securityInfo;
        return $this;
    }
    /**
     * Get SubAccountBalance value
     * @return \Ammonkc\Otaehi\StructType\SubAccountBalance|null
     */
    public function getSubAccountBalance()
    {
        return $this->SubAccountBalance;
    }
    /**
     * Set SubAccountBalance value
     * @param \Ammonkc\Otaehi\StructType\SubAccountBalance $subAccountBalance
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setSubAccountBalance(\Ammonkc\Otaehi\StructType\SubAccountBalance $subAccountBalance = null)
    {
        $this->SubAccountBalance = $subAccountBalance;
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
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setRemark(UNKNOWN $remark = null)
    {
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Get ShareSynchInd value
     * @return string|null
     */
    public function getShareSynchInd()
    {
        return $this->ShareSynchInd;
    }
    /**
     * Set ShareSynchInd value
     * @param string $shareSynchInd
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setShareSynchInd($shareSynchInd = null)
    {
        // validation for constraint: string
        if (!is_null($shareSynchInd) && !is_string($shareSynchInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shareSynchInd)), __LINE__);
        }
        $this->ShareSynchInd = $shareSynchInd;
        return $this;
    }
    /**
     * Get ShareMarketInd value
     * @return string|null
     */
    public function getShareMarketInd()
    {
        return $this->ShareMarketInd;
    }
    /**
     * Set ShareMarketInd value
     * @param string $shareMarketInd
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setShareMarketInd($shareMarketInd = null)
    {
        // validation for constraint: string
        if (!is_null($shareMarketInd) && !is_string($shareMarketInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shareMarketInd)), __LINE__);
        }
        $this->ShareMarketInd = $shareMarketInd;
        return $this;
    }
    /**
     * Get ProgramID value
     * @return UNKNOWN|null
     */
    public function getProgramID()
    {
        return $this->ProgramID;
    }
    /**
     * Set ProgramID value
     * @param UNKNOWN $programID
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setProgramID(UNKNOWN $programID = null)
    {
        $this->ProgramID = $programID;
        return $this;
    }
    /**
     * Get MembershipID value
     * @return UNKNOWN|null
     */
    public function getMembershipID()
    {
        return $this->MembershipID;
    }
    /**
     * Set MembershipID value
     * @param UNKNOWN $membershipID
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setMembershipID(UNKNOWN $membershipID = null)
    {
        $this->MembershipID = $membershipID;
        return $this;
    }
    /**
     * Get TravelSector value
     * @return UNKNOWN|null
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }
    /**
     * Set TravelSector value
     * @param UNKNOWN $travelSector
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setTravelSector(UNKNOWN $travelSector = null)
    {
        $this->TravelSector = $travelSector;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return UNKNOWN|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param UNKNOWN $vendorCode
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setVendorCode(UNKNOWN $vendorCode = null)
    {
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get PrimaryLoyaltyIndicator value
     * @return bool|null
     */
    public function getPrimaryLoyaltyIndicator()
    {
        return $this->PrimaryLoyaltyIndicator;
    }
    /**
     * Set PrimaryLoyaltyIndicator value
     * @param bool $primaryLoyaltyIndicator
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator = null)
    {
        $this->PrimaryLoyaltyIndicator = $primaryLoyaltyIndicator;
        return $this;
    }
    /**
     * Get AllianceLoyaltyLevelName value
     * @return UNKNOWN|null
     */
    public function getAllianceLoyaltyLevelName()
    {
        return $this->AllianceLoyaltyLevelName;
    }
    /**
     * Set AllianceLoyaltyLevelName value
     * @param UNKNOWN $allianceLoyaltyLevelName
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setAllianceLoyaltyLevelName(UNKNOWN $allianceLoyaltyLevelName = null)
    {
        $this->AllianceLoyaltyLevelName = $allianceLoyaltyLevelName;
        return $this;
    }
    /**
     * Get CustomerType value
     * @return UNKNOWN|null
     */
    public function getCustomerType()
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @param UNKNOWN $customerType
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setCustomerType(UNKNOWN $customerType = null)
    {
        $this->CustomerType = $customerType;
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
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setCustomerValue(UNKNOWN $customerValue = null)
    {
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Get Password value
     * @return UNKNOWN|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param UNKNOWN $password
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setPassword(UNKNOWN $password = null)
    {
        $this->Password = $password;
        return $this;
    }
    /**
     * Get LoyalLevel value
     * @return UNKNOWN|null
     */
    public function getLoyalLevel()
    {
        return $this->LoyalLevel;
    }
    /**
     * Set LoyalLevel value
     * @param UNKNOWN $loyalLevel
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setLoyalLevel(UNKNOWN $loyalLevel = null)
    {
        $this->LoyalLevel = $loyalLevel;
        return $this;
    }
    /**
     * Get LoyalLevelCode value
     * @return UNKNOWN|null
     */
    public function getLoyalLevelCode()
    {
        return $this->LoyalLevelCode;
    }
    /**
     * Set LoyalLevelCode value
     * @param UNKNOWN $loyalLevelCode
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setLoyalLevelCode(UNKNOWN $loyalLevelCode = null)
    {
        $this->LoyalLevelCode = $loyalLevelCode;
        return $this;
    }
    /**
     * Get SingleVendorInd value
     * @return string|null
     */
    public function getSingleVendorInd()
    {
        return $this->SingleVendorInd;
    }
    /**
     * Set SingleVendorInd value
     * @param string $singleVendorInd
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setSingleVendorInd($singleVendorInd = null)
    {
        // validation for constraint: string
        if (!is_null($singleVendorInd) && !is_string($singleVendorInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($singleVendorInd)), __LINE__);
        }
        $this->SingleVendorInd = $singleVendorInd;
        return $this;
    }
    /**
     * Get SignupDate value
     * @return string|null
     */
    public function getSignupDate()
    {
        return $this->SignupDate;
    }
    /**
     * Set SignupDate value
     * @param string $signupDate
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setSignupDate($signupDate = null)
    {
        // validation for constraint: string
        if (!is_null($signupDate) && !is_string($signupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signupDate)), __LINE__);
        }
        $this->SignupDate = $signupDate;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get ExpireDateExclusiveIndicator value
     * @return bool|null
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->ExpireDateExclusiveIndicator;
    }
    /**
     * Set ExpireDateExclusiveIndicator value
     * @param bool $expireDateExclusiveIndicator
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator = null)
    {
        $this->ExpireDateExclusiveIndicator = $expireDateExclusiveIndicator;
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
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
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
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
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
