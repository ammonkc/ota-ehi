<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehResRQCore StructType
 * @subpackage Structs
 */
class VehResRQCore extends AbstractStructBase
{
    /**
     * The OptionChangeIndicator
     * @var bool
     */
    public $OptionChangeIndicator;
    /**
     * Constructor method for VehResRQCore
     * @uses VehResRQCore::setOptionChangeIndicator()
     * @param bool $optionChangeIndicator
     */
    public function __construct($optionChangeIndicator = null)
    {
        $this
            ->setOptionChangeIndicator($optionChangeIndicator);
    }
    /**
     * Get OptionChangeIndicator value
     * @return bool|null
     */
    public function getOptionChangeIndicator()
    {
        return $this->OptionChangeIndicator;
    }
    /**
     * Set OptionChangeIndicator value
     * @param bool $optionChangeIndicator
     * @return \Ammonkc\Otaehi\StructType\VehResRQCore
     */
    public function setOptionChangeIndicator($optionChangeIndicator = null)
    {
        $this->OptionChangeIndicator = $optionChangeIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\VehResRQCore
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
