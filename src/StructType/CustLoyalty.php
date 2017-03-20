<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var
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
     * @var
     */
    public $ProgramID;
    /**
     * The MembershipID
     * @var
     */
    public $MembershipID;
    /**
     * The TravelSector
     * @var
     */
    public $TravelSector;
    /**
     * The VendorCode
     * @var
     */
    public $VendorCode;
    /**
     * The PrimaryLoyaltyIndicator
     * @var bool
     */
    public $PrimaryLoyaltyIndicator;
    /**
     * The AllianceLoyaltyLevelName
     * @var
     */
    public $AllianceLoyaltyLevelName;
    /**
     * The CustomerType
     * @var
     */
    public $CustomerType;
    /**
     * The CustomerValue
     * @var
     */
    public $CustomerValue;
    /**
     * The Password
     * @var
     */
    public $Password;
    /**
     * The LoyalLevel
     * @var
     */
    public $LoyalLevel;
    /**
     * The LoyalLevelCode
     * @var
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
     * @var
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
     * @param  $remark
     * @param string $shareSynchInd
     * @param string $shareMarketInd
     * @param  $programID
     * @param  $membershipID
     * @param  $travelSector
     * @param  $vendorCode
     * @param bool $primaryLoyaltyIndicator
     * @param  $allianceLoyaltyLevelName
     * @param  $customerType
     * @param  $customerValue
     * @param  $password
     * @param  $loyalLevel
     * @param  $loyalLevelCode
     * @param string $singleVendorInd
     * @param string $signupDate
     * @param string $effectiveDate
     * @param string $expireDate
     * @param bool $expireDateExclusiveIndicator
     * @param  $rPH
     */
    public function __construct(\Ammonkc\Otaehi\StructType\MemberPreferences $memberPreferences = null, \Ammonkc\Otaehi\StructType\SecurityInfo $securityInfo = null, \Ammonkc\Otaehi\StructType\SubAccountBalance $subAccountBalance = null,  $remark = null, $shareSynchInd = null, $shareMarketInd = null,  $programID = null,  $membershipID = null,  $travelSector = null,  $vendorCode = null, $primaryLoyaltyIndicator = null,  $allianceLoyaltyLevelName = null,  $customerType = null,  $customerValue = null,  $password = null,  $loyalLevel = null,  $loyalLevelCode = null, $singleVendorInd = null, $signupDate = null, $effectiveDate = null, $expireDate = null, $expireDateExclusiveIndicator = null,  $rPH = null)
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
     * @return |null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param  $remark
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setRemark( $remark = null)
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
     * @return |null
     */
    public function getProgramID()
    {
        return $this->ProgramID;
    }
    /**
     * Set ProgramID value
     * @param  $programID
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setProgramID( $programID = null)
    {
        $this->ProgramID = $programID;
        return $this;
    }
    /**
     * Get MembershipID value
     * @return |null
     */
    public function getMembershipID()
    {
        return $this->MembershipID;
    }
    /**
     * Set MembershipID value
     * @param  $membershipID
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setMembershipID( $membershipID = null)
    {
        $this->MembershipID = $membershipID;
        return $this;
    }
    /**
     * Get TravelSector value
     * @return |null
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }
    /**
     * Set TravelSector value
     * @param  $travelSector
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setTravelSector( $travelSector = null)
    {
        $this->TravelSector = $travelSector;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return |null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param  $vendorCode
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setVendorCode( $vendorCode = null)
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
     * @return |null
     */
    public function getAllianceLoyaltyLevelName()
    {
        return $this->AllianceLoyaltyLevelName;
    }
    /**
     * Set AllianceLoyaltyLevelName value
     * @param  $allianceLoyaltyLevelName
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setAllianceLoyaltyLevelName( $allianceLoyaltyLevelName = null)
    {
        $this->AllianceLoyaltyLevelName = $allianceLoyaltyLevelName;
        return $this;
    }
    /**
     * Get CustomerType value
     * @return |null
     */
    public function getCustomerType()
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @param  $customerType
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setCustomerType( $customerType = null)
    {
        $this->CustomerType = $customerType;
        return $this;
    }
    /**
     * Get CustomerValue value
     * @return |null
     */
    public function getCustomerValue()
    {
        return $this->CustomerValue;
    }
    /**
     * Set CustomerValue value
     * @param  $customerValue
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setCustomerValue( $customerValue = null)
    {
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Get Password value
     * @return |null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param  $password
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setPassword( $password = null)
    {
        $this->Password = $password;
        return $this;
    }
    /**
     * Get LoyalLevel value
     * @return |null
     */
    public function getLoyalLevel()
    {
        return $this->LoyalLevel;
    }
    /**
     * Set LoyalLevel value
     * @param  $loyalLevel
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setLoyalLevel( $loyalLevel = null)
    {
        $this->LoyalLevel = $loyalLevel;
        return $this;
    }
    /**
     * Get LoyalLevelCode value
     * @return |null
     */
    public function getLoyalLevelCode()
    {
        return $this->LoyalLevelCode;
    }
    /**
     * Set LoyalLevelCode value
     * @param  $loyalLevelCode
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setLoyalLevelCode( $loyalLevelCode = null)
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
     * @return |null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param  $rPH
     * @return \Ammonkc\Otaehi\StructType\CustLoyalty
     */
    public function setRPH( $rPH = null)
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
