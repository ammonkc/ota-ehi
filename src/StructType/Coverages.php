<?php

namespace ammonkc\otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverages StructType
 * @subpackage Structs
 */
class Coverages extends AbstractStructBase
{
    /**
     * The Coverage
     * @var \ammonkc\otaehi\StructType\Coverage
     */
    public $Coverage;
    /**
     * Constructor method for Coverages
     * @uses Coverages::setCoverage()
     * @param \ammonkc\otaehi\StructType\Coverage $coverage
     */
    public function __construct(\ammonkc\otaehi\StructType\Coverage $coverage = null)
    {
        $this
            ->setCoverage($coverage);
    }
    /**
     * Get Coverage value
     * @return \ammonkc\otaehi\StructType\Coverage|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @param \ammonkc\otaehi\StructType\Coverage $coverage
     * @return \ammonkc\otaehi\StructType\Coverages
     */
    public function setCoverage(\ammonkc\otaehi\StructType\Coverage $coverage = null)
    {
        $this->Coverage = $coverage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \ammonkc\otaehi\StructType\Coverages
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
