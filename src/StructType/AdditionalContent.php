<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalContent StructType
 * @subpackage Structs
 */
class AdditionalContent extends AbstractStructBase
{
    /**
     * The ContentGroupCode
     * @var
     */
    public $ContentGroupCode;
    /**
     * Constructor method for AdditionalContent
     * @uses AdditionalContent::setContentGroupCode()
     * @param  $contentGroupCode
     */
    public function __construct( $contentGroupCode = null)
    {
        $this
            ->setContentGroupCode($contentGroupCode);
    }
    /**
     * Get ContentGroupCode value
     * @return |null
     */
    public function getContentGroupCode()
    {
        return $this->ContentGroupCode;
    }
    /**
     * Set ContentGroupCode value
     * @param  $contentGroupCode
     * @return \Ammonkc\Otaehi\StructType\AdditionalContent
     */
    public function setContentGroupCode( $contentGroupCode = null)
    {
        $this->ContentGroupCode = $contentGroupCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\AdditionalContent
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
