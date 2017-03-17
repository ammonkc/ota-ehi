<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePrefs StructType
 * @subpackage Structs
 */
class CoveragePrefs extends AbstractStructBase
{
    /**
     * The CoveragePref
     * @var \Ammonkc\Otaehi\StructType\CoveragePref
     */
    public $CoveragePref;
    /**
     * Constructor method for CoveragePrefs
     * @uses CoveragePrefs::setCoveragePref()
     * @param \Ammonkc\Otaehi\StructType\CoveragePref $coveragePref
     */
    public function __construct(\Ammonkc\Otaehi\StructType\CoveragePref $coveragePref = null)
    {
        $this
            ->setCoveragePref($coveragePref);
    }
    /**
     * Get CoveragePref value
     * @return \Ammonkc\Otaehi\StructType\CoveragePref|null
     */
    public function getCoveragePref()
    {
        return $this->CoveragePref;
    }
    /**
     * Set CoveragePref value
     * @param \Ammonkc\Otaehi\StructType\CoveragePref $coveragePref
     * @return \Ammonkc\Otaehi\StructType\CoveragePrefs
     */
    public function setCoveragePref(\Ammonkc\Otaehi\StructType\CoveragePref $coveragePref = null)
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
     * @return \Ammonkc\Otaehi\StructType\CoveragePrefs
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
