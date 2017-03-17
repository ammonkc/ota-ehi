<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DonorInfo StructType
 * @subpackage Structs
 */
class DonorInfo extends AbstractStructBase
{
    /**
     * The Name
     * @var \ammonkc\otaehi\StructType\Name
     */
    public $Name;
    /**
     * The ContactInfo
     * @var \ammonkc\otaehi\StructType\ContactInfo
     */
    public $ContactInfo;
    /**
     * Constructor method for DonorInfo
     * @uses DonorInfo::setName()
     * @uses DonorInfo::setContactInfo()
     * @param \ammonkc\otaehi\StructType\Name $name
     * @param \ammonkc\otaehi\StructType\ContactInfo $contactInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\Name $name = null, \ammonkc\otaehi\StructType\ContactInfo $contactInfo = null)
    {
        $this
            ->setName($name)
            ->setContactInfo($contactInfo);
    }
    /**
     * Get Name value
     * @return \ammonkc\otaehi\StructType\Name|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \ammonkc\otaehi\StructType\Name $name
     * @return \ammonkc\otaehi\StructType\DonorInfo
     */
    public function setName(\ammonkc\otaehi\StructType\Name $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ContactInfo value
     * @return \ammonkc\otaehi\StructType\ContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param \ammonkc\otaehi\StructType\ContactInfo $contactInfo
     * @return \ammonkc\otaehi\StructType\DonorInfo
     */
    public function setContactInfo(\ammonkc\otaehi\StructType\ContactInfo $contactInfo = null)
    {
        $this->ContactInfo = $contactInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\DonorInfo
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
