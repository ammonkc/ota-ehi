<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor StructType
 * @subpackage Structs
 */
class Vendor extends AbstractStructBase
{
    /**
     * The ParticipationLevelCode
     * @var
     */
    public $ParticipationLevelCode;
    /**
     * Constructor method for Vendor
     * @uses Vendor::setParticipationLevelCode()
     * @param  $participationLevelCode
     */
    public function __construct( $participationLevelCode = null)
    {
        $this
            ->setParticipationLevelCode($participationLevelCode);
    }
    /**
     * Get ParticipationLevelCode value
     * @return |null
     */
    public function getParticipationLevelCode()
    {
        return $this->ParticipationLevelCode;
    }
    /**
     * Set ParticipationLevelCode value
     * @param  $participationLevelCode
     * @return \Ammonkc\Otaehi\StructType\Vendor
     */
    public function setParticipationLevelCode( $participationLevelCode = null)
    {
        $this->ParticipationLevelCode = $participationLevelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\Vendor
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
