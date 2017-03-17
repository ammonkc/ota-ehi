<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageLimitType StructType
 * @subpackage Structs
 */
class CoverageLimitType extends AbstractStructBase
{
    /**
     * The Deductible
     * @var \ammonkc\otaehi\StructType\Deductible
     */
    public $Deductible;
    /**
     * The PolicyLimit
     * @var \ammonkc\otaehi\StructType\PolicyLimit
     */
    public $PolicyLimit;
    /**
     * The IndividualLimit
     * @var \ammonkc\otaehi\StructType\IndividualLimit
     */
    public $IndividualLimit;
    /**
     * The TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The CoverageLevel
     * @var UNKNOWN
     */
    public $CoverageLevel;
    /**
     * The CoverageType
     * @var UNKNOWN
     */
    public $CoverageType;
    /**
     * The UnlimitedCoverage
     * @var bool
     */
    public $UnlimitedCoverage;
    /**
     * The Covered
     * @var bool
     */
    public $Covered;
    /**
     * Constructor method for CoverageLimitType
     * @uses CoverageLimitType::setDeductible()
     * @uses CoverageLimitType::setPolicyLimit()
     * @uses CoverageLimitType::setIndividualLimit()
     * @uses CoverageLimitType::setTPA_Extensions()
     * @uses CoverageLimitType::setCoverageLevel()
     * @uses CoverageLimitType::setCoverageType()
     * @uses CoverageLimitType::setUnlimitedCoverage()
     * @uses CoverageLimitType::setCovered()
     * @param \ammonkc\otaehi\StructType\Deductible $deductible
     * @param \ammonkc\otaehi\StructType\PolicyLimit $policyLimit
     * @param \ammonkc\otaehi\StructType\IndividualLimit $individualLimit
     * @param mixed $tPA_Extensions
     * @param UNKNOWN $coverageLevel
     * @param UNKNOWN $coverageType
     * @param bool $unlimitedCoverage
     * @param bool $covered
     */
    public function __construct(\ammonkc\otaehi\StructType\Deductible $deductible = null, \ammonkc\otaehi\StructType\PolicyLimit $policyLimit = null, \ammonkc\otaehi\StructType\IndividualLimit $individualLimit = null, $tPA_Extensions = null, UNKNOWN $coverageLevel = null, UNKNOWN $coverageType = null, $unlimitedCoverage = null, $covered = null)
    {
        $this
            ->setDeductible($deductible)
            ->setPolicyLimit($policyLimit)
            ->setIndividualLimit($individualLimit)
            ->setTPA_Extensions($tPA_Extensions)
            ->setCoverageLevel($coverageLevel)
            ->setCoverageType($coverageType)
            ->setUnlimitedCoverage($unlimitedCoverage)
            ->setCovered($covered);
    }
    /**
     * Get Deductible value
     * @return \ammonkc\otaehi\StructType\Deductible|null
     */
    public function getDeductible()
    {
        return $this->Deductible;
    }
    /**
     * Set Deductible value
     * @param \ammonkc\otaehi\StructType\Deductible $deductible
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setDeductible(\ammonkc\otaehi\StructType\Deductible $deductible = null)
    {
        $this->Deductible = $deductible;
        return $this;
    }
    /**
     * Get PolicyLimit value
     * @return \ammonkc\otaehi\StructType\PolicyLimit|null
     */
    public function getPolicyLimit()
    {
        return $this->PolicyLimit;
    }
    /**
     * Set PolicyLimit value
     * @param \ammonkc\otaehi\StructType\PolicyLimit $policyLimit
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setPolicyLimit(\ammonkc\otaehi\StructType\PolicyLimit $policyLimit = null)
    {
        $this->PolicyLimit = $policyLimit;
        return $this;
    }
    /**
     * Get IndividualLimit value
     * @return \ammonkc\otaehi\StructType\IndividualLimit|null
     */
    public function getIndividualLimit()
    {
        return $this->IndividualLimit;
    }
    /**
     * Set IndividualLimit value
     * @param \ammonkc\otaehi\StructType\IndividualLimit $individualLimit
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setIndividualLimit(\ammonkc\otaehi\StructType\IndividualLimit $individualLimit = null)
    {
        $this->IndividualLimit = $individualLimit;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get CoverageLevel value
     * @return UNKNOWN|null
     */
    public function getCoverageLevel()
    {
        return $this->CoverageLevel;
    }
    /**
     * Set CoverageLevel value
     * @param UNKNOWN $coverageLevel
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setCoverageLevel(UNKNOWN $coverageLevel = null)
    {
        $this->CoverageLevel = $coverageLevel;
        return $this;
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
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setCoverageType(UNKNOWN $coverageType = null)
    {
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get UnlimitedCoverage value
     * @return bool|null
     */
    public function getUnlimitedCoverage()
    {
        return $this->UnlimitedCoverage;
    }
    /**
     * Set UnlimitedCoverage value
     * @param bool $unlimitedCoverage
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setUnlimitedCoverage($unlimitedCoverage = null)
    {
        $this->UnlimitedCoverage = $unlimitedCoverage;
        return $this;
    }
    /**
     * Get Covered value
     * @return bool|null
     */
    public function getCovered()
    {
        return $this->Covered;
    }
    /**
     * Set Covered value
     * @param bool $covered
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
     */
    public function setCovered($covered = null)
    {
        $this->Covered = $covered;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CoverageLimitType
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
