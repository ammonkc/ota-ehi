<?php

namespace Ammonkc\Otaehi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverages StructType
 * @subpackage Structs
 */
class Coverages extends AbstractStructBase
{
    /**
     * The Coverage
     * @var \Ammonkc\Otaehi\StructType\Coverage
     */
    public $Coverage;
    /**
     * Constructor method for Coverages
     * @uses Coverages::setCoverage()
     * @param \Ammonkc\Otaehi\StructType\Coverage $coverage
     */
    public function __construct(\Ammonkc\Otaehi\StructType\Coverage $coverage = null)
    {
        $this
            ->setCoverage($coverage);
    }
    /**
     * Get Coverage value
     * @return \Ammonkc\Otaehi\StructType\Coverage|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @param \Ammonkc\Otaehi\StructType\Coverage $coverage
     * @return \Ammonkc\Otaehi\StructType\Coverages
     */
    public function setCoverage(\Ammonkc\Otaehi\StructType\Coverage $coverage = null)
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
     * @return \Ammonkc\Otaehi\StructType\Coverages
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
