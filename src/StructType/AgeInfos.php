<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeInfos StructType
 * @subpackage Structs
 */
class AgeInfos extends AbstractStructBase
{
    /**
     * The AgeInfo
     * @var \ammonkc\otaehi\StructType\AgeInfo
     */
    public $AgeInfo;
    /**
     * Constructor method for AgeInfos
     * @uses AgeInfos::setAgeInfo()
     * @param \ammonkc\otaehi\StructType\AgeInfo $ageInfo
     */
    public function __construct(\ammonkc\otaehi\StructType\AgeInfo $ageInfo = null)
    {
        $this
            ->setAgeInfo($ageInfo);
    }
    /**
     * Get AgeInfo value
     * @return \ammonkc\otaehi\StructType\AgeInfo|null
     */
    public function getAgeInfo()
    {
        return $this->AgeInfo;
    }
    /**
     * Set AgeInfo value
     * @param \ammonkc\otaehi\StructType\AgeInfo $ageInfo
     * @return \ammonkc\otaehi\StructType\AgeInfos
     */
    public function setAgeInfo(\ammonkc\otaehi\StructType\AgeInfo $ageInfo = null)
    {
        $this->AgeInfo = $ageInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\AgeInfos
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
