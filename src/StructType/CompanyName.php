<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyName StructType
 * @subpackage Structs
 */
class CompanyName extends AbstractStructBase
{
    /**
     * The ContactName
     * @var
     */
    public $ContactName;
    /**
     * Constructor method for CompanyName
     * @uses CompanyName::setContactName()
     * @param  $contactName
     */
    public function __construct( $contactName = null)
    {
        $this
            ->setContactName($contactName);
    }
    /**
     * Get ContactName value
     * @return |null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param  $contactName
     * @return \Ammonkc\Otaehi\StructType\CompanyName
     */
    public function setContactName( $contactName = null)
    {
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CompanyName
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
