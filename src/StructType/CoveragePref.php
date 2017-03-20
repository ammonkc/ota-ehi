<?php

namespace Ammonkc\Otaehi\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePref StructType
 * @subpackage Structs
 */
class CoveragePref extends AbstractStructBase
{
    /**
     * The CoverageType
     * @var
     */
    public $CoverageType;
    /**
     * The Code
     * @var
     */
    public $Code;
    /**
     * The PreferLevel
     * @var
     */
    public $PreferLevel;
    /**
     * Constructor method for CoveragePref
     * @uses CoveragePref::setCoverageType()
     * @uses CoveragePref::setCode()
     * @uses CoveragePref::setPreferLevel()
     * @param  $coverageType
     * @param  $code
     * @param  $preferLevel
     */
    public function __construct( $coverageType = null,  $code = null,  $preferLevel = null)
    {
        $this
            ->setCoverageType($coverageType)
            ->setCode($code)
            ->setPreferLevel($preferLevel);
    }
    /**
     * Get CoverageType value
     * @return |null
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }
    /**
     * Set CoverageType value
     * @param  $coverageType
     * @return \Ammonkc\Otaehi\StructType\CoveragePref
     */
    public function setCoverageType( $coverageType = null)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get Code value
     * @return |null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param  $code
     * @return \Ammonkc\Otaehi\StructType\CoveragePref
     */
    public function setCode( $code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get PreferLevel value
     * @return |null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param  $preferLevel
     * @return \Ammonkc\Otaehi\StructType\CoveragePref
     */
    public function setPreferLevel( $preferLevel = null)
    {
        $this->PreferLevel = $preferLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ammonkc\Otaehi\StructType\CoveragePref
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
