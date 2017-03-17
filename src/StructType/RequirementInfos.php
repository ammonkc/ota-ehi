<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequirementInfos StructType
 * @subpackage Structs
 */
class RequirementInfos extends AbstractStructBase
{
    /**
     * The RequirementInfo
     * @var \Ammonkc\Otaehi\StructType\RequirementInfo
     */
    public $RequirementInfo;
    /**
     * Constructor method for RequirementInfos
     * @uses RequirementInfos::setRequirementInfo()
     * @param \Ammonkc\Otaehi\StructType\RequirementInfo $requirementInfo
     */
    public function __construct(\Ammonkc\Otaehi\StructType\RequirementInfo $requirementInfo = null)
    {
        $this
            ->setRequirementInfo($requirementInfo);
    }
    /**
     * Get RequirementInfo value
     * @return \Ammonkc\Otaehi\StructType\RequirementInfo|null
     */
    public function getRequirementInfo()
    {
        return $this->RequirementInfo;
    }
    /**
     * Set RequirementInfo value
     * @param \Ammonkc\Otaehi\StructType\RequirementInfo $requirementInfo
     * @return \Ammonkc\Otaehi\StructType\RequirementInfos
     */
    public function setRequirementInfo(\Ammonkc\Otaehi\StructType\RequirementInfo $requirementInfo = null)
    {
        $this->RequirementInfo = $requirementInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RequirementInfos
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
