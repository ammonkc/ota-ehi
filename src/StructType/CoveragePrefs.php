<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePrefs StructType
 * @subpackage Structs
 */
class CoveragePrefs extends AbstractStructBase
{
    /**
     * The CoveragePref
     * @var \ammonkc\otaehi\StructType\CoveragePref
     */
    public $CoveragePref;
    /**
     * Constructor method for CoveragePrefs
     * @uses CoveragePrefs::setCoveragePref()
     * @param \ammonkc\otaehi\StructType\CoveragePref $coveragePref
     */
    public function __construct(\ammonkc\otaehi\StructType\CoveragePref $coveragePref = null)
    {
        $this
            ->setCoveragePref($coveragePref);
    }
    /**
     * Get CoveragePref value
     * @return \ammonkc\otaehi\StructType\CoveragePref|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @param \ammonkc\otaehi\StructType\CoveragePref $coveragePref
     * @return \ammonkc\otaehi\StructType\CoveragePrefs
     */
    public function setCoveragePref(\ammonkc\otaehi\StructType\CoveragePref $coveragePref = null)
    {
        $this->CoveragePref = $coveragePref;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\CoveragePrefs
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
