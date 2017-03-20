<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPref StructType
 * @subpackage Structs
 */
class ContactPref extends AbstractStructBase
{
    /**
     * The PreferLevel
     * @var
     */
    public $PreferLevel;
    /**
     * The ContactMethodCode
     * @var
     */
    public $ContactMethodCode;
    /**
     * Constructor method for ContactPref
     * @uses ContactPref::setPreferLevel()
     * @uses ContactPref::setContactMethodCode()
     * @param  $preferLevel
     * @param  $contactMethodCode
     */
    public function __construct( $preferLevel = null,  $contactMethodCode = null)
    {
        $this
            ->setPreferLevel($preferLevel)
            ->setContactMethodCode($contactMethodCode);
    }
    /**
     * Get PreferLevel value
     * @return |null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param  $preferLevel
     * @return \Ammonkc\Otaehi\StructType\ContactPref
     */
    public function setPreferLevel( $preferLevel = null)
    {
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Get ContactMethodCode value
     * @return |null
     */
    public function getContactMethodCode()
    {
        return $this->ContactMethodCode;
    }
    /**
     * Set ContactMethodCode value
     * @param  $contactMethodCode
     * @return \Ammonkc\Otaehi\StructType\ContactPref
     */
    public function setContactMethodCode( $contactMethodCode = null)
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
     * @return \Ammonkc\Otaehi\StructType\ContactPref
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
