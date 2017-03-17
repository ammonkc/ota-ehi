<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverage StructType
 * @subpackage Structs
 */
class Coverage extends AbstractStructBase
{
    /**
     * The CoverageInfo
     * @var mixed
     */
    public $CoverageInfo;
    /**
     * The CoverageFees
     * @var \ammonkc\otaehi\StructType\CoverageFees
     */
    public $CoverageFees;
    /**
     * The Type
     * @var UNKNOWN
     */
    public $Type;
    /**
     * The RequiredInd
     * @var bool
     */
    public $RequiredInd;
    /**
     * Constructor method for Coverage
     * @uses Coverage::setCoverageInfo()
     * @uses Coverage::setCoverageFees()
     * @uses Coverage::setType()
     * @uses Coverage::setRequiredInd()
     * @param mixed $coverageInfo
     * @param \ammonkc\otaehi\StructType\CoverageFees $coverageFees
     * @param UNKNOWN $type
     * @param bool $requiredInd
     */
    public function __construct($coverageInfo = null, \ammonkc\otaehi\StructType\CoverageFees $coverageFees = null, UNKNOWN $type = null, $requiredInd = null)
    {
        $this
            ->setCoverageInfo($coverageInfo)
            ->setCoverageFees($coverageFees)
            ->setType($type)
            ->setRequiredInd($requiredInd);
    }
    /**
     * Get CoverageInfo value
     * @return mixed|null
     */
    public function getCoverageInfo()
    {
        return $this->CoverageInfo;
    }
    /**
     * Set CoverageInfo value
     * @param mixed $coverageInfo
     * @return \ammonkc\otaehi\StructType\Coverage
     */
    public function setCoverageInfo($coverageInfo = null)
    {
        $this->CoverageInfo = $coverageInfo;
        return $this;
    }
    /**
     * Get CoverageFees value
     * @return \ammonkc\otaehi\StructType\CoverageFees|null
     */
    public function getCoverageFees()
    {
        return $this->CoverageFees;
    }
    /**
     * Set CoverageFees value
     * @param \ammonkc\otaehi\StructType\CoverageFees $coverageFees
     * @return \ammonkc\otaehi\StructType\Coverage
     */
    public function setCoverageFees(\ammonkc\otaehi\StructType\CoverageFees $coverageFees = null)
    {
        $this->CoverageFees = $coverageFees;
        return $this;
    }
    /**
     * Get Type value
     * @return UNKNOWN|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param UNKNOWN $type
     * @return \ammonkc\otaehi\StructType\Coverage
     */
    public function setType(UNKNOWN $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get RequiredInd value
     * @return bool|null
     */
    public function getRequiredInd()
    {
        return $this->RequiredInd;
    }
    /**
     * Set RequiredInd value
     * @param bool $requiredInd
     * @return \ammonkc\otaehi\StructType\Coverage
     */
    public function setRequiredInd($requiredInd = null)
    {
        $this->RequiredInd = $requiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Coverage
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
