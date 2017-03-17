<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPref StructType
 * @subpackage Structs
 */
class ContactPref extends AbstractStructBase
{
    /**
     * The PreferLevel
     * @var UNKNOWN
     */
    public $PreferLevel;
    /**
     * The ContactMethodCode
     * @var UNKNOWN
     */
    public $ContactMethodCode;
    /**
     * Constructor method for ContactPref
     * @uses ContactPref::setPreferLevel()
     * @uses ContactPref::setContactMethodCode()
     * @param UNKNOWN $preferLevel
     * @param UNKNOWN $contactMethodCode
     */
    public function __construct(UNKNOWN $preferLevel = null, UNKNOWN $contactMethodCode = null)
    {
        $this
            ->setPreferLevel($preferLevel)
            ->setContactMethodCode($contactMethodCode);
    }
    /**
     * Get PreferLevel value
     * @return UNKNOWN|null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param UNKNOWN $preferLevel
     * @return \ammonkc\otaehi\StructType\ContactPref
     */
    public function setPreferLevel(UNKNOWN $preferLevel = null)
    {
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get ContactMethodCode value
     * @return UNKNOWN|null
     */
    public function getContactMethodCode()
    {
        return $this->ContactMethodCode;
    }
    /**
     * Set ContactMethodCode value
     * @param UNKNOWN $contactMethodCode
     * @return \ammonkc\otaehi\StructType\ContactPref
     */
    public function setContactMethodCode(UNKNOWN $contactMethodCode = null)
    {
        $this->ContactMethodCode = $contactMethodCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\ContactPref
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
