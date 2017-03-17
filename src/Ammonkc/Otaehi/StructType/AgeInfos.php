<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeInfos StructType
 * @subpackage Structs
 */
class AgeInfos extends AbstractStructBase
{
    /**
     * The AgeInfo
     * @var \Ammonkc\Otaehi\StructType\AgeInfo
     */
    public $AgeInfo;
    /**
     * Constructor method for AgeInfos
     * @uses AgeInfos::setAgeInfo()
     * @param \Ammonkc\Otaehi\StructType\AgeInfo $ageInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\AgeInfo $ageInfo = null)
    {
        $this
            ->setAgeInfo($ageInfo);
    }
    /**
     * Get AgeInfo value
     * @return \Ammonkc\Otaehi\StructType\AgeInfo|null
     */
    public function getAgeInfo()
    {
        return $this->AgeInfo;
    }
    /**
     * Set AgeInfo value
     * @param \Ammonkc\Otaehi\StructType\AgeInfo $ageInfo
     * @return \Ammonkc\Otaehi\StructType\AgeInfos
     */
    public function setAgeInfo(\Ammonkc\Otaehi\StructType\AgeInfo $ageInfo = null)
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
     * @return \Ammonkc\Otaehi\StructType\AgeInfos
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
