<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePref StructType
 * @subpackage Structs
 */
class CoveragePref extends AbstractStructBase
{
    /**
     * The CoverageType
     * @var UNKNOWN
     */
    public $CoverageType;
    /**
     * The Code
     * @var UNKNOWN
     */
    public $Code;
    /**
     * The PreferLevel
     * @var UNKNOWN
     */
    public $PreferLevel;
    /**
     * Constructor method for CoveragePref
     * @uses CoveragePref::setCoverageType()
     * @uses CoveragePref::setCode()
     * @uses CoveragePref::setPreferLevel()
     * @param UNKNOWN $coverageType
     * @param UNKNOWN $code
     * @param UNKNOWN $preferLevel
     */
    public function __construct(UNKNOWN $coverageType = null, UNKNOWN $code = null, UNKNOWN $preferLevel = null)
    {
        $this
            ->setCoverageType($coverageType)
            ->setCode($code)
            ->setPreferLevel($preferLevel);
    }
    /**
     * Get CoverageType value
     * @return UNKNOWN|null
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }
    /**
     * Set CoverageType value
     * @param UNKNOWN $coverageType
     * @return \ammonkc\otaehi\StructType\CoveragePref
     */
    public function setCoverageType(UNKNOWN $coverageType = null)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get Code value
     * @return UNKNOWN|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param UNKNOWN $code
     * @return \ammonkc\otaehi\StructType\CoveragePref
     */
    public function setCode(UNKNOWN $code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get PreferLevel value
     * @return UNKNOWN|null
     */
    public function getPreferLevel()
    {
        return $this->PreferLevel;
    }
    /**
     * Set PreferLevel value
     * @param UNKNOWN $preferLevel
     * @return \ammonkc\otaehi\StructType\CoveragePref
     */
    public function setPreferLevel(UNKNOWN $preferLevel = null)
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
     * @return \ammonkc\otaehi\StructType\CoveragePref
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
