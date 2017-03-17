<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequirementInfo StructType
 * @subpackage Structs
 */
class RequirementInfo extends AbstractStructBase
{
    /**
     * The Type
     * @var LocationDetailRequirementInfoType
     */
    public $Type;
    /**
     * Constructor method for RequirementInfo
     * @uses RequirementInfo::setType()
     * @param LocationDetailRequirementInfoType $type
     */
    public function __construct(LocationDetailRequirementInfoType $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return LocationDetailRequirementInfoType|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param LocationDetailRequirementInfoType $type
     * @return \Ammonkc\Otaehi\StructType\RequirementInfo
     */
    public function setType(LocationDetailRequirementInfoType $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\RequirementInfo
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
