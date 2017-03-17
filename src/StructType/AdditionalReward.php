<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalReward StructType
 * @subpackage Structs
 */
class AdditionalReward extends AbstractStructBase
{
    /**
     * The CompanyName
     * @var mixed
     */
    public $CompanyName;
    /**
     * The Name
     * @var mixed
     */
    public $Name;
    /**
     * The MemberID
     * @var UNKNOWN
     */
    public $MemberID;
    /**
     * Constructor method for AdditionalReward
     * @uses AdditionalReward::setCompanyName()
     * @uses AdditionalReward::setName()
     * @uses AdditionalReward::setMemberID()
     * @param mixed $companyName
     * @param mixed $name
     * @param UNKNOWN $memberID
     */
    public function __construct($companyName = null, $name = null, UNKNOWN $memberID = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setName($name)
            ->setMemberID($memberID);
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \ammonkc\otaehi\StructType\AdditionalReward
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get Name value
     * @return mixed|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param mixed $name
     * @return \ammonkc\otaehi\StructType\AdditionalReward
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get MemberID value
     * @return UNKNOWN|null
     */
    public function getMemberID()
    {
        return $this->MemberID;
    }
    /**
     * Set MemberID value
     * @param UNKNOWN $memberID
     * @return \ammonkc\otaehi\StructType\AdditionalReward
     */
    public function setMemberID(UNKNOWN $memberID = null)
    {
        $this->MemberID = $memberID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AdditionalReward
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
