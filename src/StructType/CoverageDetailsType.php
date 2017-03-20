<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageDetailsType StructType
 * @subpackage Structs
 */
class CoverageDetailsType extends AbstractStructBase
{
    /**
     * The CoverageTextType
     * @var
     */
    public $CoverageTextType;
    /**
     * Constructor method for CoverageDetailsType
     * @uses CoverageDetailsType::setCoverageTextType()
     * @param  $coverageTextType
     */
    public function __construct( $coverageTextType = null)
    {
        $this
            ->setCoverageTextType($coverageTextType);
    }
    /**
     * Get CoverageTextType value
     * @return |null
     */
    public function getCoverageTextType()
    {
        return $this->CoverageTextType;
    }
    /**
     * Set CoverageTextType value
     * @param  $coverageTextType
     * @return \Ammonkc\Otaehi\StructType\CoverageDetailsType
     */
    public function setCoverageTextType( $coverageTextType = null)
    {
        $this->CoverageTextType = $coverageTextType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoverageDetailsType
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
