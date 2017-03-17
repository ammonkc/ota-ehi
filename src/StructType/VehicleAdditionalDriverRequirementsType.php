<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAdditionalDriverRequirementsType StructType
 * @subpackage Structs
 */
class VehicleAdditionalDriverRequirementsType extends AbstractStructBase
{
    /**
     * The AddlDriverInfos
     * @var \ammonkc\otaehi\StructType\AddlDriverInfos
     */
    public $AddlDriverInfos;
    /**
     * Constructor method for VehicleAdditionalDriverRequirementsType
     * @uses VehicleAdditionalDriverRequirementsType::setAddlDriverInfos()
     * @param \ammonkc\otaehi\StructType\AddlDriverInfos $addlDriverInfos
     */
    public function __construct(\ammonkc\otaehi\StructType\AddlDriverInfos $addlDriverInfos = null)
    {
        $this
            ->setAddlDriverInfos($addlDriverInfos);
    }
    /**
     * Get AddlDriverInfos value
     * @return \ammonkc\otaehi\StructType\AddlDriverInfos|null
     */
    public function getAddlDriverInfos()
    {
        return $this->AddlDriverInfos;
    }
    /**
     * Set AddlDriverInfos value
     * @param \ammonkc\otaehi\StructType\AddlDriverInfos $addlDriverInfos
     * @return \ammonkc\otaehi\StructType\VehicleAdditionalDriverRequirementsType
     */
    public function setAddlDriverInfos(\ammonkc\otaehi\StructType\AddlDriverInfos $addlDriverInfos = null)
    {
        $this->AddlDriverInfos = $addlDriverInfos;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\VehicleAdditionalDriverRequirementsType
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
