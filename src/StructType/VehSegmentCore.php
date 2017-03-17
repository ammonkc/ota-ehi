<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehSegmentCore StructType
 * @subpackage Structs
 */
class VehSegmentCore extends AbstractStructBase
{
    /**
     * The OptionChangeAllowedIndicator
     * @var bool
     */
    public $OptionChangeAllowedIndicator;
    /**
     * Constructor method for VehSegmentCore
     * @uses VehSegmentCore::setOptionChangeAllowedIndicator()
     * @param bool $optionChangeAllowedIndicator
     */
    public function __construct($optionChangeAllowedIndicator = null)
    {
        $this
            ->setOptionChangeAllowedIndicator($optionChangeAllowedIndicator);
    }
    /**
     * Get OptionChangeAllowedIndicator value
     * @return bool|null
     */
    public function getOptionChangeAllowedIndicator()
    {
        return $this->OptionChangeAllowedIndicator;
    }
    /**
     * Set OptionChangeAllowedIndicator value
     * @param bool $optionChangeAllowedIndicator
     * @return \Ammonkc\Otaehi\StructType\VehSegmentCore
     */
    public function setOptionChangeAllowedIndicator($optionChangeAllowedIndicator = null)
    {
        $this->OptionChangeAllowedIndicator = $optionChangeAllowedIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehSegmentCore
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
