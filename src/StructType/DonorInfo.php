<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DonorInfo StructType
 * @subpackage Structs
 */
class DonorInfo extends AbstractStructBase
{
    /**
     * The Name
     * @var \Ammonkc\Otaehi\StructType\Name
     */
    public $Name;
    /**
     * The ContactInfo
     * @var \Ammonkc\Otaehi\StructType\ContactInfo
     */
    public $ContactInfo;
    /**
     * Constructor method for DonorInfo
     * @uses DonorInfo::setName()
     * @uses DonorInfo::setContactInfo()
     * @param \Ammonkc\Otaehi\StructType\Name $name
     * @param \Ammonkc\Otaehi\StructType\ContactInfo $contactInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Name $name = null, \Ammonkc\Otaehi\StructType\ContactInfo $contactInfo = null)
    {
        $this
            ->setName($name)
            ->setContactInfo($contactInfo);
    }
    /**
     * Get Name value
     * @return \Ammonkc\Otaehi\StructType\Name|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Ammonkc\Otaehi\StructType\Name $name
     * @return \Ammonkc\Otaehi\StructType\DonorInfo
     */
    public function setName(\Ammonkc\Otaehi\StructType\Name $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ContactInfo value
     * @return \Ammonkc\Otaehi\StructType\ContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }
    /**
     * Set ContactInfo value
     * @param \Ammonkc\Otaehi\StructType\ContactInfo $contactInfo
     * @return \Ammonkc\Otaehi\StructType\DonorInfo
     */
    public function setContactInfo(\Ammonkc\Otaehi\StructType\ContactInfo $contactInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\DonorInfo
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
